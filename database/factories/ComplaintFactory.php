<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Models\School;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Complaint>
 */
class ComplaintFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        $faker = Faker::create('ms_MY');
        $asset_model = ['Komputer Riba', 'Printer', 'Projektor', 'Charging Cart'];
        $status = ['Baru', 'Dalam Proses', 'Selesai'];

        return [
            'complaint_isd_code' => $faker->numberBetween($min = 100000, $max = 999999),
            'school_id' => School::pluck('id')->random(),
            'asset_model' => Arr::random($asset_model),
            'tagging_no' => $faker->numberBetween($min = 100000, $max = 999999),
            'serial_no' => $faker->numerify('##########'),
            'complainant_name' => $faker->name(),
            'complainant_email' => $faker->email(),
            'complainant_phone' => $faker->phoneNumber(),
            'complaint_details' => $faker->realText(100),
            'status' => Arr::random($status),
            'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
            'updated_at' => now(),
        ];
    }
}
