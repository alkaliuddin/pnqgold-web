<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create();
        foreach (range(1, 25) as $index) {
            DB::table('complaints')->insert([
                'complaint_isd_code' => $faker->numberBetween($min = 10000, $max = 99999),
                'school_code' => $faker->numberBetween($min = 10000, $max = 99999),
                'school_name' => $faker->company,
                'asset_model' => $faker->word,
                'tagging_no' => $faker->numberBetween($min = 10000, $max = 99999),
                'serial_no' => $faker->numberBetween($min = 10000, $max = 99999),
                'complainant_name' => $faker->name,
                'complainant_email' => $faker->email,
                'complainant_phone' => $faker->phoneNumber,
                'complaint_details' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'status' => 'New',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
