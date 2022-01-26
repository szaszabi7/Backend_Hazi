<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Homework::factory(10)->create();
    }
}
