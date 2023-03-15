<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $fillable = [ 'order_id','customer','supplier','item','price', 'quantity',  'delivery_date', 'order_status'];
}
