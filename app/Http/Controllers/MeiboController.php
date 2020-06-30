<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Hobby;

class MeiboController extends Controller
{
    public function index(){

        //モデルオブジェクトを全件取得
        $people = Person::all();
        //ホビーオブジェクトを全件取得
        $hobbies = Hobby::all();

        return view('index',compact('people','hobbies'));
    }

    public function post(Request $request){

        $person = new Person();
        $person->name = $request->name;
        $person->age = $request->age;
        $person->gender = $request->gender;
        $person->save();
        //↓personに紐付いたhobbies情報を取得できる。attachメソッド
        $person->hobbies()->attach($request->hobbies);
        return redirect("/postSuccessed");
    }

    public function postSuccessed(){
        return view('postSuccessed');
    }

    public function showEditPage(Request $request,$id){
        $person = Person::find($id);
        $hobbies = Hobby::all();

        return view('/edit',compact('person','hobbies'));
    }

    public function saveEditPage(Request $request,$id){
        $person = Person::find($id);

        $person->name = $request->name;
        $person->age = $request->age;
        $person->gender = $request->gender;
        $person->save();
        $person->hobbies()->attach($request->hobbies);

        return redirect('postSuccessed');
    }

    public function showDeletePage(Request $request,$id){
        $person = Person::find($id);

        return view('delete',compact('person'));
    }

    public function delete(Request $request,$id){
        $person = Person::find($request->id);
        if($person != null){
            $person->delete();
            return redirect('/');
        }else{
            return view('/delete/{ $id }');
            // echo $person->id;
            // echo $person->name;
            // echo $person->age;
            // echo $person->gender;
        }
        
    }
}
