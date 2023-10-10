<x-layout title="Dashboard">

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
                Ticket sales
            </small>
        </div>
        <!-- END OF SALES -->
        <div class="expenses">
            <span class="material-icons-sharp"> bar_chart</span>
            <div class="middle">
                <div class="left">
                    <h3>Registered Tickets</h3>
                    <h1>{{$registeredTickets}}</h1>
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
                Number Registered
            </small>
        </div>
        <!-- END OF EXPENSES -->
    </div>

    <div class="recent-orders">
        <h2>Recent Ticket Sales</h2>
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
        <a href="{{route('attendees')}}"> Show All</a>
    </div>

</x-layout>
