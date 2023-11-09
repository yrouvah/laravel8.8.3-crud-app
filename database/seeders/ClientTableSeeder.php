<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'gmail.com',
            'created_at' => date('Y-m-j'),
            'updated_at' => date('Y-m-j')
        ]);
    }
}
