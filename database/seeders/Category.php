<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;




class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Money Donation',
            'description' => 'This service is designed for individuals and organizations who want to contribute financially to support our green area planting initiatives. Your financial donations play a crucial role in funding our projects.',
            'image'=>'frontend.images.team.leena.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Items Denation',
            'description' => 'This service is encompasses a wide range of donations. You can choose to donate one or more of many items including trees, fertilizer, and equipment, all of which are essential to our mission of enhancing and preserving green spaces.',
            'image'=>'frontend.images.team.leena.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Service Donation',
            'description' => 'This service is designed for who want to contribute their skills, time, and services to support our green area planting initiatives. Your service donations are invaluable in helping us execute projects effectively and efficiently.',
            'image'=>'frontend.images.team.leena.jpg'
        ]);
    }
}
