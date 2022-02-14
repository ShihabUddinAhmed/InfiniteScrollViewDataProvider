<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<=200; $i++)
        {
            DB::table('students')->insert([
                'FullName'=>Str::random(30),
                'Email'=>Str::random(20).'@gmail.com'
            ]);
        }
    }
}
