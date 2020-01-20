<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class,100) 
            ->make()
            ->each( function($task){
                $emp=Employee::inRandomOrder() -> first();
                $task -> employee() -> associate($emp);

                $task -> save();
            });
    }
}
