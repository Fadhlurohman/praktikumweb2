<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    public function run()
    {
        $model = model('ArtikelModel');

        $data = [
            [
                'judul'       => 'Tren Desain Web Modern 2026 oleh Fadhlurohman',
                'slug'        => 'tren-desain-web-modern-2026-oleh-fadhlurohman',
                'isi'         => 'Perkembangan teknologi web di tahun 2026 semakin berfokus pada kecepatan akses dan interaksi yang dinamis. Artikel ini disusun oleh Fadhlurohman untuk membahas pemanfaatan CSS modern dan optimalisasi visual yang dapat memanjakan pengguna di platform desktop maupun mobile.',
                'status'      => 1,
                'id_kategori' => 1, // Berita Teknologi
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'judul'       => 'Panduan Memulai CodeIgniter 4 bagi Pemula',
                'slug'        => 'panduan-memulai-codeigniter-4-bagi-pemula',
                'isi'         => 'Tutorial ini dirancang khusus untuk memandu mahasiswa atau pemula dalam mendalami framework PHP CodeIgniter 4. Fadhlurohman menjelaskan teknik instalasi, manajemen routing, serta konsep Controller dan Model untuk mempermudah pengerjaan tugas kuliah.',
                'status'      => 1,
                'id_kategori' => 2, // Tutorial Pemrograman
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'judul'       => 'Review Laptop Kerja Terbaik untuk Coding',
                'slug'        => 'review-laptop-kerja-terbaik-untuk-coding',
                'isi'         => 'Menentukan spesifikasi laptop yang ideal untuk kebutuhan coding terkadang membingungkan. Ulasan komprehensif ini dikuratori oleh Fadhlurohman dengan membandingkan prosesor, kapasitas RAM, dan keandalan baterai agar nyaman dipakai berjam-jam.',
                'status'      => 1,
                'id_kategori' => 3, // Review Gadget
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        foreach ($data as $row) {
            $exists = $model->where('slug', $row['slug'])->first();
            if (! $exists) {
                $model->insert($row);
            }
        }
    }
}
