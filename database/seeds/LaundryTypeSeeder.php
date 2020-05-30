<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaundryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('laundry_types')->insert([
            'name' => 'Cuci',
            'created_at' => Carbon::now(),
        ]);

        DB::table('laundry_types')->insert([
            'name' => 'Cuci Kering',
            'created_at' => Carbon::now(),
        ]);

        DB::table('laundry_types')->insert([
            'name' => 'Cuci Kering & Setrika',
            'created_at' => Carbon::now(),
        ]);

        DB::table('laundry_types')->insert([
            'name' => 'Setrika',
            'created_at' => Carbon::now(),
        ]);

        DB::table('laundry_types')->insert([
            'name' => 'Dry Laundry',
            'created_at' => Carbon::now(),
        ]);
    }
}
