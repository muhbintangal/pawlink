<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
// TAMBAHKAN BARIS INI:
use App\Models\Article;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
        'title' => 'Panduan Lengkap Merawat Anak Kucing',
        'category' => 'Perawatan Dasar',
        'image' => 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131', // Nanti upload gambar ini ke storage/app/public
        'excerpt' => 'Pelajari cara merawat anak kucing mulai dari nutrisi hingga vaksinasi.',
        'content' => 'Merawat anak kucing (kitten) membutuhkan kesabaran dan perhatian ekstra, terutama pada 12 minggu pertama kehidupan mereka. Berikut adalah poin penting yang harus diperhatikan
Nutrisi yang Tepat: Anak kucing membutuhkan protein dan lemak lebih tinggi daripada kucing dewasa. Pastikan memberikan makanan khusus Kitten hingga usia 1 tahun.

Vaksinasi & Obat Cacing: Segera bawa ke dokter hewan saat usia 6-8 minggu untuk memulai rangkaian vaksinasi F3/F4 guna mencegah virus mematikan.

Litter Training: Perkenalkan kotak pasir sejak dini. Letakkan anak kucing di atas pasir setiap kali mereka selesai makan atau bangun tidur.

Sosialisasi: Ajak mereka bermain dengan lembut agar tumbuh menjadi kucing yang ramah dan tidak penakut terhadap manusia',
        'author' => 'Dr. Sarah Veterinary',
        'reading_time' => 5
    ]);

    Article::create([
        'title' => 'Tips Melatih Anjing untuk Pemula',
        'category' => 'Pelatihan',
        'image' => 'https://images.unsplash.com/photo-1558788353-f76d92427f16',
        'excerpt' => 'Teknik dasar melatih anjing yang efektif dan mudah diterapkan.',
        'content' => 'IMelatih anjing bukan hanya soal kepatuhan, tapi tentang membangun ikatan kepercayaan antara pemilik dan hewan peliharaan.

Gunakan Positive Reinforcement: Selalu berikan pujian atau snack (treats) saat anjing berhasil melakukan perintah. Hindari membentak atau memukul karena akan membuat mereka trauma.

Perintah Dasar: Mulailah dengan kata-kata satu suku kata yang jelas seperti SIT (duduk), STAY (diam), atau COME (datang).

Durasi Latihan: Anjing memiliki rentang perhatian yang pendek. Lakukan latihan cukup 5-10 menit saja namun rutin 2-3 kali sehari.

Konsistensi: Pastikan semua orang di rumah menggunakan kata perintah yang sama agar anjing tidak bingung.',
        'author' => 'Budi Santoso',
        'reading_time' => 7
    ]);
    }
}
