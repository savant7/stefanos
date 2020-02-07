<?php

use Illuminate\Database\Seeder;

class AdminClientTypeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\AdminClientType::create([ 'name' => 'Investment',  'system' => 1, 'active' => 1, ]);
        App\AdminClientType::create([ 'name' => 'Insurance',  'system' => 1, 'active' => 1, ]);
        App\AdminClientType::create([ 'name' => 'Accounting',  'system' => 1, 'active' => 1, ]);
        App\AdminClientType::create([ 'name' => 'Tax Filing',  'system' => 1, 'active' => 1, ]);
        App\AdminClientType::create([ 'name' => 'Consulting',  'system' => 1, 'active' => 1, ]);
        App\AdminClientType::create([ 'name' => 'Planning',  'system' => 1, 'active' => 1, ]);
    }
}
