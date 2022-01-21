<?php

namespace Database\Seeders;

use App\Models\Clientes;
use App\Models\Categorias;
use App\Models\Productos;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
           ClientesSeeder::class,
           CategoriasSeeder::class,
           ProductosSeeder::class,
       ]);

    }
}
