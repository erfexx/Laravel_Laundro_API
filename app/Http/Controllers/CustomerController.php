<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Resources\CustomerCollection;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $customers = Customer::with(['courier'])->orderBy('created_at', 'DESC');
        // if (request()->q != '') { //JIKA DATA PENCARIAN ADA
        //     $customers = $customers->where('name', 'LIKE', '%' . request()->q . '%'); //MAKA BUAT FUNGSI FILTERING DATA BERDASARKAN NAME
        // }
        return new CustomerCollection($customers->paginate(10));
    }
}
