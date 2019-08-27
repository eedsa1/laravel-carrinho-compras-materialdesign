<?php

use Illuminate\Database\Seeder;
use App\User;

//para funcionar devemos usar o comando php artisan db:seed --class="UsersTableSeeder"
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Eric Eduardo',
        	'email' => 'eric.ed123@gmail.com',
        	'password' => bcrypt('123456'),	
        ]);
    }
}
