@props(['title'])

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title}} | {{ config('app.name', 'I-Rise') }} </title>
    <meta name="description" content="Event Ticketing Platform for IRise internship seminar">
    <meta name="keywords" content="IRise, IRise Internship, IRise Seminar, IRise Seminar Ticket, IRise Ticket">

    <!-- Website Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/favicon.png') }}"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{asset('css/dashboard.css?3efe')}}">
    <script src="{{asset('js/dashboard.js')}}" defer></script>
</head>

<body>
<div class="container">
    <aside>
        <div class="logo-area">
            <img src="{{asset('img/logo-dark.png')}}" alt="">
        </div>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
        </div>
        <div class="sidebar">
            <a href="{{route('dashboard')}}" @class(['active' => request()->routeIs('dashboard')])>
                    <span class="material-icons-sharp">
                        grid_view
                        </span>
                <h3>Dashboard </h3>
            </a>
            <a href="{{route('attendees')}}" @class(['active' => request()->routeIs('attendees')])>
                    <span class="material-icons-sharp">
                        person_outline
                        </span>
                <h3>Attendees</h3>
                <span class="user-count">100</span>
            </a>
            <a href="{{route('user-create')}}" @class(['active' => request()->routeIs('user-create')])>
                    <span class="material-icons-sharp">
                        add
                        </span>
                <h3>Register User</h3>
            </a>
            <a href="#">
                    <span class="material-icons-sharp">
                        grid_view
                        </span>
                <h3>Logout</h3>
            </a>
        </div>
    </aside>
    <!-- END OF ASIDE -->

    <main>
        <header class="top">
            <button id="menu-btn">
                <span class="material-icons-sharp">menu</span>
            </button>
            <div class="themeToggler">
                <span class="material-icons-sharp active">light_mode</span>
                <span class="material-icons-sharp">dark_mode</span>
            </div>
            <div class="profile">
                <div class="info">
                    <p>Hey <b>Blaise</b></p>
                    <small class="text-muted">Administrator</small>
                </div>
                <div class="profile-photo">
                    <img src="{{asset('img/avatar.png')}}" alt="profile">
                </div>
            </div>
        </header>
        <section class="content">
            <h1>{{$title}}</h1>
            {{$slot}}
        </section>
    </main>
    <!--END OF MAIN-->

    {{--    <div class="right">--}}
    {{--        <div class="top">--}}
    {{--            <button id="menu-btn">--}}
    {{--                <span class="material-icons-sharp">menu</span>--}}
    {{--            </button>--}}
    {{--            <div class="themeToggler">--}}
    {{--                <span class="material-icons-sharp active">light_mode</span>--}}
    {{--                <span class="material-icons-sharp">dark_mode</span>--}}
    {{--            </div>--}}
    {{--            <div class="profile">--}}
    {{--                <div class="info">--}}
    {{--                    <p>Hey <b>Blaise</b></p>--}}
    {{--                    <small class="text-muted">Administrator</small>--}}
    {{--                </div>--}}
    {{--                <div class="profile-photo">--}}
    {{--                    <img src="{{asset('img/avatar.png')}}" alt="profile">--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <!--END OF TOP-->--}}

    {{--        <div class="recent-updates">--}}
    {{--            <h2>Recent Updates</h2>--}}
    {{--            <div class="updates">--}}
    {{--                <div class="update">--}}
    {{--                    <div class="profile-photo">--}}
    {{--                        <img src="{{asset('img/avatar.png')}}" alt="">--}}
    {{--                    </div>--}}
    {{--                    <div class="message">--}}
    {{--                        <p><b>Chukwuduzie </b>successfully purchased a Premium ticket.</p>--}}
    {{--                        <small class="text-muted"> a minute ago </small>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="update">--}}
    {{--                    <div class="profile-photo">--}}
    {{--                        <img src="{{asset('img/avatar.png')}}" alt="">--}}
    {{--                    </div>--}}
    {{--                    <div class="message">--}}
    {{--                        <p><b>Kyrian </b>successfully purchased a regular ticket.</p>--}}
    {{--                        <small class="text-muted"> 5 minutes ago </small>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="update">--}}
    {{--                    <div class="profile-photo">--}}
    {{--                        <img src="{{asset('img/avatar.png')}}" alt="">--}}
    {{--                    </div>--}}
    {{--                    <div class="message">--}}
    {{--                        <p><b>Bright </b>successfully purchased a gold ticket.</p>--}}
    {{--                        <small class="text-muted"> 10 minutes ago </small>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <!--END OF RECENT UPDATES-->--}}

    {{--    </div>--}}
</div>
</body>
</html>
