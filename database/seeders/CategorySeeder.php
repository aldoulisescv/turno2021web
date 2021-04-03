<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = Category::create([
            'name' => 'Dentista',
        ]);
        Category::create([
            'name' => 'Ortodoncista',
            'parentCategory' => $cat->id,
        ]);
        Category::create([
            'name' => 'Cirujano',
            'parentCategory' => $cat->id,
        ]);
        $cat = Category::create([
            'name' => 'Belleza',
        ]);
        Category::create([
            'name' => 'Estilista',
            'parentCategory' => $cat->id,
        ]);
        Category::create([
            'name' => 'Barbero(a)',
            'parentCategory' => $cat->id,
        ]);
        Category::create([
            'name' => 'Uñas',
            'parentCategory' => $cat->id,
        ]);
        $cat = Category::create([
            'name' => 'Bienestar',
        ]);
        Category::create([
            'name' => 'Fisioterapia',
            'parentCategory' => $cat->id,
        ]);
        Category::create([
            'name' => 'Spa',
            'parentCategory' => $cat->id,
        ]);
        Category::create([
            'name' => 'Masajes',
            'parentCategory' => $cat->id,
        ]);
        $cat = Category::create([
            'name' => 'Modificación Corporal',
        ]);
        Category::create([
            'name' => 'Tatuajes',
            'parentCategory' => $cat->id,
        ]);
        Category::create([
            'name' => 'Perforaciones',
            'parentCategory' => $cat->id,
        ]);
    }
}
