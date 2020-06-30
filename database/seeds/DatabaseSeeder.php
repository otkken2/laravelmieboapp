<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $hobbies = ['楽器','勉強','演劇','ゲーム','ファッション','読書'];
        foreach ($hobbies as $hobby) App\Hobby::create(['hobby' => $hobby]);
    }
}
