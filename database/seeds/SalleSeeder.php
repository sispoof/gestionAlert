<?php

use Illuminate\Database\Seeder;
use App\salle;

class SalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(salle::class,12)->create();
    }
}
