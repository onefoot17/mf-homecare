<?php

namespace App\Repositories\Users;

use App\Repositories\Users\Contracts\UserRepositoryInterface;

use App\Models\Caregivers\Caregiver;

use Auth;
use Hash;

class CaregiverRepository implements CaregiverRepositoryInterface {

    public function store($request)
    {

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

    public function updateCertnApplicantId($id, $certn_applicant_id)
    {
        $update = Caregiver::where('id', $id)
        ->update([
            'stripe_tax_client_secret' => $certn_applicant_id
        ]);

        return $update;
    }
}