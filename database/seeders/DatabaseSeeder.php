<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

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
                'email' => 'admin@pnqgold.com',
                'password' => Hash::make('admin@pnqgold.com'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $this->call([
                SchoolSeeder::class,
                ComplaintSeeder::class,
            ]);
        }
    }
}
