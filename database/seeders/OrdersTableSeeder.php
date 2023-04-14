<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;


class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        $orders = [
            [
                'id' =>1,
                'customer' => 'Joe',
                'supplier' =>'Lanterna',
                 'item' => 'mouthwash',
                 'price' => '500',
                'quantity' => 10,
                'total_price'=>'5000',
                'delivery_date' => '2022-01-01',
                'order_status' => 'pending'
            ],
            [
                'id' =>2,
                'customer' => 'Jane',
                'supplier' =>'Lanterna',
                'item' =>'painkillers',
                'price' => '50',
                'quantity' => 20,
                'total_price'=>'1000',
                'delivery_date' => '2022-01-02',
                'order_status' => 'approved'
            ],
            [
                'id' =>3,
                'customer' => 'Robert',
                'supplier' =>'Lanterna',
                'item' => 'piriton',
                'price' => '10',
                'quantity' => 30,
                'total_price'=>'300',
                'delivery_date' => '2022-01-03',
                'order_status' => 'delivered'
            ]
            
        ];

        foreach ($orders as $order) {
            Order::create($order);
        }
    }

    /**
     */
    public function __construct() {
    }
}
