<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class MedicineSeeder extends Seeder
{
    public function run()
    {
        DB::table('medicines')->insert(
        [
            'name' => 'Fentanil',
            'form' => 'inj 0,05 mg/mL (i.m./i.v.), patch 12,5 mcg/jam, patch 25 mcg/jam  ',
            'formula' => '5 amp/kasus, 10 patch/bulan, 10 patch/bulan.',
            'description' => 'inj: Hanya untuk nyeri berat dan
            harus diberikan oleh tim medis
            yang dapat melakukan
            resusitasi.
            patch:
            - Untuk nyeri kronik pada
            pasien kanker yang tidak
            terkendali.
            - Tidak untuk nyeri akut.',
            'faskes_1' => 'tidak',
            'faskes_2' => 'ya',
            'faskes_3' => 'ya',
            'price' => 0,
            'category_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('medicines')->insert(
            [
                'name' => 'hidromorfon',
                'form' => 'tab lepas lambat 8 mg, tab lepas lambat 16 mg',
                'formula' => '30 tab/bulan, 30 tab/bulan.',
                'description' => '',
                'faskes_1' => 'tidak',
                'faskes_2' => 'ya',
                'faskes_3' => 'ya',
                'price' => 0,
                'category_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        DB::table('medicines')->insert(
            [
                'name' => 'asam mefenamat',
                'form' => 'kaps 250 mg, tab 500 mg',
                'formula' => '30 kaps/bulan, 30 tab/bulan',
                'description' => '',
                'faskes_1' => 'ya',
                'faskes_2' => 'ya',
                'faskes_3' => 'ya',
                'price' => 0,
                'category_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        DB::table('medicines')->insert(
            [
                'name' => 'ibuprofen*',
                'form' => '. tab 200 mg, tab 400 mg, susp 100 mg/5 mL, susp 200 mg/5 mL',
                'formula' => '30 tab/bulan, 30 tab/bulan, 1 btl/kasus, 1 btl/kasus.',
                'description' => '',
                'faskes_1' => 'ya',
                'faskes_2' => 'ya',
                'faskes_3' => 'ya',
                'price' => 0,
                'category_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
    }
}
