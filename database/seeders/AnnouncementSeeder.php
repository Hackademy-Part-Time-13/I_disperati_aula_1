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
            'title' => 'Borraccia termica',
            'description' => 'Borraccia termica in acciaio inox di colore blu oltremare. Capacità 0.8L. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'price' => '18.99',
            'category_id' => 10,
            'user_id' => 2,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'Pallone in cuoio',
            'description' => 'Pallone da calcio in cuoio bianco e nero. Diametro 24cm. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'price' => '15',
            'category_id' => 10,
            'user_id' => 1,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'Divano in pelle',
            'description' => 'Divano tre posti in pelle bianco cenere. Poggiapiedi motorizzato. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'price' => '300',
            'category_id' => 5,
            'user_id' => 3,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'Cuffie wireless Sony',
            'description' => 'Cuffie wireless Sony ABC1234, colore nero. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'price' => '247.99',
            'category_id' => 4,
            'user_id' => 1,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'In cucina con Benedetta',
            'description' => 'Benedetta Parodi, la cuoca più seguita d\'Italia torna con 150 nuove ricette contro la noia dei soliti piatti. Negli anni Benedetta ha condiviso con noi il tipo di cucina che ci fa sentire a casa e che ci fa godere al massimo il momento del pasto, dimostrandoci che non servono tre ore di preparazione, ingredienti introvabili e costosissimi e capacità degne di uno chef di qualche ristorante stellato per servire un piatto fantasioso e goloso. Con questo libro fa lo stesso, rivelandoci ulteriori segreti e ricette che sono un piacere per gli occhi, per la gola e per il cuore e salvando numerosi pranzi e cene dalla monotonia… e dal disastro.',
            'price' => '9.99',
            'category_id' => 1,
            'user_id' => 1,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'XBOX One usata',
            'description' => 'XBOX One 2018 nera. Usata. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'price' => '250',
            'category_id' => 3,
            'user_id' => 2,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'Vaso in terracotta fatto a mano',
            'description' => 'Vaso in terracotta fatto a mano. Diametro di 18cm. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'price' => '50',
            'category_id' => 6,
            'user_id' => 3,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'Felpa ADIDAS',
            'description' => 'Felpa ADIDAS in microfibra in cappuccio nera. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'price' => '30',
            'category_id' => 8,
            'user_id' => 2,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'Queen - News of the World',
            'description' => 'CD Queen \'News of the World\' remastered 2011. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ',
            'price' => '22.5',
            'category_id' => 2,
            'user_id' => 1,
            'is_accepted' =>1,
        ]);
        Announcement::create([
            'title' => 'Moto Honda usata',
            'description' => 'Moto Honda Hornet 600rr. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'price' => '2000',
            'category_id' => 9,
            'user_id' => 2,
            'is_accepted' =>1,
        ]);
    }
}
