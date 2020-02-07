<?php

use Illuminate\Database\Seeder;

class AdminBillingPmtTypeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\AdminBillingpmtType::create([ 'name' => 'Cheque',  'system' => 1, 'active' => 1, ]);
        App\AdminBillingpmtType::create([ 'name' => 'Other',  'system' => 1, 'active' => 1, ]);
        App\AdminBillingpmtType::create([ 'name' => 'Paypal',  'system' => 1, 'active' => 1, ]);
        App\AdminBillingpmtType::create([ 'name' => 'Interac',  'system' => 1, 'active' => 1, ]);
    }
}
