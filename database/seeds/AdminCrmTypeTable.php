<?php

use Illuminate\Database\Seeder;

class AdminCrmTypeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\AdminCrmType::create([ 'name' => 'Client',  'system' => 1, 'active' => 1, ]);
        App\AdminCrmType::create([ 'name' => 'Prospect',  'system' => 1, 'active' => 1, ]);
        App\AdminCrmType::create([ 'name' => 'Web Lead',  'system' => 1, 'active' => 1, ]);
        App\AdminCrmType::create([ 'name' => 'Contact',  'system' => 1, 'active' => 1, ]);
    }
}
