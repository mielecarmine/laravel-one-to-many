<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            $project = new Project;
            $project->name = $faker->firstName();
            $project->description = $faker->paragraph(8);
            $project->link = $faker->url();
            $project->done = $faker->boolean();
            $project->save();
        }
    }
}
