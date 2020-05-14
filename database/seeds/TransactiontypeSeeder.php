<?php

use Illuminate\Database\Seeder;
use App\Transactiontype;

class TransactiontypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transactiontype::create([
            'label'=>'Credit',
        ]);
        Transactiontype::create([
            'label'=>'Debit',
        ]);
    }
}
