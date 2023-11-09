<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntrepriseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entreprises')->insert([
            'name' => Str::random(10),
            'created_at' => date('Y-m-j'),
            'updated_at' => date('Y-m-j')
        ]);
    }
}
