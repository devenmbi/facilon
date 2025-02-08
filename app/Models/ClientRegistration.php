<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientRegistration extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'client_name',
        'branch_name',
        'client_code',
        'client_id',
        'application_type',
        'kyc_number',
        'account_type',

        // ===== Add more columns for first person =====
        'prefix',
        'first_name',
        'middle_name',
        'last_name',

        // ===== Add more columns for Maiden person =====
        'maiden_prefix',
        'maiden_first_name',
        'maiden_middle_name',
        'maiden_last_name',

        // ===== Add more columns for Father/Spouse =====
        'father_prefix',
        'father_first_name',
        'father_middle_name',
        'father_last_name',

        // ===== Add more columns for Mother =====
        'mother_prefix',
        'mother_first_name',
        'mother_middle_name',
        'mother_last_name',

        'date_of_birth',
        'gender',
        'marital_status',
        'citizenship',
        'residenital_status',
        'occupation_type',
        'profile_pic',

        'inserted_by',
        'inserted_at',
        'modified_by',
        'modified_at',
        'deleted_by',
        'deleted_at',
    ];

    protected $dates = [
        'inserted_at',
        'modified_at',
        'deleted_at',
    ];
}
