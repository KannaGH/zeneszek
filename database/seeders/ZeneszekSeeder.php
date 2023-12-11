<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zenesz;

class ZeneszekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zeneszek = [
            [
                "eredeti_nev" => "Máté Péter",
                "muvesz_nev" => "Máté Péter",
                "szuletesi_ido" => "1974-02-04"
            ],
            [
                "eredeti_nev" => "Tim Bergling",
                "muvesz_nev" => "Avicii",
                "szuletesi_ido" => "1989-04-20"  
            ],
            [
                "eredeti_nev" => "Baukó Attila",
                "muvesz_nev" => "Azahriah",
                "szuletesi_ido" => "2002-01-28"  
            ]
        ];

        foreach($zeneszek as $zenesz){
			Zenesz::create([
                'eredeti_nev' => $zenesz['eredeti_nev'],
                'muvesz_nev' => $zenesz['muvesz_nev'],
                'szuletesi_ido' => $zenesz['szuletesi_ido'],
			]);
            }
    }
}
