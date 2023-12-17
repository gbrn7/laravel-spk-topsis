<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //this line is import db function 


class criteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('criteria')->insert([
            [
                'name' => 'Harga',
                'weight' => 5,
                'benefited' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Lokasi',
                'weight' => 4,
                'benefited' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fasilitas',
                'weight' => 3,
                'benefited' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Lingkungan',
                'weight' => 4,
                'benefited' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Desain Rumah',
                'weight' => 3,
                'benefited' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);    
    }
}
