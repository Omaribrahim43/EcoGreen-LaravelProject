<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'title' => 'Streets Of Irbid',
                'image' => '',
                'location' => 'City of Irbid',
                'short_description' => 'Join us in our mission to make Irbid streets greener and more sustainable.',
                'long_description' => 'Join us in our mission to make Irbid streets greener and more sustainable through our collvolunteers, and organizations to come together to make a lasting impact on our environment.',
                'tree_type' => 'Dwarf Cedar',
                'fertilizer' => 'No Need',
                'equipments' => 'No Need',
                'user_id' => '1',
                'category_id' => '1',
            ],
        ]);
    }
}
