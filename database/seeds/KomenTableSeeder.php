<?php

use Illuminate\Database\Seeder;

class KomenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Komen::class, 5)->create();;
    }
}
