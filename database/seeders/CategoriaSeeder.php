<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorias;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = new Categorias();
        $categorias-> name = 'Comida';
        $categorias -> description = 'Comida preparada';
        $categorias -> save();

        $categorias2 = new Categorias();
        $categorias2 -> name = 'Bebidas';
        $categorias2 -> description = 'Bebidas refrescantes';
        $categorias2 -> save();
    }
}
