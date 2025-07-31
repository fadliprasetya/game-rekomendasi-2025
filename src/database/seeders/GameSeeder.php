<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GameSeeder extends Seeder
{
    public function run()
    {
        DB::table('games')->insert([
            ['nama' => 'The Witcher 3', 'genre' => 'RPG', 'tahun_rilis' => 2015],
            ['nama' => 'Valorant', 'genre' => 'FPS', 'tahun_rilis' => 2020],
            ['nama' => 'Minecraft', 'genre' => 'Sandbox', 'tahun_rilis' => 2011],
        ]);
    }
}
