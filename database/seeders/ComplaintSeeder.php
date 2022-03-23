<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ComplaintSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();

        DB::table('complaints')->insert([
            'complaint_isd_code' => '100001',
            'school_id' => '1',
            'asset_model' => 'Chromebook',
            'tagging_no' => '14405',
            'serial_no' => $faker->numerify('##########'),
            'complainant_name' => 'Adam',
            'complainant_email' => 'admann@gmail.com',
            'complainant_phone' => '01184564896',
            'complaint_details' => 'Chromebook does not turn on',
            'status' => 'Completed',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('complaints')->insert([
            'complaint_isd_code' => '100002',
            'school_id' => '1',
            'asset_model' => 'Chromebook',
            'tagging_no' => '12001',
            'serial_no' => $faker->numerify('##########'),
            'complainant_name' => 'Lisa',
            'complainant_email' => 'lllisa@gmail.com',
            'complainant_phone' => '01818746512',
            'complaint_details' => 'Screen cracked',
            'status' => 'In Progress',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('complaints')->insert([
            'complaint_isd_code' => '100003',
            'school_id' => '4',
            'asset_model' => 'Lenovo Thinkpad',
            'tagging_no' => '10580',
            'serial_no' => $faker->numerify('##########'),
            'complainant_name' => 'Amira',
            'complainant_email' => 'a.mi_ra@gmail.com',
            'complainant_phone' => '0174544850',
            'complaint_details' => 'Virus',
            'status' => 'In Progress',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('complaints')->insert([
            'complaint_isd_code' => '100004',
            'school_id' => '3',
            'asset_model' => 'Chromebook',
            'tagging_no' => '22170',
            'serial_no' => $faker->numerify('##########'),
            'complainant_name' => 'Zamani',
            'complainant_email' => 'azmnr75@gmail.com',
            'complainant_phone' => '01347007400',
            'complaint_details' => 'Charger rosak',
            'status' => 'New',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('complaints')->insert([
            'complaint_isd_code' => '100005',
            'school_id' => '5',
            'asset_model' => 'Chromebook',
            'tagging_no' => '11425',
            'serial_no' => $faker->numerify('##########'),
            'complainant_name' => 'Khadijah',
            'complainant_email' => 'khdjah@yahoo.com.my',
            'complainant_phone' => '01175774020',
            'complaint_details' => 'Keyboard rosak',
            'status' => 'Completed',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('complaints')->insert([
            'complaint_isd_code' => '100006',
            'school_id' => '1',
            'asset_model' => 'HP Pavilion',
            'tagging_no' => '1358',
            'serial_no' => $faker->numerify('##########'),
            'complainant_name' => 'Amirulhamza',
            'complainant_email' => 'amirulHAMZA@gmail.com',
            'complainant_phone' => '01750508750',
            'complaint_details' => 'Battery isu',
            'status' => 'Completed',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
