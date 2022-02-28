<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
        [
            'name' => 'Analgesik Narkotik',
            'description' => 'Ini adalah tabel analgesik narkotik',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert(
        [
            'name' => 'Analgesik Non Narkotik',
            'description' => 'Ini adalah tabel analgesik non narkotik',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
