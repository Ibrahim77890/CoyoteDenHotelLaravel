<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        Service::create([
            'name' => 'Bike Rental',
            'description' => 'Harley Davidson 2024 CVO™ Road Glide™ ST',
            'image' => 'service_images/bike1.avif'
        ]);

        Service::create([
            'name' => 'Spa & Wellness',
            'description' => 'Relax with a variety of spa treatments, massages, and wellness therapies for total rejuvenation.',
            'image' => 'service_images/spa_wellness.avif'
        ]);

        Service::create([
            'name' => 'Airport Shuttle',
            'description' => '24/7 airport pickup and drop-off service for hassle-free travel.',
            'image' => 'service_images/airport_shuttle.avif'
        ]);

        Service::create([
            'name' => 'Guided Tours',
            'description' => 'Explore scenic landscapes and popular tourist destinations with our experienced guides.',
            'image' => 'service_images/guided_tours.avif'
        ]);

        Service::create([
            'name' => 'Room Service',
            'description' => 'Enjoy delicious meals delivered right to your room with 24/7 room service.',
            'image' => 'service_images/room_service.avif'
        ]);
    }
}
