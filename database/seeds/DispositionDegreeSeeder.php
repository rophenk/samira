<?php

use Illuminate\Database\Seeder;

class DispositionDegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disposition_degree')->insert([
        'degree' => 'Segera',
        ]);

        DB::table('disposition_degree')->insert([
        'degree' => 'Sangat Segera',
        ]);

        DB::table('disposition_degree')->insert([
        'degree' => 'Kilat',
        ]);
    }
}
