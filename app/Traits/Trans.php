<?php
namespace App\Traits;
Trait Trans{
        public function getTransNameAttribute()
        {
            if($this->name){
                return json_decode($this->name , true)[app()->currentLocale()];
            }
            return $this->name ;
        }

    public function getNameEnAttribute()
    {
        if($this->name){
            return json_decode($this->name , true)['en'];
        }
        return '' ;
    }

    public function getNameArAttribute()
    {
        if($this->name){
            return json_decode($this->name , true)['ar'];
        }
        return '' ;
    }
    public function getTransContentAttribute()
    {
        if($this->content){
            return json_decode($this->content , true)[app()->currentLocale()];
        }
        return $this->content ;
    }

    public function getContentEnAttribute()
    {
        if($this->content){
            return json_decode($this->content , true)['en'];
        }
        return '' ;
    }

    public function getContentArAttribute()
    {
        if($this->content){
            return json_decode($this->content , true)['ar'];
        }
        return '' ;
    }

    public function getTypeEnAttribute()
    {
        if($this->type){
            return json_decode($this->type , true)['en'];
        }
        return '' ;
    }

    public function getTypeArAttribute()
    {
        if($this->type){
            return json_decode($this->type , true)['ar'];
        }
        return '' ;
    }
}
