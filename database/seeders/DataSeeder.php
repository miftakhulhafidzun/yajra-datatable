<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 5000) as $index) {
            DB::table('data')->insert([
                'name' => $faker->name,
                'telp' => $faker->e164PhoneNumber,
                'alamat' => $faker->address,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
