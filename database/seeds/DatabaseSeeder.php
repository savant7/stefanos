<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'firstname' => 'James',
            'lastname' => 'Johnson',
            'email' => 'james@james.com',
            'password' => '$2y$10$.efq1Z1rRdn2AA56oTAXbeEHfX13ULSGZ1XgjbDfnKCSw239LIsOC',
        ]);
         $this->call(AdminBillingChgTypeTable::class);
         $this->call(AdminBillingPmtTypeTable::class);
         $this->call(AdminCampaignTypeTable::class);
         $this->call(AdminClientRatingTypeTable::class);
         $this->call(AdminClientTypeTable::class);
         $this->call(AdminCrmTypeTable::class);
         $this->call(AdminLeadTypeTable::class);
         $this->call(AdminTaskTypeTable::class);
         $this->call(ClientTable::class);
         $this->call(ContactTable::class);
         $this->call(LeadTable::class);
         $this->call(ProspectTable::class);
    }
}
