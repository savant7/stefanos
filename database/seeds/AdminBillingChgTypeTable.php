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
        DB::table('adminbillingchgtype')->insert([
            //'id' => '',
            'name' => 'hello',
            'defaultchgamt' => '@gmail.com',
            'system' => 1,
            'active' => 1,
        ]);
    }
}
