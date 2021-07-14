<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccountRequest;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController
{
    function createForm()
    {
        return view('create_user_form');
    }

    function create(StoreAccountRequest $request)
    {
        $request->validate();
        $obj = new Account();
        $obj->identityNumber = $request->get('identityNumber');
        $obj->firstName = $request->get('firstName');
        $obj->lastName = $request->get('lastName');
        $obj->phone = $request->get('phone');
        $obj->gender = $request->get('gender');
        $obj->created_at = Carbon::now();
        $obj->updated_at = Carbon::now();
        $obj->save();
        return redirect('/admin/user/create');
    }
}
