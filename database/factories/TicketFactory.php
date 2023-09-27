<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ticket_id' => 'IRS-' . fake()->unique()->randomNumber(5),
            'user_id' => User::factory(),
            'ticket_type_id' => fake()->numberBetween(1, 3),
        ];
    }
}
