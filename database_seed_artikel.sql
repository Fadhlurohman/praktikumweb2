-- SQL Seed Data for Artikel kustom oleh Fadhlurohman
-- Jalankan di database lab_ci4 melalui phpMyAdmin jika ingin langsung mengimpor data artikel.

INSERT INTO artikel (judul, slug, isi, status, id_kategori, created_at, updated_at)
VALUES 
('Tren Desain Web Modern 2026 oleh Fadhlurohman', 
 'tren-desain-web-modern-2026-oleh-fadhlurohman', 
 'Perkembangan teknologi web di tahun 2026 semakin berfokus pada kecepatan akses dan interaksi yang dinamis. Artikel ini disusun oleh Fadhlurohman untuk membahas pemanfaatan CSS modern dan optimalisasi visual yang dapat memanjakan pengguna di platform desktop maupun mobile.', 
 1, 1, NOW(), NOW()),
('Panduan Memulai CodeIgniter 4 bagi Pemula', 
 'panduan-memulai-codeigniter-4-bagi-pemula', 
 'Tutorial ini dirancang khusus untuk memandu mahasiswa atau pemula dalam mendalami framework PHP CodeIgniter 4. Fadhlurohman menjelaskan teknik instalasi, manajemen routing, serta konsep Controller dan Model untuk mempermudah pengerjaan tugas kuliah.', 
 1, 2, NOW(), NOW()),
('Review Laptop Kerja Terbaik untuk Coding', 
 'review-laptop-kerja-terbaik-untuk-coding', 
 'Menentukan spesifikasi laptop yang ideal untuk kebutuhan coding terkadang membingungkan. Ulasan komprehensif ini dikuratori oleh Fadhlurohman dengan membandingkan prosesor, kapasitas RAM, dan keandalan baterai agar nyaman dipakai berjam-jam.', 
 1, 3, NOW(), NOW())
ON DUPLICATE KEY UPDATE 
 judul = VALUES(judul),
 isi = VALUES(isi),
 status = VALUES(status),
 id_kategori = VALUES(id_kategori),
 updated_at = NOW();
