<?php

use App\Models\Disciplina;
use Illuminate\Database\Seeder;

class DisciplinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disciplina::truncate();
        factory(Disciplina::class, 30)->make();
    }
}
