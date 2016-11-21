<?php

use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('template')->truncate();
        DB::table('template')->insert([
            'id'            => 1,
            'uuid'			=> '7fc142ec-c18c-40f4-b8d5-edee3e737994',
            'name'          => 'FORMAT PENGUMUMAN',
            'file_url'   	=> 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT BERITA ACARA.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 2,
            'uuid'          => 'a1377ab4-491a-4c65-993a-0529d0c9b0e8',
            'name'          => 'FORMAT INSTRUKSI PEJABAT NEGARA',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT INSTRUKSI PEJABAT NEGARA.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 3,
            'uuid'          => '61f14ce2-ce64-4186-a4ec-1f08082c5bb1',
            'name'          => 'FORMAT KARTU UNDANGAN',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT KARTU UNDANGAN.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 4,
            'uuid'          => 'd28a5a0b-379d-4d2b-abbe-fd1d663e5581',
            'name'          => 'FORMAT LAMPIRAN SURAT UNDANGAN',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT LAMPIRAN SURAT UNDANGAN.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 5,
            'uuid'          => '051b15b3-722c-4e0e-a5e8-5b961511638b',
            'name'          => 'FORMAT LAPORAN',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT LAPORAN.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 6,
            'uuid'          => '38aff4c6-bd5a-41b5-8335-64f90b00c8a7',
            'name'          => 'FORMAT MEMORANDUM NON PEJABAT NEGARA',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT MEMORANDUM NON PEJABAT NEGARA.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 7,
            'uuid'          => '5711b531-9664-4a36-a0ed-49bdfcd9b2b8',
            'name'          => 'FORMAT MEMORANDUM PEJABAT NEGARA',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT MEMORANDUM PEJABAT NEGARA.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 8,
            'uuid'          => 'b11df6e4-5a9d-4192-bcaa-f2169ff22c30',
            'name'          => 'FORMAT NOTA DINAS',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT NOTA DINAS.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 9,
            'uuid'          => 'a8e699cf-68dd-407e-a6f5-b0d693b8f4cf',
            'name'          => 'FORMAT PENGUMUMAN',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT PENGUMUMAN.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 10,
            'uuid'          => 'f105e9c8-9daf-43cc-b611-121aac983390',
            'name'          => 'FORMAT SURAT DINAS NON PEJABAT NEGARA',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT SURAT DINAS NON PEJABAT NEGARA.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 11,
            'uuid'          => '65fb8adc-d22f-4a0a-80c5-2342e34d918d',
            'name'          => 'FORMAT SURAT DINAS PEJABAT NEGARA',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT SURAT DINAS PEJABAT NEGARA.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 12,
            'uuid'          => 'f090e4f8-a1fa-4c51-9832-9e62cb8c85ae',
            'name'          => 'FORMAT SURAT EDARAN NON PEJABAT NEGARA',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT SURAT EDARAN NON PEJABAT NEGARA.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 13,
            'uuid'          => 'a79ff551-268e-4cbc-8fe0-c5aff9f21b67',
            'name'          => 'FORMAT SURAT EDARAN PEJABAT NEGARA',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT SURAT EDARAN PEJABAT NEGARA.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 14,
            'uuid'          => 'df7c8657-829b-4899-ab65-370626f1c370',
            'name'          => 'FORMAT SURAT KETERANGAN',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT SURAT KETERANGAN.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 15,
            'uuid'          => '8980d6a1-765f-4f93-9cf9-652a2a0bb231',
            'name'          => 'FORMAT SURAT KUASA',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT SURAT KUASA.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 16,
            'uuid'          => '719e604d-1e6f-4a03-b3a4-d6f9da0c2734',
            'name'          => 'FORMAT SURAT PENGANTAR',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT SURAT PENGANTAR.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 17,
            'uuid'          => '1e535193-3760-44d6-8c0c-7cd952c99938',
            'name'          => 'FORMAT SURAT PERINTAH NON PEJABAT NEGARA',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT SURAT PERINTAH NON PEJABAT NEGARA.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 18,
            'uuid'          => 'd21f43ad-d520-4216-b96b-2642f1287ca1',
            'name'          => 'FORMAT SURAT PERINTAH PEJABAT NEGARA',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT SURAT PERINTAH PEJABAT NEGARA.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 19,
            'uuid'          => 'b8aef5f5-773b-445b-b06d-b0b13b500afd',
            'name'          => 'FORMAT SURAT TUGAS',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT SURAT TUGAS.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 20,
            'uuid'          => '5e1bc67b-df8b-4947-b791-eadb4bf3b071',
            'name'          => 'FORMAT SURAT UNDANGAN NON PEJABAT NEGARA',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT SURAT UNDANGAN NON PEJABAT NEGARA.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 21,
            'uuid'          => 'd0d7fdce-4ffa-4f1c-81b2-2e4844d52ffc',
            'name'          => 'FORMAT SURAT UNDANGAN PEJABAT NEGARA',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT SURAT UNDANGAN PEJABAT NEGARA.doc'
        ]);

        DB::table('template')->insert([
            'id'            => 22,
            'uuid'          => 'c39fa106-eac2-4bd7-816f-d354e10dee76',
            'name'          => 'FORMAT TELAAHAN STAF',
            'file_url'      => 'http://tandem.setjen.pertanian.go.id/tnde/template/FORMAT TELAAHAN STAF.doc'
        ]);

    }
}
