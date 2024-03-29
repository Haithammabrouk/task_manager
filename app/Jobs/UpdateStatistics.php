<?php

namespace App\Jobs;

use App\Models\Statistics;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class UpdateStatistics implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        DB::table('statistics')->truncate(); // Clear existing statistics data
        $topUsers = User::whereHas('tasks')->withCount('tasks')->orderByDesc('tasks_count')->get();

        foreach ($topUsers as $user) {
            Statistics::create([
                'user_id' => $user->id,
                'task_count' => $user->tasks_count,
            ]);
        }
    }
}
