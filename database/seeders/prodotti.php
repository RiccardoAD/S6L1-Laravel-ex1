<?php

namespace Database\Seeders;


use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class prodotti extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

         for ($i=0; $i <100 ; $i++) { 
        //     # code...
        DB::table('product')->insert([
            'titolo' => Str::random(2),
            'price' => rand(20,50),
            'img'=> Str::random(3)
        ]);
    }
    }
}
