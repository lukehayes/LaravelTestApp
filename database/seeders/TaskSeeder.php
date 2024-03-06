<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i = 1; $i <= 3; $i++)
        {
            $t = new \App\Models\Task();
            $t->task = "Example task " . $i;
            $t->done = false;
            $t->save();
        }
    }
}
