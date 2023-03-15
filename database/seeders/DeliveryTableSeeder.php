<?php

namespace Database\Seeders;



use App\Models\Delivery;
use Illuminate\Database\Seeder;


class DeliveryTableSeeder extends Seeder
{
    public function run()
    {
        $deliveries = [
            [
                'order_id' => 1,
                'supplier_id' => 1,
                'customer' => 'Joe',
                'delivery_date' => '2022-01-01',
                'status' => 'pending'
            ],
            [
                'order_id' => 2,
                'supplier_id' => 2,
                'customer' => 'Jane',
                'delivery_date' => '2022-01-02',
                'status' => 'shipped'
            ],
            [
                'order_id' => 3,
                'supplier_id' => 3,
                'customer' => 'Robert',
                'delivery_date' => '2022-01-03',
                'status' => 'delivered'
            ]
        ];

        foreach ($deliveries as $delivery) {
            Delivery::create($delivery);
        }
    }
}
