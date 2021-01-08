<?php

namespace App\Repositories\Users\Contracts;

interface UserRepositoryInterface
{
    public function store($request);
    public function show($id);
    public function update($request, $id);
    public function destroy($id);
    public function getAll();
    public function updateCertnApplicantId($id, $certn_applicant_id);
}