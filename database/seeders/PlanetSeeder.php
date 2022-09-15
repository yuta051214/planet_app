<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// 一件だけinsertする
        DB::table('planets')->insert([
            'name' => '水星',
            'name_en' => 'MERCURY',
            'radius' => '2439',
            'weight' => '3310',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        # paramに配列を代入
        $param = [
            [
                'name' => '金星',
                'name_en' => 'VENUS',
                'radius' => '6052',
                'weight' => '48700',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '地球',
                'name_en' => 'EARTH',
                'radius' => '6378',
                'weight' => '59760',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        # DB::table->insertでレコードの登録
        DB::table('planets')->insert($param);

    }
}
