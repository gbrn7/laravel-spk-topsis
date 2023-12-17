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
                'grade' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 1,
                'criteria_id' => 2,
                'grade' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 1,
                'criteria_id' => 3,
                'grade' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 1,
                'criteria_id' => 4,
                'grade' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 1,
                'criteria_id' => 5,
                'grade' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 2,
                'criteria_id' => 1,
                'grade' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 2,
                'criteria_id' => 2,
                'grade' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 2,
                'criteria_id' => 3,
                'grade' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 2,
                'criteria_id' => 4,
                'grade' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 2,
                'criteria_id' => 5,
                'grade' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 3,
                'criteria_id' => 1,
                'grade' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 3,
                'criteria_id' => 2,
                'grade' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 3,
                'criteria_id' => 3,
                'grade' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 3,
                'criteria_id' => 4,
                'grade' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'alternative_id' => 3,
                'criteria_id' => 5,
                'grade' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
