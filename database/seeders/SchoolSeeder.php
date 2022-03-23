<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SchoolSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('schools')->insert([
            'school_name' => 'SK Kuala Berang',
            'school_code' => 'TBA5001',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('schools')->insert([
            'school_name' => 'SK Bukit Perah',
            'school_code' => 'TBA5003',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('schools')->insert([
            'school_name' => 'SK Bukit Diman',
            'school_code' => 'TBA5005',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('schools')->insert([
            'school_name' => 'SK Tengkawang',
            'school_code' => 'TBA5013',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('schools')->insert([
            'school_name' => 'SK Kua',
            'school_code' => 'TBA5020',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
