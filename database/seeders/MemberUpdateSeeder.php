<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MemberUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            [
                "id"=> 68,
                "name"=> "Ohaegbuchi Uchechukwu Magnus",
                "ciltno"=> 206289,
                "membershipstatus"=> "CMILT",
                "email"=> "NA",
                "phone"=> "08037055177"
            ]
        ];

        foreach($members as $member)
        {
            $member['pin'] = random_int(1000, 9999);
            Member::create($member);


        }
    }
}
