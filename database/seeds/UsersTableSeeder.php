<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Mpilo";
        $user->email = "mpilo@mail.com";
        $user->password = bcrypt('password');
        $user->email_verified_at = Carbon::now();
        $user->save();

    }
}
