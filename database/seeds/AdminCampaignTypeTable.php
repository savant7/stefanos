<?php

use Illuminate\Database\Seeder;

class AdminCampaignTypeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\AdminCampaignType::create([ 'name' => 'Newsletter','campaignmode' => '1',   'system' => 1, 'active' => 1, ]);
        \App\AdminCampaignType::create([ 'name' => 'Touching Base','campaignmode' => '1',   'system' => 1, 'active' => 1, ]);
        \App\AdminCampaignType::create([ 'name' => 'Holiday Message','campaignmode' => '1',   'system' => 1, 'active' => 1, ]);
        \App\AdminCampaignType::create([ 'name' => 'Campaign (EBook Download Link)','campaignmode' => '2',   'system' => 1, 'active' => 1, ]);
        \App\AdminCampaignType::create([ 'name' => 'Campaign (Email 1)','campaignmode' => '2',   'system' => 1, 'active' => 1, ]);
        \App\AdminCampaignType::create([ 'name' => 'Campaign (Email 2)','campaignmode' => '2',   'system' => 1, 'active' => 1, ]);
        \App\AdminCampaignType::create([ 'name' => 'Campaign (Email 3)','campaignmode' => '2',   'system' => 1, 'active' => 1, ]);
        \App\AdminCampaignType::create([ 'name' => 'Campaign (Email 4)','campaignmode' => '2',   'system' => 1, 'active' => 1, ]);
        \App\AdminCampaignType::create([ 'name' => 'Referral Request','campaignmode' => '1',   'system' => 1, 'active' => 1, ]);
    }
}
