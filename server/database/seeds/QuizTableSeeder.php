<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {         // 一件だけinsertする
        DB::table('quizzes')->insert([
            'title' => '｢鬼滅の刃｣でイノシシの被り物を被っている人物の正体は？',
            'q1' => '善逸',
            'q2' => '伊之助',
            'q3' => '炭治郎',
            'q4' => '義勇',
            'pic1' => 'zenitu.png',
            'pic2' => 'inosuke.jpg',
            'pic3' => 'tanjiro.jpg',
            'pic4' => 'giyuu.jpg',
        ]);
        # paramに配列を代入
        $param = [
            [
                'title' => '｢ポケットモンスター｣主人公サトシの相棒のポケモンは？',
                'q1' => 'ゼニガメ',
                'q2' => 'ヘラクロス',
                'q3' => 'リザードン',
                'q4' => 'ピカチュウ',
                'pic1' => 'zenigame.png',
                'pic2' => 'herakurosu.png',
                'pic3' => 'riza.png',
                'pic4' => 'pikatyu.png',
            ],
            [
                'title' => '｢ドラゴンボール:セル編｣において最終局面で悟飯をアシストした戦士は？',
                'q1' => 'ベジータ',
                'q2' => 'ピッコロ',
                'q3' => '悟空',
                'q4' => 'トランクス',
                'pic1' => 'bezita.jpg',
                'pic2' => 'pikkoro.png',
                'pic3' => 'gokuu.jpg',
                'pic4' => 'trunks.jpg',
            ]
        ];
        # DB::table->insertでレコードの登録
        DB::table('quizzes')->insert($param);
    }
}
