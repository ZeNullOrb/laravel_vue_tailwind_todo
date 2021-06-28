<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert(['title'=> 'Task1','status'=> 0,'project_id'=>1]);

        DB::table('tasks')->insert(['title'=> 'Task2','status'=> 1,'project_id'=>2]);

        DB::table('tasks')->insert(['title'=> 'Task3','status'=> 0,'project_id'=>3]);

        DB::table('tasks')->insert(['title'=> 'Task4','status'=> 1,'project_id'=>4]);

        DB::table('tasks')->insert(['title'=> 'Task5','status'=> 0,'project_id'=>5]);

    }
}
