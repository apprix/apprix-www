@php
    $isEnglish = str_starts_with($redirectUrl, '/en/') || $redirectUrl === '/en';
@endphp
<!DOCTYPE html>
<html lang="{{ $isEnglish ? 'en' : 'fi' }}" class="antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $isEnglish ? 'Checking login…' : 'Tarkistetaan kirjautuminen…' }}</title>
    @vite('resources/css/site.css')
    <style>
        .auth-spinner {
            width: 36px; height: 36px; border: 3px solid #e5e7eb;
            border-top-color: #f87206; border-radius: 50%;
            animation: spin 0.7s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }
    </style>
</head>
<body class="flex min-h-screen flex-col items-center justify-center bg-neutral-50 px-4">

    {{-- Checking state --}}
    <div id="checking" class="text-center p-12">
        <div class="auth-spinner mx-auto mb-5"></div>
        <p class="text-sm text-neutral-500">
            {{ $isEnglish ? 'Checking Builder login…' : 'Tarkistetaan Builder-kirjautuminen…' }}
        </p>
    </div>

    {{-- Not logged in state --}}
    <div id="login-required" class="hidden w-full max-w-sm rounded-2xl border border-neutral-200 bg-white p-8 shadow-sm text-center">

        <a href="/" class="inline-block mb-6">
            <img src="/visuals/apprix_logo_rgb.png" alt="Apprix" class="h-8 w-auto mx-auto">
        </a>

        <div class="mb-4 flex items-center justify-center rounded-full bg-neutral-100 w-12 h-12 mx-auto">
            <svg class="h-6 w-6 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
        </div>

        <h1 class="text-lg font-semibold text-neutral-900">
            {{ $isEnglish ? 'Log in to Apprix Builder' : 'Kirjaudu Apprix Builderiin' }}
        </h1>
        <p class="mt-2 text-sm text-neutral-500 leading-relaxed">
            {{ $isEnglish
                ? 'This content is only available to Apprix Builder users. Please log in to Builder first, then come back here.'
                : 'Tämä sisältö on saatavilla vain Apprix Builder -käyttäjille. Kirjaudu ensin sisään Builderiin, ja palaa sitten tänne.' }}
        </p>

        <a
            href="{{ $builderLoginUrl }}"
            target="_blank"
            rel="noopener"
            class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-primary px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:brightness-110"
        >
            {{ $isEnglish ? 'Log in to Builder' : 'Kirjaudu Builderiin' }}
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
            </svg>
        </a>

        <button
            onclick="window.location.reload()"
            class="mt-3 inline-flex w-full items-center justify-center rounded-xl border border-neutral-200 bg-white px-6 py-3 text-sm font-medium text-neutral-700 shadow-sm transition hover:bg-neutral-50"
        >
            {{ $isEnglish ? 'I\'ve logged in' : 'Olen kirjautunut' }}
        </button>

    </div>

    <script>
        const checking = document.getElementById('checking');
        const loginRequired = document.getElementById('login-required');

        fetch('{{ $checkliUrl }}', {
            method: 'GET',
            credentials: 'include',
        })
        .then(res => res.text())
        .then(body => {
            if (body.trim() === '1') {
                return fetch('/builder-auth/verify', {
                    method: 'POST',
                    credentials: 'same-origin',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: JSON.stringify({ redirect: '{{ $redirectUrl }}' }),
                })
                .then(r => r.json())
                .then(data => { window.location.href = data.redirect; });
            } else {
                checking.classList.add('hidden');
                loginRequired.classList.remove('hidden');
            }
        })
        .catch(() => {
            checking.classList.add('hidden');
            loginRequired.classList.remove('hidden');
        });
    </script>
</body>
</html>
