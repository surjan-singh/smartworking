<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class PopulateDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $response = Http::withOptions([
            'debug' => fopen('php://stderr', 'w'),
            'verify' => false,
        ])
        ->get('https://trial.craig.mtcserver15.com//api/properties', [
            'api_key' => '2S7rhsaq9X1cnfkMCPHX64YsWYyfe1he',
            'page[size]' => 100,
            'page[number]' => 1,
        ]);

        $total = $response->json()['last_page'];

        for($counter = 2; $counter <= $total; $counter++){
            $response = Http::withOptions([
                'debug' => fopen('php://stderr', 'w'),
                'verify' => false,
            ])
            ->get('https://trial.craig.mtcserver15.com//api/properties', [
                'api_key' => '2S7rhsaq9X1cnfkMCPHX64YsWYyfe1he',
                'page[size]' => 100,
                'page[number]' => $counter,
            ]);

           $arr = $response->json()['data'];
            foreach($arr as $a){

                DB::table('list_all_properties')->insert([
                    'County' => $a['county'],
                    'country' => $a['country'],
                    'town' => $a['town'],
                    'description' => $a['description'],
                    'display_address' => $a['address'],
                    'image' => $a['image_full'],
                    'thumbnail' => $a['image_full'],
                    'latitude' => $a['latitude'],
                    'longitude' => $a['longitude'],
                    'number_of_bedrooms' => $a['num_bedrooms'],
                    'number_of_bathrooms' => $a['num_bathrooms'],
                    'price' => $a['price'],
                    'property_type' => $a['type'],
                    'for_sale' => $a['type'],
                ]);
            }
        }
    }
}
