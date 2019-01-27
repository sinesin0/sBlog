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
        factory('App\User', 10)->create();
        factory('App\Category', 10)->create();
        factory('App\Post', 30)->create();
        factory('App\Comment', 100)->create();
    }
}
