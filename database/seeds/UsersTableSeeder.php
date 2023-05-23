<?php

use App\Models\User;
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
        $user=User::create([
            'name'=>'Super Admin',
            'email'=>'info@alqodsii.com',
            'password'=>bcrypt('12@21@Qq'),
        ]);
        $user->attachRole('admin');

        // $user2=User::create([
        //     'name'=>'Admin',
        //     'email'=>'user@realState.com',
        //     'password'=>bcrypt('user'),
        // ]);
        // $user2->attachRole('user');

    }
}
