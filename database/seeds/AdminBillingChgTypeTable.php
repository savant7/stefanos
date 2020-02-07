<?php

use Illuminate\Database\Seeder;

class AdminBillingChgTypeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\AdminBillingChgType::create([ 'name' => 'Services', 'defaultchgamt' => '100', 'system' => 1, 'active' => 1, ]);
        App\AdminBillingChgType::create([ 'name' => 'Tax Filing (Individual)', 'defaultchgamt' => '75', 'system' => 1, 'active' => 1, ]);
        App\AdminBillingChgType::create([ 'name' => 'Tax Filing (Family)', 'defaultchgamt' => '125', 'system' => 1, 'active' => 1, ]);
        App\AdminBillingChgType::create([ 'name' => 'Tax Filing (Business)', 'defaultchgamt' => '650', 'system' => 1, 'active' => 1, ]);
        App\AdminBillingChgType::create([ 'name' => 'Tax Filing (Trust)', 'defaultchgamt' => '300', 'system' => 1, 'active' => 1, ]);
        App\AdminBillingChgType::create([ 'name' => 'Tax Preparation', 'defaultchgamt' => '650', 'system' => 1, 'active' => 1, ]);
        App\AdminBillingChgType::create([ 'name' => 'Corporation Package', 'defaultchgamt' => '950', 'system' => 1, 'active' => 1, ]);
        App\AdminBillingChgType::create([ 'name' => 'Corporation Annual Filing', 'defaultchgamt' => '200', 'system' => 1, 'active' => 1, ]);
    }
}
