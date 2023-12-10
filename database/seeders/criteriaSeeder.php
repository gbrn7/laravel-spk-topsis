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
                'name' => 'Memori',
                'weight' => 25,
                'benefited' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ram',
                'weight' => 25,
                'benefited' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);    
    }
}
