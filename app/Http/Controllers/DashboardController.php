<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Ticket;
use App\Models\TicketType;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::whereHas('ticket')
            ->with('ticket.type')
            ->latest()
            ->take(8)
            ->get();

        $totalSales = User::join('tickets', 'users.id', '=', 'tickets.user_id')
            ->join('ticket_types', 'tickets.ticket_type_id', '=', 'ticket_types.id')
            ->sum('ticket_types.price');

        return view('dashboard', compact('users', 'totalSales'));
    }

    public function createUser()
    {
        return view('create_user', [
            'freeTickets' => Ticket::whereDoesntHave('user')->get(),
            'ticketTypes' => TicketType::all()
        ]);
    }

    public function storeUser(StoreUserRequest $request)
    {
        $ticket = Ticket::find($request->input('ticket_id'));

        $user = $ticket->user()->create($request->validated());
    }
}
