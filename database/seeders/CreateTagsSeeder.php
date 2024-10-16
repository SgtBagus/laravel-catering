<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class CreateTagsSeeder extends Seeder
{
    public function run(): void
    {
        $tags = [
            [
                'title'         => 'Katering Harian',
                'desc'          => 'Untuk kebutuhan makan sehari-hari, baik untuk individu maupun keluarga. Biasanya menawarkan paket makan siang dan makan malam.',
            ],
            [
                'title'         => 'Katering Acara/Kondangan',
                'desc'          => 'Melayani kebutuhan untuk acara besar seperti pernikahan, ulang tahun, atau pesta. Paket ini biasanya mencakup makanan prasmanan atau menu khusus.',
            ],
            [
                'title'         => 'Katering Diet/Kesehatan',
                'desc'          => 'Untuk mereka yang memiliki kebutuhan diet khusus, seperti diet keto, vegetarian, vegan, atau makanan rendah kalori dan rendah lemak.',
            ],
            [
                'title'         => 'Katering Kantor',
                'desc'          => 'Menyediakan makan siang atau makan malam bagi karyawan di kantor. Biasanya ditawarkan dalam jumlah besar dengan harga yang lebih terjangkau.',
            ],
            [
                'title'         => 'Katering Bento Box',
                'desc'          => 'Paket makan dalam bentuk kotak yang praktis dan cocok untuk acara, pertemuan, atau untuk karyawan di kantor.',
            ],
            [
                'title'         => 'Katering Makanan Tradisional',
                'desc'          => 'Menyediakan makanan tradisional dari berbagai daerah, seperti nasi tumpeng, nasi liwet, atau makanan khas daerah lainnya.',
            ],
            [
                'title'         => 'Katering Makanan Internasional',
                'desc'          => 'Menawarkan menu makanan dari berbagai negara, seperti makanan Italia, Jepang, Timur Tengah, dan lainnya.',
            ],
            [
                'title'         => 'Katering Anak-anak',
                'desc'          => 'Spesial untuk anak-anak, dengan menu yang disesuaikan dengan selera dan kebutuhan gizi mereka, cocok untuk acara ulang tahun atau sekolah.',
            ],
            [
                'title'         => 'Katering Vegetarian/Vegan',
                'desc'          => 'Menyediakan makanan tanpa daging atau produk hewani, dengan bahan-bahan yang ramah lingkungan dan sehat.',
            ],
            [
                'title'         => 'Katering Pernikahan',
                'desc'          => 'Spesial untuk resepsi pernikahan dengan pilihan menu mewah, prasmanan, atau set menu untuk tamu.',
            ],
        ];

        foreach ($tags as $key => $tag) {
            Tag::create($tag);
        }
    }
}