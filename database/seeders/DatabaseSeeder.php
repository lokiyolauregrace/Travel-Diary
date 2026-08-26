<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        User::create([
    'name' => 'Admin',
    'username' => 'admin',
    'email' => 'admin@ehb.be',
    'password' => bcrypt('Password!321'),
    'is_admin' => true,
]);
    }
}