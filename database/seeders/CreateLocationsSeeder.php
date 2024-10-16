<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class CreateLocationsSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            [
                'title' => 'Jakarta',
                'desc'  => 'Ibukota Indonesia, pusat ekonomi dan bisnis.'
            ],
            [
                'title' => 'Surabaya',
                'desc'  => 'Kota terbesar kedua di Indonesia, pusat perdagangan di Jawa Timur.'
            ],
            [
                'title' => 'Bandung',
                'desc'  => 'Kota yang terkenal dengan wisata kuliner dan udara sejuk di Jawa Barat.'
            ],
            [
                'title' => 'Bali',
                'desc'  => 'Destinasi wisata internasional terkenal dengan pantai dan budayanya.'
            ],
            [
                'title' => 'Yogyakarta',
                'desc'  => 'Kota budaya dan pusat pendidikan di Indonesia, dekat dengan Candi Borobudur.'
            ],
            [
                'title' => 'Medan',
                'desc'  => 'Kota besar di Sumatera Utara, terkenal dengan aneka kuliner khas.'
            ],
            [
                'title' => 'Makassar',
                'desc'  => 'Kota terbesar di Indonesia Timur, pusat pelabuhan dan perdagangan.'
            ],
            [
                'title' => 'Malang',
                'desc'  => 'Kota pendidikan dan wisata dengan iklim sejuk di Jawa Timur.'
            ],
        ];

        foreach ($locations as $key => $location) {
            Location::create($location);
        }
    }
}