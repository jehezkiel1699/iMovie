<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();

        // $adminRole = Role::where('name', 'admin')->first();
        // $userRole = Role::where('name', 'user')->first();

        // $admin=User::create([
        // 	'name' => 'Admin',
        // 	'email' => 'admin@admin.com',
        // 	'password' => bcrypt('7525852')
        // ]);
        // $user=User::create([
        // 	'name' => 'c14170054',
        // 	'email' => 'c14170054@john.petra.ac.id',
        // 	'password' => bcrypt('7525852')
        // ]);

        // $admin->roles()->attach($adminRole);
        // $user->roles()->attach($userRole);
    }
}
