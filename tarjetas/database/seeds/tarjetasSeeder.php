<?php

use Illuminate\Database\Seeder;
use App\Tarjeta;

class tarjetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tarjeta::class, 10)->create();
    }
}
