<?php

use Illuminate\Database\Seeder;

class NoticesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Notice::class, 5)->create();
        factory(App\Event::class, 5)->create();

    }
}
