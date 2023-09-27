<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Ticket;
use App\Models\TicketType;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Volunteer Lead',
            'email' => 'volunteerlead@internsify.com',
        ]);

        TicketType::factory()->create(['name' => 'Basic', 'price' => 1000.00]);
        TicketType::factory()->create(['name' => 'Standard', 'price' => 2000.00]);
        TicketType::factory()->create(['name' => 'Premium', 'price' => 5000.00]);

        Ticket::factory(10)->create();
    }
}
