<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'レディース', 'メンズ', 'ベビー・キッズ', 'インテリア・住まい・小物', '本・音楽・ゲーム',
            'おもちゃ・ホビー・グッズ', 'コスメ・香水・美容', '家電・スマホ・カメラ', 'スポーツ・レジャー',
            'ハンドメイド', 'チケット', '自動車・オートバイ', 'その他'
        ];
        $id = 1;
        foreach ($categories as $category) {
            $i = 1;
            while ($i <= 15) {
                DB::table('items')->insert([
                    'name' => $category . ' sample' . $i,
                    'explanation' =>  $category . ' sample' . $i . "です",
                    'price' => $i * 1000,
                    'user_id' => 1,
                    'status_id' => 1,
                    'category_id' => $id,
                    'delivery_id' => 1,
                    'area_id' => 1,
                    'duration_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                $i++;
            }
            $id++;
        }
    }
}
