<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    const COUNT_CINEMA_HALL = 300;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'date_start',
        'time_start',
        'ticket_busy',
        'ticket_free',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function getTicketBusyAttribute()
    {
        return $this->tickets()->count();
    }

    public function getTicketFreeAttribute()
    {
        return self::COUNT_CINEMA_HALL - $this->tickets()->count();
    }
}
