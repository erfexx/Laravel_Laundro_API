<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $transactions = [];
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 3; $i++) {
            $transactions[$i] = [
                'customer_id'       => mt_rand(1,5),
                'user_id'           => 2,
                'amount'            => $faker->biasedNumberBetween(10000,100000,'sqrt'),
                'status'            => mt_rand(0,1),
                'created_at'        => Carbon\Carbon::now(),
            ];
        }
        DB::table('transactions')->insert($transactions);
    }
}
