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
            'name' => 'Financial Donation',
            'description' => 'This service is designed for individuals and organizations who want to contribute financially to support our green area planting initiatives. ',
            'image' => 'http://127.0.0.1:8000/frontend/images/money.jpg',
        ]);
        DB::table('categories')->insert([
            'name' => 'Items Donation',
            'description' => 'In this service you can choose to donate one or more of many items including trees, fertilizer, and equipment.',
            'image' => 'http://127.0.0.1:8000/frontend/images/item.jpg',
        ]);
        DB::table('categories')->insert([
            'name' => 'Service Donation',
            'description' => 'This service is designed for who want to contribute their skills, time, and services to support our green area planting initiatives. ',
            'image' => 'http://127.0.0.1:8000/frontend/images/service/service.PNG',
        ]);
    }
}
