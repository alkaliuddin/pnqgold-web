<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\School;
use Carbon\Carbon;

class SchoolSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {

        $csvFile = fopen(base_path("database/data/schoolsPNQ.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                School::create([
                    "school_name" => $data['0'],
                    "school_code" => $data['1'],
                    "school_district" => $data['2'],
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
