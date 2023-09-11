<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use DB;
use Illuminate\Support\Facades\DB;


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
                'image' => 'http://127.0.0.1:8000/frontend/images/event/project.PNG',
                'location' => 'City of Irbid',
                'short_description' => 'Join us in our mission to make Irbid streets greener and more sustainable.',
                'long_description' => 'In cooperation withThe Ministry of Agriculture we are seeking to attract 
                 volunteers to Join us in our mission to make Irbid streets greener and more sustainable through our collvolunteers, and organizations to come together to make a lasting impact on our environment.',
                'budget' => '7500',
                'start_day' => '2023-09-11',
                'end_day' => '2023-12-11',
                'status' => '0',
                'tree_type' => 'Dwarf Cedar',
                'fertilizer' => 'Nitrogen-based Fertilizers',
                'equipments' => 'Shovels',
                'user_id' => '1',
                'category_id' => '1',
                'volunteering_days' => 'Friday',
                'volunteering_hours_start' => '10:00:00',
                'volunteering_hours_end' => '15:00:00',
                'volunteering_number' => '130',
            ],
            [
                'title' => 'Streets Of Irbid',
                'image' => '',
                'location' => 'City of Irbid',
                'short_description' => 'Join us in our mission to make Irbid streets greener and more sustainable.',
                'long_description' => 'In cooperation withThe Ministry of Agriculture we are seeking to attract 
                 volunteers to Join us in our mission to make Irbid streets greener and more sustainable through our collvolunteers, and organizations to come together to make a lasting impact on our environment.',
                'budget' => '7500',
                'start_day' => '2023-09-11',
                'end_day' => '2023-12-11',
                'status' => '0',
                'tree_type' => 'Dwarf Cedar',
                'fertilizer' => 'Nitrogen-based Fertilizers',
                'equipments' => 'Shovels',
                'user_id' => '2',
                'category_id' => '2',
                'volunteering_days' => 'Friday',
                'volunteering_hours_start' => '10:00:00',
                'volunteering_hours_end' => '15:00:00',
                'volunteering_number' => '130',

            ],
            [
                'title' => 'Streets Of Irbid',
                'image' => '',
                'location' => 'City of Irbid',
                'short_description' => 'Join us in our mission to make Irbid streets greener and more sustainable.',
                'long_description' => 'In cooperation withThe Ministry of Agriculture we are seeking to attract 
                 volunteers to Join us in our mission to make Irbid streets greener and more sustainable through our collvolunteers, and organizations to come together to make a lasting impact on our environment.',
                'budget' => '7500',
                'start_day' => '2023-09-11',
                'end_day' => '2023-12-11',
                'status' => '0',
                'tree_type' => 'Dwarf Cedar',
                'fertilizer' => 'Nitrogen-based Fertilizers',
                'equipments' => 'Shovels',
                'user_id' => '3',
                'category_id' => '3',
                'volunteering_days' => 'Friday',
                'volunteering_hours_start' => '10:00:00',
                'volunteering_hours_end' => '15:00:00',
                'volunteering_number' => '130',

            ],
            [
                'title' => 'Flowers festival',
                'image' => '',
                'location' => 'Al Hasan Sport City',
                'short_description' => 'Join our campaign as we cultivate a culture of environmental stewardship within our schools. Together, 
                we will plant the seeds of sustainability, nurturing not only trees but also young minds, for a greener and brighter future. ',
                'long_description' => 'Through tree planting, we are not only beautifying our school grounds but also sowing the seeds of environmental consciousness in the hearts and minds of our students. As young saplings take root, so too does a sense of responsibility for the natural world. Students will have the opportunity to actively participate in the planting process, learning about native tree species, 
                soil health, and the critical role trees play in mitigating climate change.',
                'budget' => '4500',
                'start_day' => '2023-09-11',
                'end_day' => '2023-09-13',
                'status' => '0',
                'tree_type' => 'Decoration Plants',
                'fertilizer' => 'Nitrogen-based Fertilizers',
                'equipments' => 'Shovels',
                'user_id' => '1',
                'category_id' => '3',
                'volunteering_days' => 'Friday',
                'volunteering_hours_start' => '09:00:00',
                'volunteering_hours_end' => '15:00:00',
                'volunteering_number' => '30',

            ],
            [
                'title' => 'For More Greener Schools',
                'image' => 'http://127.0.0.1:8000/frontend/images/item.jpg',
                'location' => 'Schhols of Irbid City',
                'short_description' => 'Join our campaign as we cultivate a culture of environmental stewardship within our schools. Together, we wi
                ll plant the seeds of sustainability, nurturing not only trees but also young minds, for a greener and brighter future.',
                'long_description' => 'In cooperation withThe Ministry of Agriculture we are seeking to attract 
                volunteers to participate in organizing the annual flower festival
                that will be held in Al Hasan Sport City. The festival aims to spread
                awareness about the importance of flowers in the environment',
                'budget' => '5000',
                'start_day' => '2023-09-11',
                'end_day' => '2023-11-13',
                'status' => '0',
                'tree_type' => 'Decoration Plants',
                'fertilizer' => 'Nitrogen-based Fertilizers',
                'equipments' => 'Shovels',
                'user_id' => '1',
                'category_id' => '1',
                'volunteering_days' => 'Saturday',
                'volunteering_hours_start' => '09:00:00',
                'volunteering_hours_end' => '15:00:00',
                'volunteering_number' => '75',

            ],

        ]);
    }
}
