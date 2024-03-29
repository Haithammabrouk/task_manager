<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10100 users as users
        User::factory()->count(10100)->create();

        // Define 100 of them as admins
        User::query()->take(100)->update(['is_admin' => true]);
    }
}
