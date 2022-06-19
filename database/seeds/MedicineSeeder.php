<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('medicines')->insert(
            ['name' => 'asam mefenamat',
             'form' => 'kaps 250 mg',
             'formula' =>'30 kaps/bulan.',
             'price' => 10000,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>1
        ]);
        DB::table('medicines')->insert(
            ['name' => 'asam mefenamat',
             'form' => 'tab 500 mg',
             'formula' =>'30 tab/bulan.',
             'price' => 12000,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>1
        ]);
        DB::table('medicines')->insert(
            ['name' => 'ibuprofen',
             'form' => 'tab 200 mg',
             'formula' =>'30 tab/bulan.',
             'price' => 8000,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>1
        ]);
        DB::table('medicines')->insert(
            ['name' => 'ibuprofen',
             'form' => 'tab 400 mg',
             'formula' =>'30 tab/bulan.',
             'price' => 9500,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>1
        ]);
        DB::table('medicines')->insert(
            ['name' => 'asam mefenamat',
             'form' => ' susp 100 mg/5 mL',
             'formula' =>'1 btl/kasus.',
             'price' => 15000,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>1
        ]);
        DB::table('medicines')->insert(
            ['name' => 'ketoprofen',
             'form' => ' inj 50 mg/mL',
             'formula' =>'',
             'price' => 22000,
             'description' =>'Untuk nyeri sedang sampai berat pada pasien yang tidak',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>1
        ]);
        DB::table('medicines')->insert(
            ['name' => 'ketoprofen',
             'form' => 'sup 100 mg',
             'formula' =>'2 sup/hari, maks 3 hari.',
             'price' => 25000,
             'description' =>'Untuk nyeri sedang sampai berat pada pasien yang tidak',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>1
        ]);

        //kategori 2
        DB::table('medicines')->insert(
            ['name' => 'alopurinol',
             'form' => 'tab 100 mg',
             'formula' =>'30tab/bulan',
             'price' => 17500,
             'description' =>'Tidak diberikan pada saat nyeri akut',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>2
        ]);
        DB::table('medicines')->insert(
            ['name' => 'alopurinol',
             'form' => 'tab 300 mg',
             'formula' =>'30tab/bulan',
             'price' => 17500,
             'description' =>'Tidak diberikan pada saat nyeri akut',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>2
        ]);
        DB::table('medicines')->insert(
            ['name' => 'kolkisin',
             'form' => 'tab 500 mcg',
             'formula' =>'30tab/bulan',
             'price' => 16500,
             'description' =>'Tidak diberikan pada saat nyeri akut',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>2
        ]);


        //kategori 3
        DB::table('medicines')->insert(
            ['name' => 'bupivakain',
             'form' => 'inj 0,5%',
             'formula' =>'',
             'price' => 12250,
             'description' =>'',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>3
        ]);
        DB::table('medicines')->insert(
            ['name' => 'lidokain',
             'form' => 'inj 0,5%',
             'formula' =>'',
             'price' => 12250,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>3
        ]);
        DB::table('medicines')->insert(
            ['name' => 'lidokain',
             'form' => 'spray topikal 10%',
             'formula' =>'',
             'price' => 12250,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>3
        ]);

        //kategori 4
        DB::table('medicines')->insert(
            ['name' => 'propranolol',
             'form' => 'tab 10 mg',
             'formula' =>'',
             'price' => 25250,
             'description' =>'',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>4
        ]);

        //kategori 5
        DB::table('medicines')->insert(
            ['name' => 'betahistin',
             'form' => 'tab 6 mg',
             'formula' =>'Untuk vertigo perifer:
                - BPPV: 1 minggu.
                - non BPPV: 30 
                tab/bulan',
             'price' => 25250,
             'description' =>'Hanya untuk sindrom 
             meniere atau vertigo perifer.  Untuk sindrom meniere atau
             vertigo non BPPV hanya di 
             Faskes Tk. 2 dan 3',
             'faskes1' => '1',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>5
        ]);

        DB::table('medicines')->insert(
            ['name' => 'betahistin',
             'form' => 'tab 24 mg',
             'formula' =>'90 tab/bulan.n',
             'price' => 35000,
             'description' =>'Hanya untuk sindrom 
             meniere atau vertigo perifer.  Untuk sindrom meniere atau
             vertigo non BPPV hanya di 
             Faskes Tk. 2 dan 3. Hanya untuk sindrom meniere',
             'faskes1' => '0',
             'faskes2' => '1',
             'faskes3' => '1',
             'category_id'=>5
        ]);
    }
}
