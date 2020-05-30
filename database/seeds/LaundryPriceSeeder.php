<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaundryPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('laundry_prices')->insert([
            'name' => 'Baju Kaos',
            'unit_type' => 'Satuan',
            'laundry_type_id' => '3',
            'price' => '8000',
            'user_id' => '1',
            'created_at' => Carbon::now(),
        ]);

        DB::table('laundry_prices')->insert([
            'name' => 'Blouse',
            'unit_type' => 'Satuan',
            'laundry_type_id' => '3',
            'price' => '9000',
            'user_id' => '1',
            'created_at' => Carbon::now(),
        ]);

        DB::table('laundry_prices')->insert([
            'name' => 'Jas / Blazer',
            'unit_type' => 'Satuan',
            'laundry_type_id' => '3',
            'price' => '10000',
            'user_id' => '1',
            'created_at' => Carbon::now(),
        ]);

        DB::table('laundry_prices')->insert([
            'name' => 'Jaket',
            'unit_type' => 'Satuan',
            'laundry_type_id' => '3',
            'price' => '15000',
            'user_id' => '1',
            'created_at' => Carbon::now(),
        ]);

        DB::table('laundry_prices')->insert([
            'name' => 'Long Dress',
            'unit_type' => 'Satuan',
            'laundry_type_id' => '3',
            'price' => '25000',
            'user_id' => '1',
            'created_at' => Carbon::now(),
        ]);

        DB::table('laundry_prices')->insert([
            'name' => 'Kebaya',
            'unit_type' => 'Satuan',
            'laundry_type_id' => '3',
            'price' => '9000',
            'user_id' => '1',
            'created_at' => Carbon::now(),
        ]);

        DB::table('laundry_prices')->insert([
            'name' => 'Handuk',
            'unit_type' => 'Satuan',
            'laundry_type_id' => '3',
            'price' => '7000',
            'user_id' => '1',
            'created_at' => Carbon::now(),
        ]);

    }
}
