<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pet;

class PetSeeder extends Seeder
{
    public function run()
    {
        $pets = [
            [
                'name' => 'Luna',
                'type' => 'Kucing',
                'gender' => 'Betina',
                'age' => 1,
                'location' => 'Jakarta Utara',
                'status' => 'ready',
                'image' => 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131',
                'description' => 'Kucing manja dan aktif, cocok untuk keluarga.'
            ],
            [
                'name' => 'Max',
                'type' => 'Anjing',
                'gender' => 'Jantan',
                'age' => 2,
                'location' => 'Jakarta Selatan',
                'status' => 'ready',
                'image' => 'https://images.unsplash.com/photo-1558788353-f76d92427f16',
                'description' => 'Anjing ramah dan sangat loyal.'
            ],
            [
                'name' => 'Milo',
                'type' => 'Anjing',
                'gender' => 'Jantan',
                'age' => 1,
                'location' => 'Tangerang',
                'status' => 'urgent',
                'image' => 'https://images.unsplash.com/photo-1517849845537-4d257902454a',
                'description' => 'Butuh rumah segera, sangat penyayang.'
            ],
            [
                'name' => 'Bella',
                'type' => 'Kucing',
                'gender' => 'Betina',
                'age' => 1,
                'location' => 'Jakarta Timur',
                'status' => 'ready',
                'image' => 'https://images.unsplash.com/photo-1592194996308-7b43878e84a6',
                'description' => 'Kucing kalem dan bersih.'
            ],
            [
                'name' => 'Charlie',
                'type' => 'Anjing',
                'gender' => 'Jantan',
                'age' => 4,
                'location' => 'Bekasi',
                'status' => 'ready',
                'image' => 'https://images.unsplash.com/photo-1552053831-71594a27632d',
                'description' => 'Penjaga rumah yang baik.'
            ],
            [
                'name' => 'Simba',
                'type' => 'Kucing',
                'gender' => 'Jantan',
                'age' => 1,
                'location' => 'Jakarta Barat',
                'status' => 'urgent',
                'image' => 'https://images.unsplash.com/photo-1519052537078-e6302a4968d4',
                'description' => 'Anak kucing lucu dan aktif.'
            ],
            [
                'name' => 'Rocky',
                'type' => 'Anjing',
                'gender' => 'Jantan',
                'age' => 3,
                'location' => 'Depok',
                'status' => 'ready',
                'image' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
                'description' => 'Anjing kuat dan bersahabat.'
            ],
            [
                'name' => 'Daisy',
                'type' => 'Anjing',
                'gender' => 'Betina',
                'age' => 1,
                'location' => 'Jakarta Selatan',
                'status' => 'ready',
                'image' => 'https://images.unsplash.com/photo-1543466835-00a7907e9de1',
                'description' => 'Sangat playful dan ramah anak.'
            ],

            // TAMBAHAN BIAR BANYAK 🔥
            [
                'name' => 'Coco',
                'type' => 'Kucing',
                'gender' => 'Betina',
                'age' => 2,
                'location' => 'Bandung',
                'status' => 'ready',
                'image' => 'https://images.unsplash.com/photo-1574158622682-e40e69881006',
                'description' => 'Kucing elegan dan tenang.'
            ],
            [
                'name' => 'Bruno',
                'type' => 'Anjing',
                'gender' => 'Jantan',
                'age' => 5,
                'location' => 'Bogor',
                'status' => 'urgent',
                'image' => 'https://images.unsplash.com/photo-1548199973-03cce0bbc87b',
                'description' => 'Butuh keluarga baru segera.'
            ],
        ];

        foreach ($pets as $pet) {
            Pet::create($pet);
        }
    }
}