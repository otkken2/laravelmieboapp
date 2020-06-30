<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function hobbies(){
        return $this->belongsToMany(Hobby::class,'person_hobby');
    }
}
