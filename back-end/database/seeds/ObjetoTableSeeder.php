<?php

use App\Models\Objeto;
use Illuminate\Database\Seeder;

class ObjetoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Objeto::truncate();
        factory(Objeto::class, 30)->make();
    }
}
