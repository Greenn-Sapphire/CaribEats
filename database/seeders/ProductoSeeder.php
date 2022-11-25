<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = new Producto();
        $productos -> name = 'Torta de chilaquiles';
        $productos -> description = 'Rica torta de crujientes chilaquiles en la salsa de tu preferencia verdes o rojos a tu eleccion.';
        $productos -> price = '35';
        $productos -> quantity = '35';
        $productos -> image = 'https://www.nibblesandfeasts.com/wp-content/uploads/2017/09/Torta-1.jpg';
        $productos -> categoriaName = 'Comida preparada';
        $productos -> categoria_id = '1';
        $productos -> save();

        $productos2 = new Producto();
        $productos2 -> name = 'Panini';
        $productos2 -> description = 'Torta con queso oaxaca y pan chapata.';
        $productos2 -> price = '45';
        $productos2 -> quantity = '25';
        $productos2 -> image = 'https://casahotnuts.com/wp-content/uploads/2021/10/grilled-mexican-panini.jpeg';
        $productos2 -> categoriaName = 'Comida preparada';
        $productos2 -> categoria_id = '1';
        $productos2 -> save();

        $productos3 = new Producto();
        $productos3 -> name = 'Hot Dogs';
        $productos3 -> description = 'Ricos Jochos, con tomate y cebolla al gusto.';
        $productos3 -> price = '35';
        $productos3 -> quantity = '15';
        $productos3 -> image = 'https://images.ctfassets.net/n7hs0hadu6ro/40UhhiFTwgkH4cmTMWYFtm/44b5757b40a7bedc8fbbb394a4164980/hot-dogs-a-domicilio-cerca-de-mi.jpg?w=1254&h=836&fl=progressive&q=50&fm=jpg';
        $productos3 -> categoriaName = 'Comida preparada';
        $productos3 -> categoria_id = '1';
        $productos3 -> save();

    }
}
