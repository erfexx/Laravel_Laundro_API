<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $detail_transactions = [];
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 8; $i++) {

            $temp_qty = mt_rand(2,6);
            $temp_price = 8000;
            $temp_subtotal = $temp_qty * $temp_price;

            $detail_transactions[$i] = [
                'transaction_id'       => '1',
                'laundry_price_id'           => 1,
                'laundry_type_id'            => 3,
                'start_date'        => Carbon\Carbon::now(),
                'end_date'        => Carbon\Carbon::now()->addWeeks(1),
                'qty'        => $temp_qty,
                'price'        => $temp_price,
                'subtotal'        => $temp_subtotal,
                'created_at'        => Carbon\Carbon::now(),
            ];
        }
        DB::table('detail_transactions')->insert($detail_transactions);
    }
}
