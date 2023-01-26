<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list_tecnologies = ['HTML', 'CSS', 'SASS', 'JavaScript', 'VueJS', 'React', 'PHP', 'Laravel', 'MySQL'];
        foreach ($list_tecnologies as $technology) {
            $new_technology = new Technology();
            $new_technology->type = $technology;
            $new_technology->slug = Str::slug($technology);
            $new_technology->save();
        }
    }
}
