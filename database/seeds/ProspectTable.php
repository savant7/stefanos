<?php

use Illuminate\Database\Seeder;

class ProspectTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Prospect::create([
            'firstname1' => 'Josey',
            'lastname1' => 'David',
            'firstname2' => 'Joseph',
            'lastname1' => 'David',
            'address1' => '123 Nowhere Place',
            'address2' => 'Unit 2',
            'addresscity' => 'Cloud City',
            'addressprov' => 'universe',
            'addresspostal' => 'T6R 03J',
            'employername' => 'Universe Master Ltd.',
            'employertitle' => 'Chief Planner of the Universe',
            'employeraddress1' => '1234 Cloud Way',
            'employeraddress2' => 'Postal Box My Way',
            'employeraddresscity' => 'Cloud 9 City',
            'employeraddressprov' => 'Universe',
            'employeraddresspostal' => 'G4K 3J9',
            'employerphone' => '234.456.3211',
            'birthdate1' => '2020-01-01',
            'birthdate1' => '2020-01-01',
            'childname1' => 'Cumulous',
            'childname2' => 'Nimbus',
            'childname3' => 'Jay',
            'childname4' => 'Rovers',
            'childbirthdate1' => '2020-01-01',
            'childbirthdate2' => '2020-01-01',
            'childbirthdate3' => '2020-01-01',
            'childbirthdate4' => '2020-01-01',
            'admincrmtype_id' => 1,
            'adminclienttype_id' => 1,
            'adminclientratingtype_id' => 1,
            'adminleadtype_id' => 1,
            'customfield1' => '',
            'customfield2' => '',
            'active' => 1,
            'user_id' => 1,
        ]);
    }
}
