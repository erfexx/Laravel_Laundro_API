<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Http\Resources\UserResourceCollection;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function singleData($id)
    {
        $user = Auth::user();

        // return $user;

        if (!$user)
            return $user;

        else {
            $singleUser = new UserResource(User::find($id));

            return $singleUser;
        }
    }

    public function allData()
    {
        $allUser = new UserResourceCollection(User::paginate(2));

        return $allUser;
    }

    public function courierData()
    {
        $courierUser = User::with(['outlet'])->orderBy('created_at', 'DESC')->courier();
        // if (request()->q != '') {
        //     $courierUser = $courierUser->where('name', 'LIKE', '%' . request()->q . '%');
        // }
        $courierUser = $courierUser->paginate(2);

        return new UserResourceCollection($courierUser);
    }
}
