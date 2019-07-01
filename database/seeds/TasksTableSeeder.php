<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task();
        $task->id = 1;
        $task->title = 'Cong viec 1';
        $task->content = 'tao project laravel';
        $task->created = '2018-09-27 04:57:57';
        $task->due_date = '2018-09-26';
        $task->image = 'anh';
        $task->save();
    }
}
