<?php

use Illuminate\Database\Seeder;

class DispositionInstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data untuk table disposition_trait
        DB::table('disposition_instruction')->insert([
        'instruction' => 'Buat Jawaban / Surat Edaran',
        ]);

        DB::table('disposition_instruction')->insert([
        'instruction' => 'Diketahui / diperhatikan',
        ]);

        DB::table('disposition_instruction')->insert([
        'instruction' => 'Diselesaikan sesuai disposisi',
        ]);

        DB::table('disposition_instruction')->insert([
        'instruction' => 'Harap Mewakili',
        ]);

        DB::table('disposition_instruction')->insert([
        'instruction' => 'Jadwalkan',
        ]);

        DB::table('disposition_instruction')->insert([
        'instruction' => 'Mendapat penyelesaian selanjutnya',
        ]);

        DB::table('disposition_instruction')->insert([
        'instruction' => 'Proses sesuai aturan',
        ]);

        DB::table('disposition_instruction')->insert([
        'instruction' => 'Saran pertimbangan / bicarakan',
        ]);
    }
}
