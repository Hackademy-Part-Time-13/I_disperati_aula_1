<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Announcement::create([
            'title' => 'Borraccia',
            'description' => 'borraccia termica',
            'price' => '5',
            'category_id' => 10,
            'user_id' => 1,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'Pallone',
            'description' => 'Da calcio in cuoio',
            'price' => '15',
            'category_id' => 10,
            'user_id' => 1,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'Divano',
            'description' => 'divano tre posti in pelle',
            'price' => '300',
            'category_id' => 5,
            'user_id' => 1,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'Cuffie',
            'description' => 'wireless',
            'price' => '25',
            'category_id' => 4,
            'user_id' => 1,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'benedetta parodi',
            'description' => 'di cucina per professionisti',
            'price' => '9.99',
            'category_id' => 1,
            'user_id' => 1,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'xbox',
            'description' => 'xbox one',
            'price' => '250',
            'category_id' => 3,
            'user_id' => 1,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'Vaso',
            'description' => 'vaso in terra cotta',
            'price' => '50',
            'category_id' => 6,
            'user_id' => 1,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'Felpa',
            'description' => 'Felpa in microfibra',
            'price' => '30',
            'category_id' => 8,
            'user_id' => 2,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'Cd  Queen',
            'description' => 'Disco originale prima edizione ',
            'price' => '20',
            'category_id' => 2,
            'user_id' => 3,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'Moto Honda',
            'description' => 'Hornet 600rr',
            'price' => '2000',
            'category_id' => 9,
            'user_id' => 2,
            'is_accepted' =>1,
        ]);
    }
}
