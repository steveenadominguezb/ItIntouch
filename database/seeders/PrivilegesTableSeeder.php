<?php

namespace Database\Seeders;

use App\Models\privilege;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivilegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $privilege1 = new privilege;
        $privilege1->IdPrivilege = 10001;
        $privilege1->Description = "Admin Privilege";
        $privilege1->save();
        
        $privilege2 = new privilege;
        $privilege2->IdPrivilege = 20001;
        $privilege2->Description = "None Privilege";
        $privilege2->save();

        $privilege3 = new privilege;
        $privilege3->IdPrivilege = 30001;
        $privilege3->Description = "IT Privilege";
        $privilege3->save();
    }
}
