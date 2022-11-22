<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

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


    public function oily_skin()
    {
        return $this->hasOne(OilySkin::class)->withDefault();
    }


    public function dry_skin()
    {
        return $this->hasOne(drySkin::class)->withDefault();
    }


    public function sensitive_skin()
    {
        return $this->hasOne(sensitiveSkin::class)->withDefault();
    }


    public function combination_skin()
    {
        return $this->hasOne(combinationSkin::class)->withDefault();
    }

    }

