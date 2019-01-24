<?php

use Illuminate\Database\Seeder;
use Illuminate\database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Model::unguard();
        $this->call(UsersTableSeeder::class);
        Model::reguard();
    }
}
