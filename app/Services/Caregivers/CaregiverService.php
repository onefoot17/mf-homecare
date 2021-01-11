<?php

namespace App\Services\Caregivers;

use Illuminate\Support\Facades\Validator;

use App\Services\Caregivers\Contracts\CaregiverServiceInterface;

use App\Repositories\Caregivers\Contracts\CaregiverRepositoryInterface;

use Str;

class CaregiverService implements CaregiverServiceInterface
{
    public function __construct(
        CaregiverRepositoryInterface $CaregiverRepositoryInterface
    )
    {
        $this->CaregiverRepositoryInterface = $CaregiverRepositoryInterface;
    }
    
    // Caregivers

    public function getAllCaregivers()
    {
        $query = $this->CaregiverRepositoryInterface->getAll();

        return $query;
    }

    public function storeCaregiver(\App\Models\User $user)
    {
        $insert = $this->CaregiverRepositoryInterface->store($user);

        return $insert;
    }

    public function storeCaregiverAjax(\App\Models\User $user)
    {
        
    }

    public function destroyCaregiver($id)
    {
        
    }

    public function updateCertnApplicantId($id, $certn_applicant_id)
    {
        $this->CaregiverRepositoryInterface->updateCertnApplicantId($id, $certn_applicant_id);
    }
}