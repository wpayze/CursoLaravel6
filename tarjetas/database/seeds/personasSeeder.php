<?php

use Illuminate\Database\Seeder;
use App\Persona;

class personasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Persona::class, 20)->create();
    }
}