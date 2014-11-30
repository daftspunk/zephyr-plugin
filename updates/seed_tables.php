<?php namespace Responsiv\Zephyr\Updates;

use October\Rain\Database\Updates\Seeder;
use Responsiv\Zephyr\Models\PostStatus;

class SeedTables extends Seeder
{

    public function run()
    {

        $data = [
            ['code' => 'draft', 'name' => 'Draft'],
            ['code' => 'pending', 'name' => 'Pending Approval'],
            ['code' => 'active', 'name' => 'Active'],
            ['code' => 'expired', 'name' => 'Expired'],
            ['code' => 'closed', 'name' => 'Closed'],
            ['code' => 'cancelled', 'name' => 'Cancelled'],
            ['code' => 'archived', 'name' => 'Archived']
        ];

        foreach ($data as $item) {
            PostStatus::create($item);
        }

    }

}
