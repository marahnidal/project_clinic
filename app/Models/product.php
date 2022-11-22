<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function user()
    {

            return $this->belongsTo(User::class)->withDefault();
        }


        public function category()
        {

                return $this->belongsTo(category::class)->withDefault();
            }

            public function oily_skin()
            {
                return $this->hasmany(OilySkin::class);
            }

            public function dry_skin()
            {
                return $this->hasmany(drySkin::class);
            }


            public function sensitive_skin()
            {
                return $this->hasmany(sensitiveSkin::class);
            }


            public function combination_skin()
            {
                return $this->hasmany(combinationSkin::class);
            }
}
