<?php

namespace Database\Seeders;

use App\Models\Statistics;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
       
        $topUsers = User::whereHas('tasks')->withCount('tasks')->orderByDesc('tasks_count')->get();

        foreach ($topUsers as $user) {
            Statistics::create([
                'user_id' => $user->id,
                'task_count' => $user->tasks_count,
            ]);
        }

    
    }
}
