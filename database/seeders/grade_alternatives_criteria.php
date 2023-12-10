<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //this line is import db function 


class grade_alternatives_criteria extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grade_alternatives_criteria')->insert([
            [
                'alternative_id' => 1,
                'criteria_id' => 1,
                'grade' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 1,
                'criteria_id' => 2,
                'grade' => 15,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 1,
                'criteria_id' => 2,
                'grade' => 58,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 2,
                'criteria_id' => 2,
                'grade' => 20,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
