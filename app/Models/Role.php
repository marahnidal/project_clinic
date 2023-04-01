<?php

namespace App\Models;

use App\Models\Ability;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory,softDeletes;
    protected $guarded =[];

    public function abilities ()
    {
        return $this->belongsToMany(Ability::class);
    }
}
