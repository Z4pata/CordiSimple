<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'name' => 'Jogo' ,
            'description' => 'Jogo de Nacional' ,
            'date' => '2024-12-25' ,
            'time' => '12:00:00' ,
            'location' => 'Medellín' ,
            'max_seats' => '200' ,
            'available_seats' => '190' ,
            'status' => 'available' ,
            'admin_id' => '4'
        ]);
    }
}
