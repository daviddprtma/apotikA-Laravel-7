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
        DB::table('medicines')->insert(array(
            array(
                'name' => 'amitriptilin',
                 'form' => 'tab 25 mg',
                 'formula' => '30 tab / bulan',
                 'description' => '',
                 'price' => 6000,
                 'faskes_1' => true,
                 'faskes_2' => true,
                 'faskes_3' => true,
                 'category_id' => 3
            ),
            array(
                 'name' => 'karbamazepin',
                 'form' => 'tab 100 mg',
                 'formula' => '60 tab / bulan',
                 'description' => 'Hanya untuk neuralgia trigeminal',
                 'price' => 8000,
                 'faskes_1' => true,
                 'faskes_2' => true,
                 'faskes_3' => true,
                 'category_id' => 3
            ),
            array(
                'name' => 'atropin',
                'form' => 'inj 0,25 mg/mL (i.v/s.k.)',
                'formula' => '',
                'description' => '',
                'price' => 12000,
                'faskes_1' => true,
                'faskes_2' => true,
                'faskes_3' => true,
                'category_id' => 4
           ),
           array(
            'name' => 'hidrokortison',
            'form' => 'inj 100 mg',
            'formula' => '',
            'description' => '',
            'price' => 10000,
            'faskes_1' => false,
            'faskes_2' => true,
            'faskes_3' => true,
            'category_id' => 4
           ),
        ));
    }
}
