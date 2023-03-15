<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Surgical Mask',
                'price' => 0.5,
                'quantity' => 1000,
                'category' => 'Medical Supplies',
                'supplier_name' => 'Supplier 1',
                'contact_information' => '+1 555 555 1212',
                'previous_order_history' => 'Ordered on 01/01/2021, Quantity: 500'
            ],
            [
                'name' => 'Hand Sanitizer',
                'price' => 2.5,
                'quantity' => 500,
                'category' => 'Medical Supplies',
                'supplier_name' => 'Supplier 2',
                'contact_information' => 'supplier2@email.com',
                'previous_order_history' => 'Ordered on 01/01/2021, Quantity: 200'
            ],
            [
                'name' => 'Latex Gloves',
                'price' => 0.8,
                'quantity' => 2000,
                'category' => 'Medical Supplies',
                'supplier_name' => 'Supplier 3',
                'contact_information' => '+1 555 555 1213',
                'previous_order_history' => 'Ordered on 01/01/2021, Quantity: 1000'
            ],
            [
                'name' => 'Disposable gown',
                'price' => 5,
                'quantity' => 500,
                'category' => 'Medical Supplies',
                'supplier_name' => 'Supplier 4',
                'contact_information' => 'supplier4@email.com',
                'previous_order_history' => 'Ordered on 01/01/2021, Quantity: 250'
            ],
            [
                'name' => 'Ventilator',
                'price' => 15000,
                'quantity' => 100,
                'category' => 'Medical Equipment',
                'supplier_name' => 'Supplier 5',
                'contact_information' => '+1 555 555 1214',
                'previous_order_history' => 'Ordered on 01/01/2021, Quantity: 50'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
