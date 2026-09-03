<!DOCTYPE html>
<html lang="en" class="h-full w-full overflow-hidden">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - Stock Summit UI 2026</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/stock_summit_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/stock_summit_logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/stock_summit_logo.png') }}">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: #0c0e2c;
        }
        iframe {
            border: none;
            width: 100%;
            height: 100%;
            display: block;
        }
    </style>
</head>
<body>
    <iframe allowfullscreen="allowfullscreen" allow="autoplay; fullscreen; clipboard-write" scrolling="no" class="fp-iframe" src="{{ $heyzineUrl }}"></iframe>
</body>
</html>
