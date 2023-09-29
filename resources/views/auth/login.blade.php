<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Login | {{ config('app.name', 'I-Rise') }} </title>
    <meta name="description" content="Event Ticketing Platform for IRise internship seminar">
    <meta name="keywords" content="IRise, IRise Internship, IRise Seminar, IRise Seminar Ticket, IRise Ticket">

    <!-- Website Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/favicon.png') }}"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<!--This is the header, which contains logo and list items-->
<header>
    <div class="logo">
        <img src="{{asset('img/logo-light.png')}}" alt="veritas logo" class="veritas-logo">
        <span></span>
        {{--        I-<span>RISE</span>--}}
    </div>
    <div class="nav">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>
</header>

<section>
    <div class="hero">
        <p>I<span>-RISE</span></p>
        <p>INTERN<span>SHIP</span> <br/> SEMINAR <span>2023</span></p>
    </div>

    <!-- Sign up form section-->

    <div>
        <p>
        <div class="signup-form">
            <form action="{{route('user-store')}}" method="POST">
                @csrf

                <p class="sign">Administrator Login</p>

                <label for="email" class="form-input">Email:</label><br>
                <input type="email" class="form-input" id="email" name="email"> <br>

                <label for="password" class="form-input">Password:</label><br>
                <input type="password" class="form-input" id="password" name="password"> <br>

                <input type="submit" class="form-button" value="submit">
            </form>
        </div>
    </div>

</section>


</body>
</html>
