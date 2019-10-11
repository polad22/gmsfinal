<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User;
        $user->name = 'admin';
        $user->email = 'dagger@gmail.com';
        $user->password = bcrypt('dagger');
        $user->save();
    }
}
