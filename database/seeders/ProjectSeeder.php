<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $newProject = new Project();

            $newProject->image = $faker->image();
            $newProject->title = $faker->text();
            $newProject->slug = Str::slug($newProject['title'], '-');
            $newProject->description = $faker->paragraph();
            $newProject->url = $faker->url();
            $newProject->save();
        }
    }

}
