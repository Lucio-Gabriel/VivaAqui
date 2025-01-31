<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HousesSeeder extends Seeder
{
    public function run(): void
    {
        // Command => php artisan db:seed --class=HousesSeeder

        DB::table('houses')->insert([
            [
                'title' => 'Casa Moderna no Centro',
                'city' => 'São Paulo-SP',
                'price' => 4500,
                'email' => 'vendas@imobiliaria.com',
                'description' => 'Linda casa moderna, recém-reformada, localizada no centro da cidade.'
            ],
            [
                'title' => 'Apartamento com Vista para o Mar',
                'city' => 'Rio de Janeiro',
                'price' => 7500,
                'email' => 'contato@apartamentoluxo.com',
                'description' => 'Apartamento de luxo com varanda e vista privilegiada para o mar.'
            ],
            [
                'title' => 'Sítio Tranquilo no Interior',
                'city' => 'Minas Gerais',
                'price' => 3200,
                'email' => 'fazendas@rurais.com',
                'description' => 'Sítio espaçoso, ideal para descanso e lazer, cercado pela natureza.'
            ],
        ]);
    }
}
