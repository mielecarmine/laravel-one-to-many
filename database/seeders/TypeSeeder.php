<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $labels = ["Frontend", "Backend", "Full-stack"];
        foreach($labels as $label) {
            $type = new Type;
            $type->label = $label;
            $type->colour = $faker->hexColor();
            $type->save();
        }
    }
}