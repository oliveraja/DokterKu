<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorsSeeder extends Seeder
{
    public function run()
    {
        $doctorsData = [
            [
                'name' => 'Dr. Chunlie',
                'spesialis' => 'Pediatric',
                'rumah sakit' => 'Sriwijaya Hospital',
                'experience' => '10 Years Experience',
                'pendidikan' => 'MBBS',
                'registration' => 'A-36589',
                'call' => 230-0035,
                'email' => 'example@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('doctors')->insert($doctorsData);
    }
}
