<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use App\Models\School;
use Faker\Factory as Faker;
use Carbon\Carbon;

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
        $isd_code = $faker->numberBetween($min = 100000, $max = 999999);

        return [
            'complaint_isd_code' => $isd_code,
            'school_id' => School::pluck('id')->random(),
            'asset_model' => Arr::random($asset_model),
            'tagging_no' => $faker->numberBetween($min = 100000, $max = 999999),
            'serial_no' => $faker->numerify('##########'),
            'complainant_name' => $faker->name(),
            'complainant_email' => $faker->email(),
            'complainant_phone' => $faker->phoneNumber(),
            'complaint_details' => $faker->realText(100),
            'attachment_path' => Hash::make($isd_code),
            'status' => Arr::random($status),
            'created_at' => Carbon::now()->subDays(rand(2, 700))->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ];
    }
}
