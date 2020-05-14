<?php

use Illuminate\Database\Seeder;
use App\Typecompte;

class TypecompteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Typecompte::create([
            'label'=>'Eau',
        ]);
        Typecompte::create([
            'label'=>'Electricite',
        ]);
    }
}
