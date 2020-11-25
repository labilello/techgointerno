<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Store::create(['name' => '001-Belgrano - Deprecada', 'address' => 'Av. Cabildo 3000, Ciudad De Buenos Aires', 'phones' => array()]);
        Store::create(['name' => '002-Unicenter Shopping', 'address' => 'Parana (80) 3745, Martinez', 'phones' => array()]);
        Store::create(['name' => '003-Belgrano', 'address' => 'Av. Cabildo 2075, Ciudad De Buenos Aires', 'phones' => array()]);
        Store::create(['name' => '005-Plaza Oeste Shopping', 'address' => 'Gob. Vergara 700, Castelar', 'phones' => array()]);
        Store::create(['name' => '007-Venta Corporativa', 'address' => 'Guevara 501, Ciudad De Buenos Aires', 'phones' => array()]);
        Store::create(['name' => '008-Las Palmas del Pilar Shopping', 'address' => 'Las Magnolias 754, Pilar', 'phones' => array()]);
        Store::create(['name' => '009-Barrio Norte', 'address' => 'Av. Santa Fe 2048, Ciudad De Buenos Aires', 'phones' => array()]);
        Store::create(['name' => '010-Palermo - Portal Shopping', 'address' => 'Av. Int. Bullrich 345, Ciudad De Buenos Aires', 'phones' => array()]);
        Store::create(['name' => '011-Lomas de Zamora - Portal Shopping', 'address' => 'Av. Ant. Argentina 799, Llavallol', 'phones' => array()]);
        Store::create(['name' => '012-Quilmes Factory', 'address' => 'Av. Calchaqui 3950, Quilmes', 'phones' => array()]);
        Store::create(['name' => '013-Escobar - Portal Shopping', 'address' => 'Av. D. F. Sarmiento 3200, Belen De Escobar', 'phones' => array()]);
        Store::create(['name' => '014-Almagro', 'address' => 'Guardia Vieja 4558, Ciudad De Buenos Aires', 'phones' => array()]);
        Store::create(['name' => '015-Microcentro', 'address' => 'Florida 386, Ciudad De Buenos Aires', 'phones' => array()]);
        Store::create(['name' => '016-Alto Avellaneda Shopping Mall', 'address' => 'Av. Gral. Guemes 897, Crucecita', 'phones' => array()]);
        Store::create(['name' => '018-Rosario - Portal Shopping', 'address' => 'Nansen 255, Rosario', 'phones' => array()]);
        Store::create(['name' => '019-Abasto Shopping', 'address' => 'Av. Corrientes 3247, Ciudad De Buenos Aires', 'phones' => array()]);
        Store::create(['name' => '020-Rosario - Alto Rosario Shopping', 'address' => 'Junín 351, Rosario', 'phones' => array()]);
        Store::create(['name' => '021-Centro de Distribucion - Tablada', 'address' => 'Av. Gral. San Martin 5797, La Tablada', 'phones' => array()]);
        Store::create(['name' => '022-San Martin Factory', 'address' => 'San Lorenzo (91) 3773, Villa General Las Heras', 'phones' => array()]);
        Store::create(['name' => '026-Flores', 'address' => 'Av. Rivadavia 6732, Ciudad De Buenos Aires', 'phones' => array()]);
        Store::create(['name' => '028-La Plata - Centro', 'address' => 'Calle 8 760, La Plata', 'phones' => array()]);
        Store::create(['name' => '029-Pinamar', 'address' => 'Av. Constitución 402, Pinamar', 'phones' => array()]);
        Store::create(['name' => '030-Tucuman - Portal Shopping', 'address' => 'Cariola 42, Villa Marcos Paz', 'phones' => array()]);
        Store::create(['name' => '033-San Miguel', 'address' => 'Av. Pte. Juan D. Peron 1401, San Miguel', 'phones' => array()]);
        Store::create(['name' => '034-Lomas de Zamora - Centro', 'address' => 'F. N. De Laprida 386, Lomas De Zamora', 'phones' => array()]);
        Store::create(['name' => '035-Caballito', 'address' => 'Av. Rivadavia 5247, Ciudad De Buenos Aires', 'phones' => array()]);
        Store::create(['name' => '037-Parque Brown Factory', 'address' => 'Av. Fernández De La Cruz 5000, Ciudad De Buenos Aires', 'phones' => array()]);
        Store::create(['name' => '039-Quilmes - Centro', 'address' => 'Rivadavia (13) 160, Quilmes', 'phones' => array()]);
        Store::create(['name' => '043-San Justo Shopping', 'address' => 'Av. Brig. Gral. Juan M. De Rosas 3910, San Justo', 'phones' => array()]);
        Store::create(['name' => '045-Venta Internet', 'address' => 'Estaban Echeverria (69) 3750, Munro', 'phones' => array()]);
        Store::create(['name' => '047-Trelew - Portal Shopping', 'address' => 'Av. Hipólito Yrigoyen 2701, Trelew', 'phones' => array()]);
        Store::create(['name' => '048-Neuquen - Portal Shopping', 'address' => 'Juan J. Lastra 2400, Neuquen', 'phones' => array()]);
        Store::create(['name' => '058-TechGo - Camacua', 'address' => 'Camacua 46, Ciudad De Buenos Aires', 'phones' => array()]);
    }
}
