<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Libri',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'Musica',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'Console',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'Informatica',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'Arredamento',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'Giardino',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'Bellezza',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'Abbigliamento',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'Auto & Moto',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'Oggettistica',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
    }
}
