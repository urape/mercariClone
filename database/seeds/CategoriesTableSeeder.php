<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
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
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'parent_id' => NULL,
                'category_name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
