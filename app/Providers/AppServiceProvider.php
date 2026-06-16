<?php

namespace App\Providers;

use App\Policies\CustomUserPolicy;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Statamic\Events\FormSubmitted;
use Statamic\Policies\UserPolicy;
use Studio1902\PeakSeo\Handlers\ErrorPage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserPolicy::class, CustomUserPolicy::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Statamic::script('app', 'cp');
        // Statamic::style('app', 'cp');

        ErrorPage::handle404AsEntry();

        $this->bootRoute();
        $this->bootFormSpamProtection();
    }

    /**
     * Time-trap spam protection for the public forms.
     *
     * The honeypot (`honeypot: fax` in each form's YAML) is handled by Statamic
     * core. This adds a second layer: the front-end stamps how many milliseconds
     * elapsed before submit. A human needs several seconds to fill these forms,
     * so a present-but-tiny value means a bot. Returning false from a
     * FormSubmitted listener makes Statamic do a *silent* failure: the bot sees
     * "success" but nothing is stored or emailed.
     *
     * The timer field name differs by submit mechanism: the contact form
     * (alpine:form, only blueprint keys are sent) carries `ts`; the wizard and
     * helpdesk forms (FormData) carry `_ts`.
     *
     * Deliberately lenient: we reject only when a timer is PRESENT and too small.
     * A missing timer (e.g. a native Enter-key submit, where the value never
     * makes it into the payload) is left alone so we never silently drop a real
     * lead — the honeypot still covers no-JS bots.
     */
    public function bootFormSpamProtection(): void
    {
        Event::listen(FormSubmitted::class, function (FormSubmitted $event) {
            $handle = $event->submission->form()->handle();

            if (! in_array($handle, ['contact', 'helpdesk'], true)) {
                return;
            }

            $request = request();

            foreach (['ts', '_ts'] as $key) {
                $timer = $request->input($key);

                if ($timer !== null && $timer !== '' && (int) $timer < 3000) {
                    return false;
                }
            }
        });
    }

    public function bootRoute(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        // Generous limiter for the search-as-you-type JSON endpoints. Caps
        // scripted abuse without tripping normal (debounced) human searching.
        RateLimiter::for('search', function (Request $request) {
            return Limit::perMinute(120)->by($request->ip());
        });
    }
}
