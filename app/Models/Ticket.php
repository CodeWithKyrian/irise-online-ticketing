<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['ticket_type_id', 'ticket_id', 'user_id'];

    /**
     * Indicates if the model should be timestamped.
     */
    public $timestamps = false;

    // booted


    /**
     *  The user that owns the ticket.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(TicketType::class, 'ticket_type_id');
    }

    public static function generate(int $ticketTypeId): self
    {
        return self::create([
            'ticket_type_id' => $ticketTypeId,
            'ticket_id' => 'IRS-' . fake()->unique()->randomNumber(5)
        ]);
    }
}
