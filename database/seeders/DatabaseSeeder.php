<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create the default admin account.
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@ehb.be',
            'password' => bcrypt('Password!321'),
            'is_admin' => true,
        ]);

        // Create default travel categories.
        Category::create(['name' => 'City']);
        Category::create(['name' => 'Beach']);
        Category::create(['name' => 'Culture']);
        Category::create(['name' => 'Food']);
        Category::create(['name' => 'Adventure']);
    }
}