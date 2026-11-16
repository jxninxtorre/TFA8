<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Patrick+Hand&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px 12px;
            font-family: 'Patrick Hand', 'Comic Sans MS', cursive;
            color: #2b3a67;
            background-color: #d9c7a3;
            background-image: radial-gradient(rgba(255,255,255,.28) 1px, transparent 1px);
            background-size: 18px 18px;
        }
        .page {
            position: relative;
            width: 100%;
            max-width: 480px;
            padding: 30px 32px 36px 78px;
            background-color: #fffdf5;
            background-image: repeating-linear-gradient(
                to bottom, transparent 0, transparent 31px, #cfe5f7 31px, #cfe5f7 32px);
            border: 2px solid rgba(43,58,103,.25);
            border-radius: 6px 14px 14px 6px;
            box-shadow: 0 12px 28px rgba(0,0,0,.25);
        }
        .page::before {
            content: "";
            position: absolute;
            top: 0; bottom: 0; left: 58px;
            width: 2px;
            background: #f4a3a3;
        }
        .page::after {
            content: "";
            position: absolute;
            top: 0; bottom: 0; left: 14px;
            width: 30px;
            background: radial-gradient(circle at 15px 22px,
                #d9c7a3 0 8px, #8d7a58 9px 10px, transparent 11px) repeat-y;
            background-size: 30px 64px;
        }
        .title { font-family: 'Caveat', cursive; font-size: 2.6rem; font-weight: 700; color: #be185d; line-height: 1.1; margin: 0; }
        .sub { margin: 0 0 14px; }
    </style>
</head>
<body>
    <div class="page">
        <h1 class="title">Cloud Cafe</h1>
        <p class="sub">Sign in to open your notebook</p>
        {{ $slot }}
    </div>
</body>
</html>