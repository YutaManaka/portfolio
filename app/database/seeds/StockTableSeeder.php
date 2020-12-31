<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('stocks')->truncate(); //2回目実行の際にシーダー情報をクリア
    	DB::table('stocks')->insert([
        	'name' => 'ランバン エクラドゥアルページュ',
            'detail' => '定番の男ウケ･モテ香水として人気の香水',
            'fee' => 3780,
            'imgpath' => 'arpage.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ランバン ジャンヌ',
            'detail' => '女性らしい甘さが特徴の香水',
            'fee' => 3300,
            'imgpath' => 'jeanne.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'D&Gライトブルー',
            'detail' => 'ドルガバの超人気香水!',
            'fee' => 2990,
            'imgpath' => 'lightblue.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'D&Gライトブルー イタリアンゼスト',
            'detail' => 'ライトブルーをより爽やかなにアレンジ',
            'fee' => 3480,
            'imgpath' => 'lightbluezest.jpg',
        ]);


        DB::table('stocks')->insert([
            'name' => 'カルバンクライン エタニティ',
            'detail' => 'カルバンクラインを代表する女性用香水。',
            'fee' => 3500,
            'imgpath' => 'eternity.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'プラダ キャンディ',
            'detail' => 'バニラ系の代表的な香水。',
            'fee' => 4800,
            'imgpath' => 'candy.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ギルティ バイ グッチ',
            'detail' => 'グッチを代表する人気香水。',
            'fee' => 4800,
            'imgpath' => 'guilty.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'グッチ ブルーム',
            'detail' => '香水の王道、フローラル系の香り。',
            'fee' => 5200,
            'imgpath' => 'bloom.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'グッチ ラッシュ2',
            'detail' => '既存の香水の概念を覆した歴史的な香水。',
            'fee' => 3200,
            'imgpath' => 'rush2.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'エルメス 屋根の上の庭',
            'detail' => '爽やかな香りが特徴の香水。',
            'fee' => 5200,
            'imgpath' => 'hermes1.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'エルメス ラグーナの庭',
            'detail' => '「庭シリーズ」の最新作の香水。',
            'fee' => 5200,
            'imgpath' => 'hermes2.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ティファニー オードパルファム',
            'detail' => '初心者におすすめの香水。',
            'fee' => 6600,
            'imgpath' => 'tiffany.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'サムライウーマン',
            'detail' => 'サムライブランドの女性用香水。',
            'fee' => 3600,
            'imgpath' => 'samourai.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ライオンハート',
            'detail' => '恋する女性におすすめのフルーティー系の香り。',
            'fee' => 2200,
            'imgpath' => 'lion.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ローズドクロエ',
            'detail' => '大人気のクロエの香りを大人っぽくアレンジ。',
            'fee' => 4200,
            'imgpath' => 'rosecloe.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'フィアンセ',
            'detail' => '万人ウケする香りが特徴の石鹸系香水。',
            'fee' => 980,
            'imgpath' => 'fiance.jpg',
        ]);
        //
    }
}
