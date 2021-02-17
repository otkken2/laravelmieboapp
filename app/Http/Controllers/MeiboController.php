<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Hobby;
use App\AdHtml;

class MeiboController extends Controller
{
    public function index(){

        //モデルオブジェクトを全件取得
        $people = Person::all();
        //ホビーオブジェクトを全件取得
        $hobbies = Hobby::all();
        $ad_htmls = AdHtml::all();

        return view('index',compact('people','hobbies','ad_htmls'));
    }

    public function post(Request $request){
        Person::newPerson($request);
        return redirect("/postSuccessed");
    }

    public function postSuccessed(){
        return view('postSuccessed');
    }

    public function showEditPage(Request $request,int $id){
        $person = Person::find($id);
        $hobbies = Hobby::all();

        return view('/edit',compact('person','hobbies'));
    }

    public function saveEditPage(Request $request,int $id){
        Person::editPersonInfo($request,$id);
        return redirect('postSuccessed');
    }

    public function showDeletePage(Request $request,int $id){
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
        }
        
    }
}
