<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard | {{ config('app.name', 'IRise') }} </title>
    <meta name="description" content="Event Ticketing Platform for IRise internship seminar">
    <meta name="keywords" content="IRise, IRise Internship, IRise Seminar, IRise Seminar Ticket, IRise Ticket">

    <!-- Website Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/favicon.png') }}"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="container">
    <aside>
        <div class="top">
            <img src="{{asset('images/logo-dark.png')}}" alt="">
        </div>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
        </div>
        <div class="sidebar">
            <a href="#" class="active">
                    <span class="material-icons-sharp">
                        grid_view
                        </span>
                <h3>Dashboard </h3>
            </a>
            <a href="#">
                    <span class="material-icons-sharp">
                        person_outline
                        </span>
                <h3>Users</h3>
                <span class="user-count">100</span>
            </a>
            <a href="#">
                    <span class="material-icons-sharp">
                        insights
                        </span>
                <h3>Analytics </h3>
            </a>
            <a href="#">
                    <span class="material-icons-sharp">
                        receipt_long
                        </span>
                <h3>Revenue</h3>
            </a>
            <a href="#">
                    <span class="material-icons-sharp">
                        inventory
                        </span>
                <h3>Sales</h3>
            </a>
            <a href="#">
                    <span class="material-icons-sharp">
                        add
                        </span>
                <h3>Add user</h3>
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
        <h1>Dashboard</h1>
        <div class="date">
            <label>
                <input type="date">
            </label>
        </div>
        <div class="insights">
            <div class="sales">
                <span class="material-icons-sharp"> analytics</span>
                <div class="middle">
                    <div class="left">
                        <h3>Total Sales</h3>
                        <h1>₦{{ number_format($totalSales)}}</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="32" cy="32" r="28"></circle>
                        </svg>
                        <div class="number">
                            <p>80%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted">
                    Last 24 Hours
                </small>
            </div>
            <!-- END OF SALES -->
            <div class="expenses">
                <span class="material-icons-sharp"> bar_chart</span>
                <div class="middle">
                    <div class="left">
                        <h3>Total Expenses</h3>
                        <h1>$15,024</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="32" cy="32" r="28"></circle>
                        </svg>
                        <div class="number">
                            <p>80%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted">
                    Last 24 Hours
                </small>
            </div>
            <!-- END OF EXPENSES -->
            <div class="income">
                <span class="material-icons-sharp"> stacked_line_chart</span>
                <div class="middle">
                    <div class="left">
                        <h3>Total Income</h3>
                        <h1>$30,024</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="32" cy="32" r="28"></circle>
                        </svg>
                        <div class="number">
                            <p>80%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted">
                    Last 24 Hours
                </small>
            </div>
            <!-- END OF INCOME -->
        </div>
        <!-- END OF INSIGHTS -->
        <div class="recent-orders">
            <h2>Recent orders</h2>
            <table>
                <thead>
                <tr>
                    <th>Fullname</th>
                    <th>Ticket type</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->ticket->type->name}}</td>
                        <td>{{$user->created_at->format('d M Y')}}</td>
                        <td class="primary">Details</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="#"> Show All</a>
        </div>
    </main>
    <!--END OF MAIN-->

    <div class="right">
        <div class="top">
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
                    <img src="{{asset('images/avatar.png')}}" alt="profile">
                </div>
            </div>
        </div>
        <!--END OF TOP-->

        <div class="recent-updates">
            <h2>Recent Updates</h2>
            <div class="updates">
                <div class="update">
                    <div class="profile-photo">
                        <img src="{{asset('images/Blaise.jpg')}}" alt="">
                    </div>
                    <div class="message">
                        <p><b>Chukwuduzie </b>successfully purchased a Premium ticket.</p>
                        <small class="text-muted"> 2 Minutes Ago </small>
                    </div>
                </div>
                <div class="update">
                    <div class="profile-photo">
                        <img src="{{asset('images/Blaise.jpg')}}" alt="">
                    </div>
                    <div class="message">
                        <p><b>Kyrian </b>successfully purchased a regular ticket.</p>
                        <small class="text-muted"> 5 Minutes Ago </small>
                    </div>
                </div>
                <div class="update">
                    <div class="profile-photo">
                        <img src="{{asset('images/Blaise.jpg')}}" alt="">
                    </div>
                    <div class="message">
                        <p><b>Bright </b>successfully purchased a gold ticket.</p>
                        <small class="text-muted"> 7 Minutes Ago </small>
                    </div>
                </div>
            </div>
        </div>
        <!--END OF RECENT UPDATES-->

        <div class="sales-analytics">
            <h2>Sales Analytics</h2>
            <div class="item online">
                <div class="icon">
                    <span class="material-icons-sharp">shopping_cart</span>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>ONLINE SALES</h3>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                    <h5 class="success">+39%</h5>
                    <h3>3849</h3>
                </div>
            </div>
            <div class="item offline">
                <div class="icon">
                    <span class="material-icons-sharp">local_mall</span>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>OFFLINE SALES</h3>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                    <h5 class="danger">-17%</h5>
                    <h3>1100</h3>
                </div>
            </div>
            <div class="item customers">
                <div class="icon">
                    <span class="material-icons-sharp">person</span>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>NEW SALES</h3>
                        <small class="text-muted">Last 24 Hours</small>
                    </div>
                    <h5 class="success">+25%</h5>
                    <h3> 849</h3>
                </div>
            </div>
            <div class="item add-user">
                <div>
                    <span class="material-icons-sharp">add</span>
                    <h3>Add User</h3>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
