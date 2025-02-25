<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Ensure roles exist
          $adminRole = Role::firstOrCreate(['name' => 'admin']);
          $userRole = Role::firstOrCreate(['name' => 'user']);
  
          // Create Admin User
          $admin = User::firstOrCreate(
              ['email' => 'admin@example.com'],
              [
                  'name' => 'Admin User',
                  'password' => Hash::make('password'), // Change this password
              ]
          );
          $admin->assignRole($adminRole);
  
          // Create Regular User
          $user = User::firstOrCreate(
              ['email' => 'user@example.com'],
              [
                  'name' => 'Regular User',
                  'password' => Hash::make('password'), // Change this password
              ]
          );
          $user->assignRole($userRole);
      
    }
}
