<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $fillable = [ 'order_id','customer','supplier','item','price', 'quantity', 'total_price', 'delivery_date', 'order_status'];

    
        public function items()
        {
            return $this->hasMany(OrderItem::class);
        }
    
        public function total()
        {
            return $this->items->sum('price');
        }
    
    
}
