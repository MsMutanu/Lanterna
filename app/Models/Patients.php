<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $table = 'patients';
    protected $primaryKey = 'id';
    protected $fillable = ['first_name', 'second_name', 'address', 'phone', 'email','date_of_birth','city','national_id_no','emergency_contact','emergency_phone'];
}

