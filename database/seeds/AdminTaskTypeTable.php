<?php

use Illuminate\Database\Seeder;

class AdminTaskTypeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\AdminTaskType::create([ 'name' => 'Phone',  'system' => 1, 'active' => 1, ]);
        \App\AdminTaskType::create([ 'name' => 'Text',  'system' => 1, 'active' => 1, ]);
        \App\AdminTaskType::create([ 'name' => 'Email',  'system' => 1, 'active' => 1, ]);
        \App\AdminTaskType::create([ 'name' => 'Mail',  'system' => 1, 'active' => 1, ]);
        \App\AdminTaskType::create([ 'name' => 'Newsletter',  'system' => 1, 'active' => 1, ]);
        \App\AdminTaskType::create([ 'name' => 'Note',  'system' => 1, 'active' => 1, ]);
    }
}
