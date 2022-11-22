<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drySkin extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function products()
    {
        return $this->belongsTo(product::class)->withDefault();
    }

    public function category()
    {
        return $this->belongsTo(category::class)->withDefault();
    }


}
