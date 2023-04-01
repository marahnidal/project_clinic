<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoutPaymenth extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(user::class)->withDefault();
    }
    public function TakeAppointment()
    {
        return $this->belongsTo(TakeAppointment::class);
    }

}
