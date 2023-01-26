<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Technology;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProjectsTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ProjectCategorySeeder::class);
        $this->call(TechnologyTableSeeder::class);
        $this->call(ProjectsTechnologiesSeeder::class);
    }
}
