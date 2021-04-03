<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Establishment;

class EstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estab = Establishment::create([
            'enabled' => 1,
            'category_id' => 1,
            'subcategory_id' => '2,3',
            'name' => 'Dentista prueba',
            'logo' => 'establishments/establishment_1.png',
            'stepping' => 15,
            'street' => 'Cirrus',
            'num_ext' => '402',
            'num_int' => '17',
            'zone' => 'Real Solare',
            'postal_code' => '76236',
            'city' => 'El marqués',
            'state' => 'Querétaro',
            'country' => 'México',
            'latitude' => '20.588416',
            'longitude' => '-100.275784',
            'email' => 'dentista@mail.com',
            'phone' => '1234567890',
            'holidays_extra' => '',
            'holidays_official' => 1,
            'help_tooltip' => 0,
        ]);
    }
}
