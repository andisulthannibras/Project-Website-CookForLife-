<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Resep3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('resep_3')->insert([
        //     array(
        //         'image' => 'image/resep 3.png',
        //         'nama' => 'Langue de Boeuf',
        //         'pencipta' => 'by Alain Ducasse',
        //         'deskripsi' => 'Croissants are a quintessential French pastry that have become popular all over the world. They are made with layers of buttery, flaky dough that is rolled and folded to create a distinctive crescent shape.',
        //         'rating' => '150',
        //         'last_update' => 'Last updated 5 Maret 21',
        //     ),
        // ]);
    }
}