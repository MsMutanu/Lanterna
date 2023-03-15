<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable =['name','phone','email','national_id','gender','current_contract','role',];
}