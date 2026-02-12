<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleUserSeeder extends Seeder
{
  public function run(): void
    {
        $roles = [
            'super-admin',
            'country-manager',
            'branch-manager',
            'staff',
            'customer',
        ];

        foreach ($roles as $role) {

            $user = User::updateOrCreate(
                ['email' => $role . '@gmail.com'],
                [
                    'name' => ucfirst(str_replace('-', ' ', $role)),
                    'password' => Hash::make('123'),
                ]
            );

            $user->syncRoles([$role]);
        }
    }
}