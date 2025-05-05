<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//import db file
use Illuminate\Support\Facades\DB;
//import str
use Illuminate\Support\Str;
use Carbon\Carbon; // to handle timestamps

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //inserting dummy data
        DB::table('test')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
