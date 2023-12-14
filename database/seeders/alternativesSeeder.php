<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //this line is import db function 


class alternativesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alternatives')->insert([
            [
                'name' => 'Asus TUF Gaming 16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HP 14s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
