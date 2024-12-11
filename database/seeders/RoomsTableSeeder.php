<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomsTableSeeder extends Seeder
{
    public function run()
    {
        Room::create([
            'name' => 'Babusar Room',
            'type' => 'Private (Double)',
            'amenities' => 'AC available, rooftop access, lots of natural light',
            'price' => 120.00,
            'image' => 'room_images/babusar_room.jpg'
        ]);

        Room::create([
            'name' => 'Naran Suite',
            'type' => 'Private (King)',
            'amenities' => 'King-size bed, personal balcony, jacuzzi, 4K TV, mini-bar',
            'price' => 250.00,
            'image' => 'room_images/naran_suite.jpg'
        ]);

        Room::create([
            'name' => 'Fairy Meadows Room',
            'type' => 'Private (Single)',
            'amenities' => 'Cozy single bed, heater, scenic view of mountains',
            'price' => 80.00,
            'image' => 'room_images/fairy_meadows_room.jpg'
        ]);

        Room::create([
            'name' => 'Hunza Family Room',
            'type' => 'Family (4 Beds)',
            'amenities' => '4 single beds, dining area, family seating area, kids’ play zone',
            'price' => 180.00,
            'image' => 'room_images/hunza_family_room.jpg'
        ]);

        Room::create([
            'name' => 'Shogran Executive Suite',
            'type' => 'Suite (Executive)',
            'amenities' => 'Private kitchen, conference room, king-size bed, smart TV, study desk',
            'price' => 320.00,
            'image' => 'room_images/shogran_executive_suite.jpg'
        ]);

        Room::create([
            'name' => 'Swat Valley Room',
            'type' => 'Private (Double)',
            'amenities' => 'Balcony with valley view, heater, two single beds, mini-fridge',
            'price' => 150.00,
            'image' => 'room_images/swat_valley_room.jpg'
        ]);

        Room::create([
            'name' => 'Kumrat Nature Suite',
            'type' => 'Private (King)',
            'amenities' => 'Glass walls for scenic view, king-size bed, firepit, eco-friendly design',
            'price' => 270.00,
            'image' => 'room_images/kumrat_nature_suite.jpg'
        ]);

        Room::create([
            'name' => 'Neelum Valley Room',
            'type' => 'Shared (Dormitory)',
            'amenities' => 'Shared space with 6 beds, locker, shared bathroom, Wi-Fi access',
            'price' => 30.00,
            'image' => 'room_images/neelum_valley_room.jpg'
        ]);

        Room::create([
            'name' => 'Malam Jabba Snow Cabin',
            'type' => 'Cabin',
            'amenities' => 'Wooden cabin, fireplace, heater, mountain view, kitchenette',
            'price' => 200.00,
            'image' => 'room_images/malam_jabba_snow_cabin.jpg'
        ]);

        Room::create([
            'name' => 'Skardu Presidential Suite',
            'type' => 'Presidential Suite',
            'amenities' => '2 king-size beds, private swimming pool, sauna, private terrace, personal chef',
            'price' => 1000.00,
            'image' => 'room_images/skardu_presidential_suite.jpg'
        ]);
    }
}
