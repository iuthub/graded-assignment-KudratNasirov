<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new App\Task([
            'task'=>'Finish your quiz'
        ]);
        $task->save();

        $task = new App\Task([
            'task'=>'Make authentication mechanism'
        ]);
        $task->save();
    }
}
