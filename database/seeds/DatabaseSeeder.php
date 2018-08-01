<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
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
        User::create([
        	'name' => 'Babacar Fall',
            'email' => 'babacarfall@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
