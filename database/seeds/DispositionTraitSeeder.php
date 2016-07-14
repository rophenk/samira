<?php

use Illuminate\Database\Seeder;

class DispositionTraitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data untuk table disposition_trait
        DB::table('disposition_trait')->insert([
        'trait' => 'Biasa',
        ]);

        DB::table('disposition_trait')->insert([
        'trait' => 'Segera',
        ]);

        DB::table('disposition_trait')->insert([
        'trait' => 'Sangat Segera',
        ]);

        DB::table('disposition_trait')->insert([
        'trait' => 'Rahasia',
        ]);

        DB::table('disposition_trait')->insert([
        'trait' => 'Sangat Rahasia',
        ]);

    }
}
