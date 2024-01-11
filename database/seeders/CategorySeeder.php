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
            'name' => 'libri',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'musica',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'console',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'elettronica & informatica',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'arredamento',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'giardino',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'bellezza & salute',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'abbigliamento',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'auto & moto',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
        Category::create([
            'name' => 'oggettistica',
            'description' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium doloribus odio minima expedita. Voluptatem totam tempore fuga natus. Quas, reprehenderit!',
        ]);
    }
}
