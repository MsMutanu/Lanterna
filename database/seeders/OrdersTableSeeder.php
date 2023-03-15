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
                'order_id' =>1,
                'customer' => 'Joe',
                'supplier' =>'Lanterna',
                 'item' => 'mouthwash',
                'quantity' => 10,
                'delivery_date' => '2022-01-01',
                'order_status' => 'pending'
            ],
            [
                'order_id' =>2,
                'customer' => 'Jane',
                'supplier' =>'Lanterna',
                'item' =>'painkillers',
                'quantity' => 20,
                'delivery_date' => '2022-01-02',
                'order_status' => 'approved'
            ],
            [
                'order_id' =>3,
                'customer' => 'Robert',
                'supplier' =>'Lanterna',
                'item' => 'piriton',
                'quantity' => 30,
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
