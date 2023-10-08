<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
<!--This is the header, which contains logo and list items-->
<header>
    <div class="logo">
        <img src="{{asset('img/logo-dark.png')}}" alt="veritas logo" class="veritas-logo">
        <span></span>
    </div>
    <div class="nav">
        <a href="#">Home</a>
        <a href="#">About</a>
    </div>
</header>

<main>
    <div class="hero">
        <p>I<span>-RISE</span></p>
        <p>INTERN<span>SHIP</span> <br/> SEMINAR <span>2023</span></p>
    </div>

    <!-- Sign up form section-->
    <div class="signup-form">
        <div class="card rounded bg-glass">
            <div class="card-body px-4 py-3">
                <form action="{{route('login')}}" method="POST">
                    @csrf

                    <p class="sign"> Admin Login</p>

                    <!-- Email input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" id="email" name="email" class="form-control"/>
                        @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control"/>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-block mb-4 form-button">
                        Sign up
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>


</body>
</html>
