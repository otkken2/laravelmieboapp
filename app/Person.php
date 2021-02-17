<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Person extends Model
{
    // protected $table = 'people';

        
    /**
     * hobbies
     *
     * @return void
     */
    public function hobbies(){
        return $this->belongsToMany(Hobby::class,'person_hobby');
    }
    
    /**
     * newPerson
     *
     * @param  mixed $request
     * @return void
     */
    public static function newPerson(Request $request):void{
        $person         = new self();
        $person->name   = $request->name;
        $person->age    = $request->age;
        $person->gender = $request->gender;
        $person->save();
        //↓personに紐付いたhobbies情報を取得できる。attachメソッド
        $person->hobbies()->attach($request->hobbies);
    }
 
    /**
     * editPersonInfo
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public static function editPersonInfo(Request $request,int $id):void{
        $person         = Person::find($id);
        $person->name   = $request->name;
        $person->age    = $request->age;
        $person->gender = $request->gender;

        $person->save();
        $person->hobbies()->attach($request->hobbies);
    }
}
