<?php

namespace App\Models\Caregivers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caregiver extends Model
{
    use HasFactory;

    protected $table = 'caregivers.caregivers';

    public function user()
    {
        return $this->belongsTo(App\Models\User::class);
    }
}
