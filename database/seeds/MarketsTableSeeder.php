<?php

use Illuminate\Database\Seeder;

class MarketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Market::create([
            'market_name' => 'Pasar Karang Ayu Semarang',
            'market_slug' => 'pasar_karang_ayu_semarang',
            'market_icon' => 'market.png',
            'market_country' => 'Indonesia',
            'market_province' => 'Jawa Tengah',
            'market_regency' => 'Semarang',
            'market_district' => 'Karang Ayu',
            'market_location' => 'Jl. Pasar Karang Ayu, Karangayu, Semarang Barat. Kota Semarang, Jawa Tengah 50149, Indonesia',
            'market_latitude' => -6.9813432,
            'market_longitude' => 110.39497690000007,

        ]);
    }
}
