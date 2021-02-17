<?php

namespace Tests\Feature;

use App\Hobby;
use App\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testdetailTest()
    {
        $response = $this->get('postSuccessed');
        $response->assertStatus(200);
    }

    public function testIndexTest(){
        $hobbies = Hobby::all();
        $this->assertEquals(6,count($hobbies)); 
    }

    public function testHasHobbyexpectedColumnTest(){
        $this->assertDatabaseHas('hobbies',['hobby'=>'読書']);
    }

    public function testShowEditPageTest(){
        $people = Person::all();
        foreach($people as $person){
            $response = $this->get('/edit/'.$person->id);
            $response->assertStatus(200);
        }
    }

    public function testShowDeletePageTest(){
        $people = Person::all();
        foreach($people as $person){
            $response = $this->get('/delete/'.$person->id);
            $response->assertStatus(200);
        }
    }
}
