<?php

namespace App\Repositories\Caregivers;

use App\Repositories\Caregivers\Contracts\CaregiverRepositoryInterface;

use App\Models\Caregivers\Caregiver;

use Auth;
use Hash;

class CaregiverRepository implements CaregiverRepositoryInterface {

    public function store(\App\Models\User $user)
    {
        $caregiver = new Caregiver([]);
        
        $new_caregiver = $user->caregiver()->save($caregiver);

        return $new_caregiver;
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
            'certn_applicant_id' => $certn_applicant_id
        ]);

        return $update;
    }
}