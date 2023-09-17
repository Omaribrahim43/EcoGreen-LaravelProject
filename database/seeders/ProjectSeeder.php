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
                'title' => 'Flowers festival',
                'image' => 'https://as2.ftcdn.net/v2/jpg/01/67/26/17/1000_F_167261715_0i9HpJ5iqMRTKyElalJnWZynU2KQOv0F.jpg',
                'location' => 'Al Hasan Sport City',
                'short_description' => 'Join our campaign as we cultivate a culture of environmental stewardship within our schools. Together, 
                we will plant the seeds of sustainability, nurturing not only trees but also young minds, for a greener and brighter future. ',
                'long_description' => '
                In cooperation with The Ministry of Agriculture we are seeking to attract 
                volunteers to participate in organizing the annual flower festival
                that will be held in Al Hasan Sport City. The festival aims to spread
                awareness about the importance of flowers in the environment',
                'budget' => '500',
                'start_day' => '2023-11-11',
                'end_day' => '2023-11-13',
                'status' => '0',
                'tree_type' => 'Flowers, Decoration Plants',
                'fertilizer' => 'Nitrogen-based Fertilizers',
                'equipments' => 'shovels, hoses, and pruning equipment',
                'user_id' => '1',
                'category_id' => '3',
                'volunteering_days' => 'Friday',
                'volunteering_hours_start' => '10:00',
                'volunteering_hours_end' => '16:00',
                'volunteering_number' => '20',

            ],
            [
                'title' => 'For More Greener Schools',
                'image' => 'https://mymodernmet.com/wp/wp-content/uploads/2019/05/student-tree-planting-law-philippines-2.jpg',
                'location' => 'Schools of Irbid City',
                'short_description' => 'Join our campaign as we cultivate a culture of environmental stewardship within our schools. Together, we will plant the seeds of sustainability, nurturing not only trees but also young minds, for a greener and brighter future.',
                'long_description' => 'Through tree planting, we are not only beautifying our school grounds but also sowing the seeds of environmental consciousness in the hearts and minds of our students. As young saplings take root, so too does a sense of responsibility for the natural world. Students will have the opportunity to actively participate in the planting process, learning about native tree species, 
                soil health, and the critical role trees play in mitigating climate change.',
                'budget' => '5000',
                'start_day' => '2023-10-15',
                'end_day' => '2023-01-13',
                'status' => '0',
                'tree_type' => 'Bushes, Decoration Plants, Herbs',
                'fertilizer' => 'Nitrogen-based Fertilizers',
                'equipments' => 'shovels, hoses, and pruning equipment',
                'user_id' => '1',
                'category_id' => '3',
                'volunteering_days' => 'Saturday',
                'volunteering_hours_start' => '09:00',
                'volunteering_hours_end' => '15:00',
                'volunteering_number' => '100',

            ],
            [
                'title' => 'Rooftops Landscape Enhancement',
                'image' => 'https://thesmartlocal.com/wp-content/uploads/2022/02/hdb-rooftop-garden-27.jpg',
                'location' => 'City of Irbid',
                'short_description' => 'Elevate the beauty of our country from a whole new perspective! The Rooftop Landscape 
                Enhancement Initiative is a volunteering project dedicated to transforming urban rooftops 
                into picturesque vistas.',
                'long_description' => 'Elevate the beauty of our country from a whole new perspective! The Rooftop Landscape 
                Enhancement Initiative is a volunteering project dedicated to transforming urban rooftops 
                into picturesque vistas. We are on a mission to improve the view of our country from the top. By planting carefully selected trees and bushes on rooftops, we aim to create captivating aerial landscapes 
                that showcase the natural beauty of our surroundings.',
                'budget' => '9000',
                'start_day' => '2023-10-10',
                'end_day' => '2024-01-10',
                'status' => '0',
                'tree_type' => 'Herbs, Decoration Plants',
                'fertilizer' => 'Nitrogen-based Fertilizers',
                'equipments' => 'shovels, hoses, and pruning equipment',
                'user_id' => '1',
                'category_id' => '1',
                'volunteering_days' => 'Friday',
                'volunteering_hours_start' => '09:00',
                'volunteering_hours_end' => '15:00',
                'volunteering_number' => '200',

            ],
            
            [
                'title' => 'Plastic Houses Planting',
                'image' => 'https://www.afrik21.africa/wp-content/uploads/2019/08/shutterstock_128995394-1-800x400.jpg',
                'location' => 'City of Irbid',
                'short_description' => 'The Volunteering for Plastic Houses Planting Project is an innovative and eco-conscious initiative aimed at creating sustainable environments
                for the growth of various plant species. ',
                'long_description' => 'The Volunteering for Plastic Houses Planting Project is an innovative and eco-conscious initiative aimed at creating sustainable environments
                for the growth of various plant species. This project combines the use of recycled plastic materials to construct protective "plastic houses" 
               with the mission of fostering the growth of trees and shrubs that can benefit from controlled environments. Volunteers play a vital role in
                setting up and maintaining these plastic houses, contributing to environmental conservation and community engagement.',
                'budget' => '10000',
                'start_day' => '2023-10-15',
                'end_day' => '2024-01-30',
                'status' => '0',
                'tree_type' => 'Citrus Trees, Avocado Trees, Herbs.',
                'fertilizer' => 'Nitrogen-based Fertilizers',
                'equipments' => 'shovels, hoses, and pruning equipment',
                'user_id' => '1',
                'category_id' => '2',
                'volunteering_days' => 'Friday',
                'volunteering_hours_start' => '09:00',
                'volunteering_hours_end' => '15:00',
                'volunteering_number' => '100',
            ],
            [
                'title' => 'Streets Of Irbid',
                'image' => 'https://www.landscapepros.com/wp-content/uploads/2017/04/blog-apr-03.jpg',
                'location' => 'City of Irbid',
                'short_description' => 'In This project we are seeking to attract 
                volunteers to Join us in our mission to make Irbid streets greener
and more sustainable through our volunteers, and organizations.',
                'long_description' => 'In cooperation with Greater Irbid Municipality and The Ministry of Agriculture we are seeking to attract 
                 volunteers to Join us in our mission to make Irbid streets greener and more sustainable through our collvolunteers, and organizations to come together to make a lasting impact on our environment.',
                'budget' => '7500',
                'start_day' => '2023-09-30',
                'end_day' => '2023-12-11',
                'status' => '0',
                'tree_type' => 'Dwarf Cedar, Decoration Plants',
                'fertilizer' => 'Nitrogen-based Fertilizers',
                'equipments' => 'shovels, hoses, and pruning equipment',
                'user_id' => '1',
                'category_id' => '3',
                'volunteering_days' => 'Friday',
                'volunteering_hours_start' => '10:00',
                'volunteering_hours_end' => '15:00',
                'volunteering_number' => '130',
            ],
            [
                'title' => 'Rooftops Landscape Enhancement',
                'image' => 'https://thesmartlocal.com/wp-content/uploads/2022/02/hdb-rooftop-garden-27.jpg',
                'location' => 'City of Irbid',
                'short_description' => 'Elevate the beauty of our country from a whole new perspective! The Rooftop Landscape 
                Enhancement Initiative is a volunteering project dedicated to transforming urban rooftops 
                into picturesque vistas.',
                'long_description' => 'Elevate the beauty of our country from a whole new perspective! The Rooftop Landscape 
                Enhancement Initiative is a volunteering project dedicated to transforming urban rooftops 
                into picturesque vistas. We are on a mission to improve the view of our country from the top. By planting carefully selected trees and bushes on rooftops, we aim to create captivating aerial landscapes 
                that showcase the natural beauty of our surroundings.',
                'budget' => '9000',
                'start_day' => '2023-10-10',
                'end_day' => '2024-01-10',
                'status' => '0',
                'tree_type' => 'Herbs, Decoration Plants',
                'fertilizer' => 'Nitrogen-based Fertilizers',
                'equipments' => 'shovels, hoses, and pruning equipment',
                'user_id' => '1',
                'category_id' => '3',
                'volunteering_days' => 'Friday',
                'volunteering_hours_start' => '09:00',
                'volunteering_hours_end' => '15:00',
                'volunteering_number' => '200',

            ],
            [
                'title' => 'For More Greener Schools',
                'image' => 'https://mymodernmet.com/wp/wp-content/uploads/2019/05/student-tree-planting-law-philippines-2.jpg',
                'location' => 'Schools of Irbid City',
                'short_description' => 'Join our campaign as we cultivate a culture of environmental stewardship within our schools. Together, we will plant the seeds of sustainability, nurturing not only trees but also young minds, for a greener and brighter future.',
                'long_description' => 'Through tree planting, we are not only beautifying our school grounds but also sowing the seeds of environmental consciousness in the hearts and minds of our students. As young saplings take root, so too does a sense of responsibility for the natural world. Students will have the opportunity to actively participate in the planting process, learning about native tree species, 
                soil health, and the critical role trees play in mitigating climate change.',
                'budget' => '5000',
                'start_day' => '2023-10-11',
                'end_day' => '2023-12-13',
                'status' => '0',
                'tree_type' => 'Bushes, Decoration Plants, Herbs',
                'fertilizer' => 'Nitrogen-based Fertilizers',
                'equipments' => 'shovels, hoses, and pruning equipment',
                'user_id' => '1',
                'category_id' => '2',
                'volunteering_days' => 'Saturday',
                'volunteering_hours_start' => '09:00',
                'volunteering_hours_end' => '15:00',
                'volunteering_number' => '100',

            ],
            [
                'title' => 'Plastic Houses Planting',
                'image' => 'https://www.afrik21.africa/wp-content/uploads/2019/08/shutterstock_128995394-1-800x400.jpg',
                'location' => 'City of Irbid',
                'short_description' => 'The Volunteering for Plastic Houses Planting Project is an innovative and eco-conscious initiative aimed at creating sustainable environments
                for the growth of various plant species. ',
                'long_description' => 'The Volunteering for Plastic Houses Planting Project is an innovative and eco-conscious initiative aimed at creating sustainable environments
                for the growth of various plant species. This project combines the use of recycled plastic materials to construct protective "plastic houses" 
               with the mission of fostering the growth of trees and shrubs that can benefit from controlled environments. Volunteers play a vital role in
                setting up and maintaining these plastic houses, contributing to environmental conservation and community engagement.',
                'budget' => '10000',
                'start_day' => '2023-10-15',
                'end_day' => '2024-01-30',
                'status' => '0',
                'tree_type' => 'Citrus Trees, Avocado Trees, Herbs.',
                'fertilizer' => 'Nitrogen-based Fertilizers',
                'equipments' => 'shovels, hoses, and pruning equipment',
                'user_id' => '1',
                'category_id' => '1',
                'volunteering_days' => 'Friday',
                'volunteering_hours_start' => '09:00',
                'volunteering_hours_end' => '15:00',
                'volunteering_number' => '100',
            ]

        ]);
    }
}
