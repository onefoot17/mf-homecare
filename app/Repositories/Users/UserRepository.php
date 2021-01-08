<?php

namespace App\Repositories\Users;

use App\Repositories\Users\Contracts\UserRepositoryInterface;

use App\Models\User;

use Auth;
use Hash;

class UserRepository implements UserRepositoryInterface {

    public function store($request)
    {
        $store = new User();
        $store->first_name = $request->first_name;
        $store->last_name = $request->last_name;
        $store->email = $request->email;
        $store->password = Hash::make($request->password);
        $store->postal_code = $request->postal_code;
        $store->type = $request->type;
        $store->status = $request->status;
        $store->save();

        return $store;
    }

    public function show($id)
    {
        $query = User::where('id', $id)
        ->first();

        if(!empty($query->phone_number)){

            $area_code = substr($query->phone_number, 0, 3);
            $phone_prefix = substr($query->phone_number, 3, 3);
            $phone_sufix = substr($query->phone_number, 6, 4);

            $query->masked_phone_number = '('.$area_code.') '.$phone_prefix.'-'.$phone_sufix;

        } else {
            $query->masked_phone_number = null;
        }

        return $query;
    }

    public function showByEmail($email)
    {
        $query = User::where('email', $email)
        ->first();

        return $query;
    }

    public function update($request, $id)
    {
        if(!empty($request->password)){
            $password_array = ['password' => Hash::make($request->password)];
        } else {
            $password_array = [];
        }

        $update_array = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number
        ];

        $update_array = array_merge($update_array, $password_array);

        $update = User::where('id', $id)
        ->update($update_array);

        return $update;
    }

    public function destroy($id)
    {
        $delete = User::where('id', $id)
        ->delete();

        return $delete;
    }

    public function getAll()
    {
        $query = User::orderBy('id')->get();

        return $query;
    }
}