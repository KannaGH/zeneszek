<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zeneszam;

class ZeneszamokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zeneszamok = [
            [
                "e_id" => "1",
                "cim" => "Egyszer véget ér",
                "hossz" => "265",
                "kiadasi_ev" => "1982"
            ],
            [
                "e_id" => "1",
                "cim" => "Most élsz",
                "hossz" => "255",
                "kiadasi_ev" => "1984" 
            ],
            [
                "e_id" => "2",
                "cim" => "Waiting for love",
                "hossz" => "231",
                "kiadasi_ev" => "2015"  
            ],
            [
                "e_id" => "2",
                "cim" => "Wake Me Up",
                "hossz" => "243",
                "kiadasi_ev" => "2013"  
            ],
            [
                "e_id" => "3",
                "cim" => "Mind1",
                "hossz" => "221",
                "kiadasi_ev" => "2022"  
            ],
            [
                "e_id" => "3",
                "cim" => "Rampappapam",
                "hossz" => "234",
                "kiadasi_ev" => "2023"  
            ]
        ];
        foreach($zeneszamok as $zeneszam){
			Zeneszam::create([
                'e_id' => $zeneszam['e_id'],
                'cim' => $zeneszam['cim'],
                'hossz' => $zeneszam['hossz'],
                'kiadasi_ev' => $zeneszam['kiadasi_ev']
			]);
            }
    }
}
