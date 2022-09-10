<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offices = array("chairman", "vice chairman", "branch secretary", 'assistant branch secretary',
        "treasurer", "financial secretary", "pro", "welfare officer", 'wilat rep', 'next generation rep',
        'aviation mode rep', 'maritime mode rep', 'rail mode rep', 'pipeline mode rep', 'logistics mode rep');

        foreach ($offices as $office) {
            DB::table('offices')->insert([
                'name' => $office,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
