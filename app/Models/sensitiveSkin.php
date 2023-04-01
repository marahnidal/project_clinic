<?php

namespace App\Models;

use App\Traits\Trans;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sensitiveskin extends Model
{
    use HasFactory,softDeletes,Trans;
    protected $guarded =[];
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }


    public function category()
    {
        return $this->belongsTo(category::class)->withDefault();
    }
}
