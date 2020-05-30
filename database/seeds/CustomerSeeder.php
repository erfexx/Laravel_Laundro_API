<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $customers = [];
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            $customers[$i] = [
                'nik'       => $faker->ean13,
                'name'       => $faker->name,
                'address'      => $faker->address,
                'phone'   => $faker->e164PhoneNumber,
                'courier_id'      => '2',
                'point' => $faker->biasedNumberBetween(60,100,'sqrt'),
                'deposit' => '0',
                'created_at' => Carbon\Carbon::now(),
            ];
        }
        DB::table('customers')->insert($customers);
    }
}
