<?php

namespace App\Repositories\Caregivers\Contracts;

interface CaregiverRepositoryInterface
{
    public function store(\App\Models\User $user);
    public function show($id);
    public function update($request, $id);
    public function destroy($id);
    public function getAll();
    public function updateCertnApplicantId($id, $certn_applicant_id);
}