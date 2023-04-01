<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Skin;
use App\Traits\Trans;
use App\Models\doctor;
use App\Models\oilyskin;
use App\Models\mixedskin;
use App\Models\normalskin;
use App\Models\sensitiveskin;
use App\Models\TakeAppointment;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable ,SoftDeletes,Trans;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded =[];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'gender'=>'string',
        'image'=>'string'
    ];

    public function products()
    {
        return $this->hasMany(product::class);
    }

    public function consulting()
    {
        return $this->hasMany(consultation::class);
    }

    public function oilyskin()
    {
        return $this->hasMany(oilyskin::class);
    }

    public function normalskin()
    {
        return $this->hasMany(normalskin::class);
    }

    public function sensitiveskin()
    {
        return $this->hasMany(sensitiveskin::class);
    }

    public function mixedskin()
    {
        return $this->hasMany(mixedskin::class);
    }



    public function TakeAppointment()
    {
        return $this->hasMany(TakeAppointment::class);
    }

    public function ScoutPaymenth()
    {
        return $this->hasMany(ScoutPaymenth::class);
    }


    public function doctor()
    {
        return $this->hasMany(doctor::class);
    }


    public function role()
    {
        return $this->belongsTo(Role::class)->withDefault();
    }
}
