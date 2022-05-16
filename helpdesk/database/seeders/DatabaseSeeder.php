<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();

        $this->call([
            SchoolSeeder::class,
        ]);

        if (env('APP_ENV') == 'local') {
            DB::table('users')->insert([
                'name' => 'PNQ Admin',
                'email' => 'helpdesk@pnqgold.com.my',
                'password' => Hash::make('helpdesk@pnqgold.com.my'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

            // $this->call([
            //     ComplaintSeeder::class,
            // ]);
        }
    }
}
