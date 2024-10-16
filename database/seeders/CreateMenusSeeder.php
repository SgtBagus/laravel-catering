<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class CreateMenusSeeder extends Seeder
{
    public function run(): void
    {
        $menus = [
            [
                'title'         => 'Nasi Ayam Bakar',
                'price'         => 30000,
                'photo'         => 'nasi_ayam_bakar.jpg',
                'tag_id'        => 1,
                'desc'          => 'Nasi putih dengan ayam bakar dan sambal khas.',
                'stock'         => 50,
                'location_id'   => 1  // Jakarta
            ],
            [
                'title'         => 'Paket Nasi Goreng',
                'price'         => 25000,
                'photo'         => 'nasi_goreng.jpg',
                'tag_id'        => 1,
                'desc'          => 'Nasi goreng spesial dengan telur dan acar.',
                'stock'         => 40,
                'location_id'   => 1  // Jakarta
            ],
            [
                'title'         => 'Buffet Prasmanan Mewah',
                'price'         => 100000,
                'photo'         => 'buffet_prasmanan.jpg',
                'tag_id'        => 2,
                'desc'          => 'Paket prasmanan lengkap untuk 100 orang.',
                'stock'         => 10,
                'location_id'   => 2  // Surabaya
            ],
            [
                'title'         => 'Paket Nasi Liwet',
                'price'         => 120000,
                'photo'         => 'nasi_liwet.jpg',
                'tag_id'        => 2,
                'desc'          => 'Nasi liwet tradisional lengkap dengan lauk-pauk.',
                'stock'         => 5,
                'location_id'   => 3  // Bandung
            ],
            [
                'title'         => 'Salad Buah Segar',
                'price'         => 35000,
                'photo'         => 'salad_buah.jpg',
                'tag_id'        => 3,
                'desc'          => 'Salad buah dengan dressing yogurt rendah lemak.',
                'stock'         => 30,
                'location_id'   => 1  // Jakarta
            ],
            [
                'title'         => 'Paket Diet Keto',
                'price'         => 50000,
                'photo'         => 'diet_keto.jpg',
                'tag_id'        => 3,
                'desc'          => 'Paket diet keto dengan menu rendah karbohidrat.',
                'stock'         => 20,
                'location_id'   => 4  // Bali
            ],
            [
                'title'         => 'Lunch Bento Box',
                'price'         => 45000,
                'photo'         => 'bento_box.jpg',
                'tag_id'        => 4,
                'desc'          => 'Paket bento lengkap dengan nasi, daging, dan sayuran.',
                'stock'         => 25,
                'location_id'   => 1  // Jakarta
            ],
            [
                'title'         => 'Nasi Tumpeng Mini',
                'price'         => 75000,
                'photo'         => 'nasi_tumpeng.jpg',
                'tag_id'        => 5,
                'desc'          => 'Nasi tumpeng kecil untuk acara spesial.',
                'stock'         => 15,
                'location_id'   => 2  // Surabaya
            ]
        ];
        

        foreach ($menus as $key => $menu) {
            Menu::create($menu);
        }
    }
}