<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'Футболка',
                'type_item_id' => 1,
                'setting' =>'Ван Пис',
                'description' =>'',
                'season' =>'summer',
                'type' =>'object',
                'price' => 200,
            ],
            [
                'name' => 'Штаны',
                'type_item_id' => 1,
                'setting' =>'',
                'description' =>'',
                'season' =>'demi-season',
                'type' =>'object',
                'price' => 300,
            ],
            [
                'name' => 'ОЗУ',
                'type_item_id' => 2,
                'setting' =>'AMD',
                'description' =>'',
                'season' =>'off-season',
                'type' =>'component',
                'price' => 5000,
            ],
            [
                'name' => 'Флешка',
                'type_item_id' => 2,
                'setting' =>'',
                'description' =>'ADATA',
                'season' =>'off-season',
                'type' =>'object',
                'price' => 800,
            ],
            [
                'name' => 'Чоппер',
                'type_item_id' => 3,
                'setting' =>'Ван Пис',
                'description' =>'',
                'season' =>'off-season',
                'type' =>'object',
                'price' => 2500,
            ],
            [
                'name' => 'Немор',
                'type_item_id' => 3,
                'setting' =>'Marvel',
                'description' =>'',
                'season' =>'off-season',
                'type' =>'object',
                'price' => 100,
            ],
            [
                'name' => 'Велесова книга',
                'type_item_id' => 4,
                'setting' =>'русские',
                'description' =>'',
                'season' =>'off-season',
                'type' =>'object',
                'price' => 600,
            ],
            [
                'name' => 'Ведьмак',
                'type_item_id' => 4,
                'setting' =>'Анджей Сапковский',
                'description' =>'',
                'season' =>'off-season',
                'type' =>'object',
                'price' => 700,
            ],
            [
                'name' => 'Отвёртка',
                'type_item_id' => 5,
                'setting' =>'',
                'description' =>'',
                'season' =>'off-season',
                'type' =>'object',
                'price' => 50,
            ],
            [
                'name' => 'Молоток',
                'type_item_id' => 5,
                'setting' =>'',
                'description' =>'',
                'season' =>'off-season',
                'type' =>'object',
                'price' => 150,
            ]
        ]);
    }
}


