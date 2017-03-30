<?php

use Illuminate\Database\Seeder;
use \App\Teams;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        // Team Seeder
        Teams::create(['TeamName'=>'content']);
        Teams::create(['TeamName'=>'design']);
        Teams::create(['TeamName'=>'marketing']);
    }
}
