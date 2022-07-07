<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('messages')->truncate();

        for ($j = 0; $j < 1; $j++) {
            $message = [];
            for ($i = 0; $i < 100; $i++) {
                $message[] = [
                    'name' => $faker->firstName(),
                    'last_name' => $faker->lastName(),
                    'email' => $faker->email(),
                    'phone' => $faker->phoneNumber(),
                    'message' => $faker->sentence,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];
            }
            DB::table('messages')->insert($message);
        }
    }
}
