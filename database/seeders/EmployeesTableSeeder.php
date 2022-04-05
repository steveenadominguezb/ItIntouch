<?php

namespace Database\Seeders;

use App\Models\employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee1 = new employee;
        $employee1->CDE = "C220631";
        $employee1->Name = "Steveen Dominguez";
        $employee1->Position = "IT Generalist";
        $employee1->UserName = "steveen.dominguez";
        $employee1->Password = "!ntouch24-7";
        $employee1->setPassword('!ntouch24-7');
        $employee1->Email = "steveen.dominguez@24-7intouch.com";
        $employee1->ContactInfo = "3224660181";
        $employee1->Status = "Active";
        $employee1->IdPrivilege = 30001;
        $employee1->save();

        $employee2 = new employee;
        $employee2->CDE = "C000001";
        $employee2->Name = "Administrator";
        $employee2->Position = "IT Generalist";
        $employee2->UserName = "admin.intouch";
        $employee2->Password = "Admin.!ntouch24-7";
        $employee2->setPassword('Admin.!ntouch24-7');
        $employee2->Email = "adminIT@24-7intouch.com";
        $employee2->ContactInfo = "3000000001";
        $employee2->Status = "Active";
        $employee2->IdPrivilege = 10001;
        $employee2->save();


        $employee3 = new employee;
        $employee3->CDE = "C000002";
        $employee3->Name = "Dumy";
        $employee3->Position = "IT Generalist";
        $employee3->UserName = "dumy.intouch";
        $employee3->Password = "Dumy.!ntouch24-7";
        $employee3->setPassword('Dumy.!ntouch24-7');
        $employee3->Email = "dumyIT@24-7intouch.com";
        $employee3->ContactInfo = "3000000002";
        $employee3->Status = "Active";
        $employee3->IdPrivilege = 20001;
        $employee3->save();

    }
}
