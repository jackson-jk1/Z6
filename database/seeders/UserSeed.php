<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::factory([
            'email'=> 'biladanoar@gmail.com'
        ])->create()->each(function (User $user){
            User::assingRole($user, User::ROLE_ADMIN);
            $user->save();
        });
        User::factory(10)->create()->each(function (User $user){
            User::assingRole($user, User::ROLE_USER);
            $user->save();
        });

        User::factory(10)->create()->each(function (User $user){
            User::assingRole($user, User::ROLE_BOOSTER);
            $user->save();
        });

    }
}
