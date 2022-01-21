<?php

namespace Database\Seeders;

use App\Models\categorias;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categorias::factory(10)->create();
    }
}
