<?php

namespace App\Services\Users;

use Illuminate\Support\Facades\Validator;

use App\Services\Users\Contracts\UserServiceInterface;

use App\Repositories\Caregivers\Contracts\CaregiverRepositoryInterface;

use Str;

class CaregiverService implements CaregiverServiceInterface
{
    public function __construct(
        UserRepositoryInterface $UserRepositoryInterface
    )
    {
        $this->UserRepositoryInterface = $UserRepositoryInterface;
    }
    
    // Caregivers

    public function getAllUsers()
    {
        $query = $this->UserRepositoryInterface->getAll();

        return $query;
    }

    public function storeUser($request)
    {
        
    }

    public function storeUserAjax($request)
    {
        
    }

    public function destroyUser($id)
    {
        
    }

    public function updateCertnApplicantId($id, $certn_applicant_id)
    {
        $this->UserRepositoryInterface->updateCertnApplicantId($id, $certn_applicant_id);
    }
}