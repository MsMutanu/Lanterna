<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Patients;
use illuminate\Support\Str;


class PatientsTableSeeder extends Seeder
{
    public function run()
    {
        $patients = [
            [
                'first_name' => 'John',
                'second_name' =>' Doe',
                'address' => '123 Main St.',
                'phone' => '+1 555 555 1212',
                'email' => 'johndoe@example.com',
                'date_of_birth' =>'12/01/1995',
                'national_id_no' => '4098765',
                'emergency_contact' => 'Jane Doe',
                'emergency_phone' => '+1 555 555 1213',
            ],
            [
                'first_name' => 'Jane',
                'second_name' => 'Smith',
                'address' => '456 Park Ave.',
                'phone' => '+1 555 555 1214',
                'email' => 'janesmith@example.com',
                'date_of_birth' =>'22/04/1985',
                'national_id_no' => '2098765',             
                'emergency_contact' => 'John Smith',
                'emergency_phone' => '+1 555 555 1215',
            ],
            [
                'first_name' => 'Robert',
                'second_name' => 'Johnson',
                'address' => '789 Elm St.',
                'phone' => '+1 555 555 1216',
                'email' => 'rjohnson@example.com',
                'date_of_birth' =>'15/06/1975',
                'national_id_no' => '2099675', 
                'emergency_contact' => 'Samantha Johnson',
                'emergency_phone' => '+1 555 555 1217',
            ],
        ];

        foreach ($patients as $patient) {
            Patients::create($patient);
        }
    }
}

