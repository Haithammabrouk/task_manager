<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Task;
// use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    // use RefreshDatabase;

  
    public function user_has_tasks_relationship()
    {
      
        $user = User::factory()->create();

       
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Relations\HasMany', $user->tasks());
    }

  
    public function user_can_have_multiple_tasks()
    {
      
        $user = User::factory()->create();

       
        $tasksCount = 10;
        Task::factory()->count($tasksCount)->create(['assigned_to_id' => $user->id]);

       
        $this->assertCount($tasksCount, $user->tasks);
    }

  
    public function tasks_are_correctly_assigned_to_user()
    {
      
        $user = User::factory()->create();

       
        $tasks = Task::factory()->count(10)->create(['assigned_to_id' => $user->id]);

       
        $userTasks = $user->tasks()->get();

        
        foreach ($tasks as $task) {
            $this->assertTrue($userTasks->contains($task));
        }
    }
}
