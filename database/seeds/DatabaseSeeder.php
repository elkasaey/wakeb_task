<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Data::class, 2000)->create();
       // $this->call(dataTableSeeder::class);
    }
}
