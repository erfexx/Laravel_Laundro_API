<?php

namespace App\Http\Controllers;

use App\Http\Resources\OutletResource;
use App\Http\Resources\OutletResourceCollection;
use App\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OutletController extends Controller
{
    //
    public function singleData($id)
    {
        $singleOutlet = new OutletResource(Outlet::find($id));

        return $singleOutlet;
    }

    public function allData()
    {
        $allOutlet = new OutletResourceCollection(Outlet::orderBy('created_at', 'DESC')->paginate(5));

        return $allOutlet;
    }
}
