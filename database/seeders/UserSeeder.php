<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'email'=>'vendeur@exemple.com',
            'password'=>Hash::make('password123')
        ]);

        $role = Role::where('name', 'vendeur')->first();
        $user->roles()->attach($role);

        $user = User::create([
            'email'=>'admin@exemple.com',
            'password'=>Hash::make('password123')
        ]);

        $role = Role::where('name', 'admin')->first();
        $user->roles()->attach($role);

        $user = User::create([
            'email'=>'acheteur@exemple.com',
            'password'=>Hash::make('password123')
        ]);

        $role = Role::where('name', 'acheteur')->first();
        $user->roles()->attach($role);
    }


}
