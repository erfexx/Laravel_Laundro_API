<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        $outlets = [];
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            $outlets[$i] = [
                'code'      => $faker->stateAbbr.''.mt_rand(0,100),
                'name'      => 'Outlet '.$faker->state,
                'status'    => mt_rand(0,1),
                'address'   => $faker->address,
                'phone'     => $faker->e164PhoneNumber,
                'created_at' => Carbon\Carbon::now(),
            ];
        }
        DB::table('outlets')->insert($outlets);
    }
}
