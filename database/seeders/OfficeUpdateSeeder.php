<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OfficeUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offices = array('road mode rep');

        foreach ($offices as $office) {
            DB::table('offices')->insert([
                'name' => $office,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
