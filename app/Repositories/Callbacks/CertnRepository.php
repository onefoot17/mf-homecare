<?php

namespace App\Repositories\Callbacks;

use App\Repositories\Callbacks\Contracts\CertnRepositoryInterface;

use App\Models\Callbacks\Certn;

use Auth;
use Hash;

class CertnRepository implements CertnRepositoryInterface {

    public function store($request)
    {
        $certn = new Certn();
        $certn->response = $request;
        $certn->save();

        return $certn;
    }

    public function show($id)
    {

    }

    public function showByEmail($email)
    {

    }

    public function update($request, $id)
    {

    }

    public function destroy($id)
    {

    }

    public function getAll()
    {

    }
}