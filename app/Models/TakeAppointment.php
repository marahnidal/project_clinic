<?php

namespace App\Models;

use App\Models\User;
use App\Traits\Trans;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TakeAppointment extends Model
{
    use HasFactory,SoftDeletes,Trans;
    protected $fillable =['name' , 'email' , 'tel','date' ,'user_id' ,'time'];
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function ScoutPaymenth()
    {
        return $this->hasMany(ScoutPaymenth::class);
    }


}
