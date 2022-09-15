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
                "id"=> 66,
                "name"=> "Affiah Maureen Afoma",
                "ciltno"=> 203452,
                "membershipstatus"=> "CMILT",
                "email"=> "manwabueze@yahoo.com"
            ],
            [
                "id"=> 67,
                "name"=> "Dr. Ohaegbuchi Uchechukwu Magnus",
                "ciltno"=> "NA",
                "membershipstatus"=> "NA",
                "email"=> "uchenery@gmail.com"
            ]
        ];

        foreach($members as $member)
        {
            $member['pin'] = random_int(1000, 9999);
            Member::create($member);


        }
    }
}
