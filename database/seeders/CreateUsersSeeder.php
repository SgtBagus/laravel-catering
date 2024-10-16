<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name'          => 'admin',
                'email'         => 'admin@admin.com',
                'role'          => 'admin',
                'company_name'  => 'PT. Transindo Data Perkasa',
                'address'       => 'Jl. Cikutra Baru Raya No.28, Neglasari, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40124',
                'contact'       => '(022) 7787781',
                'desc'          => 'IT Consultant | Network Infrastructure & Security Specialist | Software Developer | Professional Training Certification | Training IT Bandung',
                'password'      => Hash::make('admin'),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'name'          => 'customer',
                'email'         => 'customer@customer.com',
                'role'          => 'customer',
                'company_name'  => 'PT. Transindo Data Perkasa Customer',
                'address'       => 'Jl. Cikutra Baru Raya No.28, Neglasari, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40124',
                'contact'       => '(022) 7787781',
                'desc'          => 'IT Consultant | Network Infrastructure & Security Specialist | Software Developer | Professional Training Certification | Training IT Bandung',
                'password'      => Hash::make('customer'),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}