<?php

namespace App\Services\Caregivers\Contracts;

interface CaregiverServiceInterface 
{
    // Caregivers
    public function getAllCaregivers();
    public function storeCaregiver(\App\Models\User $user);
    public function storeCaregiverAjax(\App\Models\User $user);
    public function destroyCaregiver($id);
    public function updateCertnApplicantId($id, $certn_applicant_id);
}