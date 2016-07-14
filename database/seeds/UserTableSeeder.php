<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data untuk table users
        DB::table('users')->insert([
        'name' => 'Administrator',
        'email' => 'admin@tnde.com',
        'password' => bcrypt('rahasia'),
        'workUnitsID' => '14',
        'role_id' => '1',
        'avatar' => 'Administrator.jpg',
        'modules' => 'tnde,evicenter',
        'api_token' => str_random(60),
        ]);

        // Seed data untuk table users
        DB::table('users')->insert([
        'name' => 'Riki Rokhman Azis',
        'email' => 'riki@tnde.com',
        'password' => bcrypt('rahasia'),
        'workUnitsID' => '15',
        'role_id' => '5',
        'avatar' => 'Riki Rokhman Azis.jpg',
        'modules' => 'tnde,evicenter',
        'api_token' => str_random(60),
        ]);

        // Seed data untuk table users
        DB::table('users')->insert([
        'name' => 'Irfan Boniran',
        'email' => 'irfan@tnde.com',
        'password' => bcrypt('rahasia'),
        'workUnitsID' => '17',
        'role_id' => '3',
        'avatar' => 'Irfan Boniran.jpg',
        'modules' => 'tnde,evicenter',
        'api_token' => str_random(60),
        ]);

        // Seed data untuk table users
        DB::table('users')->insert([
        'name' => 'Ugi',
        'email' => 'ugi@tnde.com',
        'password' => bcrypt('rahasia'),
        'workUnitsID' => '22',
        'role_id' => '2',
        'modules' => 'tnde',
        'api_token' => str_random(60),
        ]);
    }
}
