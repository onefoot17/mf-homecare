<?php

namespace App\Services\Users\Contracts;

interface CaregiverServiceInterface 
{
    // Caregivers
    public function getAllUsers();
    public function storeUser($request);
    public function storeUserAjax($request);
    public function destroyUser($id);
    public function updateCertnApplicantId($id, $certn_applicant_id);
}