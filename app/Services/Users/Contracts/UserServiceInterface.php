<?php

namespace App\Services\Users\Contracts;

interface UserServiceInterface 
{
    // My Profile
    public function getUserProfile($id);
    public function updateUserProfile($request, $id);
    public function destroyUserProfile($id);

    // Setting
    public function getSettings($id);
    public function updateSetting($request, $id);

    // Caregivers
    public function getAllUsers();
    public function storeUser($request);
    public function storeUserAjax($request);
    public function addDefaultParamsToUsers($request);
    public function destroyUser($id);
}