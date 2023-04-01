<?php

namespace App\Models;


use App\Models\oily;
use App\Models\skin;
use App\Traits\Trans;
use App\Models\doctor;
use App\Models\oilyskin;
use App\Models\mixedskin;
use App\Models\normalskin;
use App\Models\sensitiveskin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    use HasFactory,SoftDeletes,Trans;
    protected $fillable =['name','parent_id'];

    public function parent(){

        return $this->belongsTo(category::class, 'parent_id')->withDefault();
    }

    public function children(){

        return $this->hasMany(category::class, 'parent_id');
    }


    public function products()
    {
        return $this->hasMany(product::class);
    }


    public function Skin()
    {
        return $this->hasMany(Skin::class);
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


    public function doctor()
    {
        return $this->hasMany(doctor::class);
    }





    }
