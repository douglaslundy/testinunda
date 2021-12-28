<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'firstName' => 'Client Test 1',
            'lastName' => 'Last Name Test1',
            'coments' => 'Coments 1'
        ]);

        DB::table('clients')->insert([
            'firstName' => 'Client Test 2',
            'lastName' => 'Last Name Test2',
            'coments' => 'Coments 2'
        ]);

        DB::table('clients')->insert([
            'firstName' => 'Client Test 3',
            'lastName' => 'Last Name Test3',
            'coments' => 'Coments 3'
        ]);
    }
}
