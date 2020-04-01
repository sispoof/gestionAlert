<?php

use Illuminate\Database\Seeder;
use App\departement;
class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(departement::class,4)->create();
    }
}
