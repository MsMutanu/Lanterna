<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'deliveries';
    protected $primaryKey = 'id';
    protected $fillable = ['order_id', 'supplier_id','customer','delivery_date','status'];
}
