<?php

namespace App\Services\Users;

use Illuminate\Support\Facades\Validator;

use App\Services\Users\Contracts\UserServiceInterface;

use App\Repositories\Users\Contracts\UserRepositoryInterface;
use App\Repositories\Users\Contracts\SettingRepositoryInterface;

use Str;

class UserService implements UserServiceInterface
{
    public function __construct(
        UserRepositoryInterface $UserRepositoryInterface,
        SettingRepositoryInterface $SettingRepositoryInterface
    )
    {
        $this->UserRepositoryInterface = $UserRepositoryInterface;
        $this->SettingRepositoryInterface = $SettingRepositoryInterface;
    }

    // My Profile

    public function getUserProfile($id)
    {
        $query = $this->UserRepositoryInterface->show($id);

        return $query;
    }

    public function updateUserProfile($request, $id)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'email:rfc,dns',
            'postal_code' => 'min:6|max:6'
        ]);

        if(!is_null($request->password)){
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|min:3',
                'last_name' => 'required|min:3',
                'email' => 'email:rfc,dns',
                'postal_code' => 'min:6|max:6',
                'password' => 'required|string|min:8|confirmed'
            ]);
        }

        if($validator->fails()){
            $update = $validator->errors();
        } else {
            $update = $this->UserRepositoryInterface->update($request, $id);
        }

        return $update;
    }

    public function destroyUserProfile($id)
    {
        
    }

    // Settings

    public function getSettings($id)
    {
        $query = $this->SettingRepositoryInterface->show($id);

        return $query;
    }

    public function updateSetting($request, $id)
    {
        $update = $this->SettingRepositoryInterface->update($request, $id);

        return $update;
    }

    // Caregivers

    public function getAllUsers()
    {
        $query = $this->UserRepositoryInterface->getAll();

        return $query;
    }

    public function storeUser($request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'email:rfc,dns||unique:App\Models\User',
            'postal_code' => [
                'min:6',
                function($attribute, $value, $fail){
                    $postal_code = $value;
    
                    $postal_code_1 = $postal_code[0];
                    $postal_code_2 = $postal_code[1];

                    if($postal_code_1 == 'M'){
                        $allowed = true;
                    } else if($postal_code_1 == 'L' and ($postal_code_2 == 4 or $postal_code_2 == 5 or $postal_code_2 == 6 or $postal_code_2 == 7)) {
                        $allowed = true;
                    } else if($postal_code_1 == 'V' and ($postal_code_2 == 3 or $postal_code_2 == 4 or $postal_code_2 == 5 or $postal_code_2 == 6 or $postal_code_2 == 7)) {
                        $allowed = true;
                    } else {
                        $allowed = false;
                    }

                    if($allowed === false){
                        $fail('Your area is not supported at this time. Please check back soon!');
                    }
                }
            ]
        ]);

        $request->password = Str::random(8);
        $request->type = 1;

        if($validator->fails()){
            $insert = $validator->errors();
        } else {
            $insert = $this->UserRepositoryInterface->store($request);
        }

        return $insert;
    }

    public function destroyUser($id)
    {
        $this->UserRepositoryInterface->destroy($id);
    }

    public function updateCertnApplicantId($id, $certn_applicant_id)
    {
        $this->UserRepositoryInterface->updateCertnApplicantId($id, $certn_applicant_id);
    }
}