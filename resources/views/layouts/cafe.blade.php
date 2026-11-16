<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Cloud Cafe</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Patrick+Hand&display=swap" rel="stylesheet">
    <style>
        :root {
            --paper: #fffdf5;
            --line: #cfe5f7;
            --margin: #f4a3a3;
            --ink: #2b3a67;
            --desk: #d9c7a3;
            --pink: #f9a8d4;
            --blue: #93c5fd;
            --yellow: #fde68a;
            --green: #bbf7d0;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Patrick Hand', 'Comic Sans MS', cursive;
            font-size: 1.15rem;
            color: var(--ink);
            background-color: var(--desk);
            background-image: radial-gradient(rgba(255,255,255,.28) 1px, transparent 1px);
            background-size: 18px 18px;
        }
        .desk { max-width: 1000px; margin: 26px auto 40px; padding: 0 16px; }

        /* index tabs */
        .tabs {
            display: flex;
            align-items: flex-end;
            gap: 6px;
            padding-left: 70px;
            flex-wrap: wrap;
        }
        .brand {
            font-family: 'Caveat', cursive;
            font-size: 2.1rem;
            font-weight: 700;
            color: #7c2d12;
            margin-right: auto;
            line-height: 1;
            padding-bottom: 6px;
        }
        .tab {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 18px 6px;
            border: 2px solid rgba(43,58,103,.4);
            border-bottom: none;
            border-radius: 14px 14px 0 0;
            text-decoration: none;
            color: var(--ink);
            font-family: inherit;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            position: relative;
            top: 2px;
            transition: transform .15s;
        }
        .tab:hover { transform: translateY(-3px); }
        .tab.active { top: 0; padding-top: 13px; }
        .tab.yellow { background: var(--yellow); }
        .tab.pink   { background: var(--pink); }
        .tab.blue   { background: var(--blue); }
        .tab.green  { background: var(--green); }
        .tab.gray   { background: #e5e7eb; }
        .tab img { width: 24px; height: 24px; border-radius: 50%; object-fit: cover; border: 2px solid #fff; }
        .tabs form { margin: 0; }

        /* the notebook page */
        .notebook {
            position: relative;
            background-color: var(--paper);
            background-image: repeating-linear-gradient(
                to bottom, transparent 0, transparent 31px, var(--line) 31px, var(--line) 32px);
            border: 2px solid rgba(43,58,103,.25);
            border-radius: 6px 14px 14px 6px;
            padding: 34px 40px 44px 100px;
            min-height: 62vh;
            box-shadow: 0 12px 28px rgba(0,0,0,.25), inset -6px 0 0 rgba(0,0,0,.04);
        }
        .notebook::before {            /* red margin line */
            content: "";
            position: absolute;
            top: 0; bottom: 0; left: 76px;
            width: 2px;
            background: var(--margin);
        }
        .notebook::after {             /* binding holes */
            content: "";
            position: absolute;
            top: 0; bottom: 0; left: 20px;
            width: 30px;
            background: radial-gradient(circle at 15px 22px,
                var(--desk) 0 8px, #8d7a58 9px 10px, transparent 11px) repeat-y;
            background-size: 30px 64px;
        }

        h1 {
            font-family: 'Caveat', cursive;
            font-size: 2.8rem;
            line-height: 1.1;
            margin: 0 0 12px;
            color: #be185d;
        }
        h2 { font-family: 'Caveat', cursive; font-size: 1.9rem; margin: 18px 0 4px; color: var(--ink); }
        p, li { line-height: 32px; margin: 0; }
        ul { margin: 6px 0 6px 0; padding-left: 22px; }
        li::marker { color: #be185d; content: "- "; }

        /* tables */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 14px;
            background: rgba(255,253,245,.93);
        }
        th {
            text-align: left;
            padding: 8px 10px;
            font-weight: 700;
            background: linear-gradient(transparent 25%, var(--yellow) 25%, var(--yellow) 90%, transparent 90%);
        }
        td {
            padding: 8px 10px;
            border-bottom: 1px dashed rgba(43,58,103,.35);
            vertical-align: middle;
        }
        tr:hover td { background: rgba(147,197,253,.18); }

        /* buttons (hand-drawn look) */
        .btn {
            display: inline-block;
            padding: 6px 16px;
            border: 2px solid var(--ink);
            border-radius: 255px 15px 225px 15px / 15px 225px 15px 255px;
            background: var(--blue);
            color: var(--ink) !important;
            font-family: inherit;
            font-size: 1rem;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
            box-shadow: 2px 2px 0 var(--ink);
            transition: transform .12s, box-shadow .12s;
        }
        .btn:hover { transform: translate(-1px, -1px) rotate(-1deg); box-shadow: 3px 3px 0 var(--ink); }
        .btn-pink { background: var(--pink); }
        .btn-gray { background: #e5e7eb; }

        /* forms */
        label { display: block; margin: 14px 0 2px; font-weight: 700; }
        input[type=text], input[type=email], input[type=file] {
            width: 100%;
            padding: 6px 4px;
            border: none;
            border-bottom: 2px dashed var(--ink);
            background: transparent;
            font-family: inherit;
            font-size: 1.15rem;
            color: var(--ink);
        }
        input[type=text]:focus, input[type=email]:focus {
            outline: none;
            border-bottom-style: solid;
            background: rgba(253,230,138,.35);
        }

        /* sticky-note alerts */
        .alert-success, .alert-error {
            position: relative;
            padding: 14px 18px;
            margin: 6px 0 18px;
            border-radius: 2px;
            box-shadow: 3px 4px 8px rgba(0,0,0,.2);
        }
        .alert-success { background: #fef08a; transform: rotate(-.6deg); }
        .alert-error   { background: #fecdd3; transform: rotate(.5deg); }
        .alert-success::before, .alert-error::before {
            content: "";
            position: absolute;
            top: -10px; left: 50%;
            width: 70px; height: 20px;
            transform: translateX(-50%) rotate(-2deg);
            background: rgba(255,255,255,.55);
            border: 1px solid rgba(0,0,0,.08);
        }
        .alert-error ul { margin: 0; padding-left: 18px; }

        /* avatars */
        .avatar {
            width: 50px; height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 1px 4px rgba(0,0,0,.4);
        }
        .avatar-lg { width: 110px; height: 110px; }

        .actions { margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap; align-items: center; }
        .actions form { margin: 0; }
        .top-bar { display: flex; justify-content: space-between; align-items: center; gap: 12px; }
        .profile { display: flex; gap: 26px; align-items: center; margin-top: 10px; flex-wrap: wrap; }

        @media (max-width: 700px) {
            .tabs { padding-left: 16px; }
            .notebook { padding: 24px 16px 32px 58px; }
            .notebook::before { left: 44px; }
            .notebook::after { left: 6px; }
            table { font-size: .95rem; }
        }
    </style>
</head>
<body>
    <div class="desk">
        <div class="tabs">
            <span class="brand">Cloud Cafe</span>

            <a href="{{ route('about') }}" class="tab yellow {{ request()->routeIs('about') ? 'active' : '' }}">About</a>

            @auth
                <a href="{{ route('customers.index') }}" class="tab pink {{ request()->routeIs('customers.*') ? 'active' : '' }}">Customers</a>
                <a href="{{ route('users.index') }}" class="tab blue {{ request()->routeIs('users.*') ? 'active' : '' }}">User Accounts</a>
                <a href="{{ route('account') }}" class="tab green {{ request()->routeIs('account') ? 'active' : '' }}">
                    <img src="{{ Auth::user()->avatar_url }}" alt="">
                    {{ Auth::user()->full_name }}
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="tab gray">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="tab pink">Login</a>
            @endauth
        </div>

        <div class="notebook">
            @if (session('success'))
                <div class="alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>
    </div>
</body>
</html>