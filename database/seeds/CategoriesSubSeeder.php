<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // レディース
        $categories = [
            'トップス', 'ジャケット/アウター', 'パンツ', 'スカート', 'ワンピース', '靴', 'バッグ',
            'アクセサリー', 'ヘアアクセサリー', '小物', '時計', 'ウィッグ/エクステ', '浴衣/水着',
            'スーツ/フォーマル/ドレス', 'マタニティ', 'その他'
        ];
        foreach ($categories as $category) {
            DB::table('sub_categories')->insert([
                'parent_id' => 1,
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // メンズ
        $categories = [
            'トップス', 'ジャケット/アウター', 'スーツ', '帽子', '靴', 'バッグ',
            'アクセサリー', '小物', '時計', 'ウィッグ/エクステ', '水着',
            'レッグウェア', 'アンダーウェア', 'その他'
        ];
        foreach ($categories as $category) {
            DB::table('sub_categories')->insert([
                'parent_id' => 2,
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // ベビー・キッズ
        $categories = [
            'ベビー服(女の子用) ~95cm', 'ベビー服(男の子用) ~95cm', 'ベビー服(男女兼用) ~95cm',
            'キッズ服(女の子用) 100cm~', 'キッズ服(男の子用) 100cm~', 'キッズ服(男女兼用) 100cm~',
            'キッズ靴', '子ども用ファッション小物',
            'おむつ/トイレ/バス', '外出/移動用品', '授乳/食事',
            'ベビー家具/寝具/室内用品', 'おもちゃ', '行事/記念品', 'その他'
        ];
        foreach ($categories as $category) {
            DB::table('sub_categories')->insert([
                'parent_id' => 3,
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // インテリア・住まい・小物
        $categories = [
            'キッチン/食器', 'ベッド/マットレス', 'ソファ/ソファベッド', '椅子/チェア', '机/テーブル', '収納家具',
            'ラグ/カーペット/マット', 'カーテン/ブラインド', 'ライト/照明', '寝具', 'インテリア小物', '季節/年中行事',
            'その他'
        ];
        foreach ($categories as $category) {
            DB::table('sub_categories')->insert([
                'parent_id' => 4,
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // 本・音楽・ゲーム
        $categories = [
            '本', '漫画', '雑誌', 'CD', 'DVD/ブルーレイ', 'レコード', 'テレビゲーム',
        ];
        foreach ($categories as $category) {
            DB::table('sub_categories')->insert([
                'parent_id' => 5,
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // おもちゃ・ホビー・グッズ
        $categories = [
            'おもちゃ', 'タレントグッズ', 'コミック/アニメグッズ', 'トレーディングカード', 'フィギュア',
            '楽器/器材', 'コレクション', 'ミリタリー', '美術品', 'アート用品', 'その他'
        ];
        foreach ($categories as $category) {
            DB::table('sub_categories')->insert([
                'parent_id' => 6,
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // コスメ・香水・美容
        $categories = [
            'ベースメイク', 'メイクアップ', 'ネイルケア', '香水', 'スキンケア/基礎化粧品', 'ヘアケア',
            'ボディケア', 'オーラルケア', 'リラクゼーション', 'ダイエット', 'その他'
        ];
        foreach ($categories as $category) {
            DB::table('sub_categories')->insert([
                'parent_id' => 7,
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // 家電・スマホ・カメラ
        $categories = [
            'スマートフォン/携帯電話', 'スマホアクセサリー', 'PC/タブレット', 'カメラ', 'テレビ/映像機器', 'オーディオ機器',
            '美容/健康', '美容/健康', '生活家電', 'その他'
        ];
        foreach ($categories as $category) {
            DB::table('sub_categories')->insert([
                'parent_id' => 8,
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // スポーツ・レジャー
        $categories = [
            'ゴルフ', 'フィッシング', '自転車', 'トレーニング/エクササイズ', '野球', 'サッカー/フットサル',
            'テニス', 'スノーボード', 'スキー', 'その他スポーツ', 'アウトドア', 'その他'
        ];
        foreach ($categories as $category) {
            DB::table('sub_categories')->insert([
                'parent_id' => 9,
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // ハンドメイド
        $categories = [
            'アクセサリー(女性用)', 'ファッション/小物', 'アクセサリー/時計', '日用品/インテリア',
            '趣味/おもちゃ', 'キッズ/ベビー', '素材/材料', '二次創作物', 'その他'
        ];
        foreach ($categories as $category) {
            DB::table('sub_categories')->insert([
                'parent_id' => 10,
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // チケット
        $categories = [
            '音楽', 'スポーツ', '演劇/芸能', '映画', '施設利用券', '優待券/割引券',
            'その他'
        ];
        foreach ($categories as $category) {
            DB::table('sub_categories')->insert([
                'parent_id' => 11,
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // 自動車・オートバイ
        $categories = [
            '自動車本体', '自動車タイヤ/ホイール', '自動車パーツ', '自動車アクセサリー', 'オートバイ車体',
            'オートバイパーツ', 'オートバイアクセサリー'
        ];
        foreach ($categories as $category) {
            DB::table('sub_categories')->insert([
                'parent_id' => 12,
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // その他
        $categories = [
            'まとめ売り', 'ペット用品', '食品', '飲料/酒', '日用品/生活雑貨/旅行', 'アンティーク/コレクション',
            '文房具/事務用品', '事務/店舗用品', 'その他'
        ];
        foreach ($categories as $category) {
            DB::table('sub_categories')->insert([
                'parent_id' => 13,
                'name' => $category,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
