<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         App\Status::create([
            'id'    => 1,
            'title' => 'Shipped',
        ]);

          App\Status::create([
            'id'    => 2,
          'title' => 'In-Transition',
        ]);


        App\Status::create([
             'id'    => 3,
          'title' => 'Delivered',
        ]);
          App\Status::create([
           'id'    => 4,
        'title' => 'Returned',
        ]);

    }
}
