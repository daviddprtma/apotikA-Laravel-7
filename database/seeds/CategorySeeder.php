<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories') -> insert([
            'category_name' => 'ANALGESIK NARKOTIK',
        ]);

        
        DB::table('categories') -> insert([
            'category_name' => 'ANALGESIK NON NARKOTIK',
        ]);

        DB::table('categories') -> insert([
            'category_name' => 'NYERI NEUROPATIK',
        ]);

        DB::table('categories') -> insert([
            'category_name' => 'ANESTETIk',
        ]);
    }
}
