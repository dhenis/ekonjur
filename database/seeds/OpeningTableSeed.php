<?php

use Illuminate\Database\Seeder;

class OpeningTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Opening::class, 5)->create();

        //
          // $this->call(UsersTableSeeder::class);

    }
}
