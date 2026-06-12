<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergeenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Allergeen')->insert([
            ['Naam' => 'Gluten', 'Omschrijving' => 'Granen die gluten bevatten zoals tarwe, rogge en gerst.'],
            ['Naam' => 'Schaaldieren', 'Omschrijving' => 'Kreeft, garnalen, krab en andere schaaldieren.'],
            ['Naam' => 'Eieren', 'Omschrijving' => 'Eieren van pluimvee.'],
            ['Naam' => 'Vis', 'Omschrijving' => 'Alle soorten vis.'],
            ['Naam' => 'Pinda\'s', 'Omschrijving' => 'Pinda\'s en producten op basis van pinda\'s.'],
            ['Naam' => 'Soja', 'Omschrijving' => 'Sojaproducten zoals tofu en sojamelk.'],
            ['Naam' => 'Melk', 'Omschrijving' => 'Zuivelproducten waaronder lactose.'],
            ['Naam' => 'Noten', 'Omschrijving' => 'Amandelen, hazelnoten, walnoten, cashewnoten, etc.'],
            ['Naam' => 'Selderij', 'Omschrijving' => 'Selderiestengels, -bladeren, -zaden en selderijwortel.'],
            ['Naam' => 'Mosterd', 'Omschrijving' => 'Mosterdzaad en mosterdblaadjes.'],
            ['Naam' => 'Sesamzaad', 'Omschrijving' => 'Sesamzaad en producten op basis van sesamzaad.'],
            ['Naam' => 'Sulfiet', 'Omschrijving' => 'Sulfiet en zwaveldioxide als conserveringsmiddel.'],
            ['Naam' => 'Lupine', 'Omschrijving' => 'Lupinezaad en lupinemeel.'],
            ['Naam' => 'Weekdieren', 'Omschrijving' => 'Mosselen, oesters, inktvis en andere weekdieren.'],
        ]);
    }
}
