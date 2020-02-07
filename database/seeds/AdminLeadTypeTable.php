<?php

use Illuminate\Database\Seeder;

class AdminLeadTypeTable extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \App\AdminLeadType::create(['name' => 'Referral', 'system' => 1, 'active' => 1,]);
        \App\AdminLeadType::create(['name' => 'Client Referral', 'system' => 1, 'active' => 1,]);
        \App\AdminLeadType::create(['name' => 'Cold Call', 'system' => 1, 'active' => 1,]);
        \App\AdminLeadType::create(['name' => 'Engineer List', 'system' => 1, 'active' => 1,]);
        \App\AdminLeadType::create(['name' => 'Web Campaign (System)', 'system' => 1, 'active' => 1,]);
        \App\AdminLeadType::create(['name' => 'Newsletter Campaign', 'system' => 1, 'active' => 1,]);
        \App\AdminLeadType::create(['name' => 'Referral (Jennifer)', 'system' => 1, 'active' => 1,]);
        \App\AdminLeadType::create(['name' => 'Referral (Jones family)', 'system' => 1, 'active' => 1,]);
        \App\AdminLeadType::create(['name' => 'test non active', 'system' => 0, 'active' => 0,]);
    }

}
