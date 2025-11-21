<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_items')->insert([
            ['name' => 'Одежда'],
            ['name' => 'Электроника'],
            ['name' => 'Фигурки'],
            ['name' => 'Книги'],
            ['name' => 'Инструменты']
        ]);
    }
}
