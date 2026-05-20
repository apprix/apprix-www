<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tarkistetaan kirjautuminen…</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            display: flex; align-items: center; justify-content: center;
            min-height: 100vh; margin: 0;
            background: #f9fafb; color: #374151;
        }
        .box {
            text-align: center; padding: 48px 32px;
        }
        .spinner {
            width: 36px; height: 36px; border: 3px solid #e5e7eb;
            border-top-color: #f97316; border-radius: 50%;
            animation: spin 0.7s linear infinite;
            margin: 0 auto 20px;
        }
        @keyframes spin { to { transform: rotate(360deg); } }
        p { margin: 0; font-size: 0.95rem; color: #6b7280; }
    </style>
</head>
<body>
    <div class="box">
        <div class="spinner"></div>
        <p>Tarkistetaan Builder-kirjautuminen…</p>
    </div>

    <script>
        fetch('{{ $checkliUrl }}', {
            method: 'GET',
            credentials: 'include',
        })
        .then(res => res.text())
        .then(body => {
            if (body.trim() === '1') {
                // Logged in — set our session then redirect
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
                window.location.href = '{{ $builderLoginUrl }}';
            }
        })
        .catch(() => {
            window.location.href = '{{ $builderLoginUrl }}';
        });
    </script>
</body>
</html>
