<?php

use Illuminate\Database\Seeder;

class AdminClientRatingTypeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\AdminClientRatingType::create([ 'name' => 'A Top',  'system' => 1, 'active' => 1, ]);
        App\AdminClientRatingType::create([ 'name' => 'B Middle',  'system' => 1, 'active' => 1, ]);
        App\AdminClientRatingType::create([ 'name' => 'C Low',  'system' => 1, 'active' => 1, ]);
        App\AdminClientRatingType::create([ 'name' => 'F No Contact',  'system' => 1, 'active' => 1, ]);
        App\AdminClientRatingType::create([ 'name' => 'Web Lead (New)',  'system' => 1, 'active' => 1, ]);
    }
}
