<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert(['title'=> 'Hotel']);
        DB::table('projects')->insert(['title'=> 'Cart Parts']);
        DB::table('projects')->insert(['title'=> 'E-Commerce']);
    }
}
