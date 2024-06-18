<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'title' => '君の名は。',
                'description' => '2人の高校生が、夢の中でお互いの体が入れ替わる不思議な現象を体験する。',
                'director' => '新海誠',
                'release_date' => '2016-08-26',
                'image' => 'https://via.placeholder.com/150?text=君の名は。',
            ],
            [
                'title' => '千と千尋の神隠し',
                'description' => '10歳の少女が神秘的な世界で迷子になり、両親を救うために冒険する。',
                'director' => '宮崎駿',
                'release_date' => '2001-07-20',
                'image' => 'https://via.placeholder.com/150?text=千と千尋の神隠し',
            ],
            [
                'title' => 'ハウルの動く城',
                'description' => '若い女性が呪いをかけられ、老人に変えられた後、不思議な動く城に住む魔法使いと出会う。',
                'director' => '宮崎駿',
                'release_date' => '2004-11-20',
                'image' => 'https://via.placeholder.com/150?text=ハウルの動く城',
            ],
            [
                'title' => 'おおかみこどもの雨と雪',
                'description' => '狼男と人間の女性の間に生まれた2人の子供が、人間社会と狼としての生活の間で成長する姿を描く。',
                'director' => '細田守',
                'release_date' => '2012-07-21',
                'image' => 'https://via.placeholder.com/150?text=おおかみこどもの雨と雪',
            ],
            [
                'title' => 'もののけ姫',
                'description' => '中世日本を舞台にした、自然の力と人間の欲望の衝突を描いた物語。',
                'director' => '宮崎駿',
                'release_date' => '1997-07-12',
                'image' => 'https://via.placeholder.com/150?text=もののけ姫',
            ],
            [
                'title' => '天空の城ラピュタ',
                'description' => '不思議な力を持つ少女と少年が、伝説の浮遊都市ラピュタを目指す冒険を繰り広げる。',
                'director' => '宮崎駿',
                'release_date' => '1986-08-02',
                'image' => 'https://via.placeholder.com/150?text=天空の城ラピュタ',
            ],
            [
                'title' => '風の谷のナウシカ',
                'description' => '未来の地球を舞台に、人類と自然との共生を模索する少女の物語。',
                'director' => '宮崎駿',
                'release_date' => '1984-03-11',
                'image' => 'https://via.placeholder.com/150?text=風の谷のナウシカ',
            ],
            [
                'title' => '崖の上のポニョ',
                'description' => '人間になりたいと願う魚の女の子と、彼女を助ける少年の物語。',
                'director' => '宮崎駿',
                'release_date' => '2008-07-19',
                'image' => 'https://via.placeholder.com/150?text=崖の上のポニョ',
            ],
            [
                'title' => '言の葉の庭',
                'description' => '雨の日に庭園で出会う若い靴職人と年上の女性の心の交流を描く。',
                'director' => '新海誠',
                'release_date' => '2013-05-31',
                'image' => 'https://via.placeholder.com/150?text=言の葉の庭',
            ],
            [
                'title' => 'この世界の片隅に',
                'description' => '第二次世界大戦中の広島を舞台に、普通の女性の生活と戦争の影響を描く。',
                'director' => '片渕須直',
                'release_date' => '2016-11-12',
                'image' => 'https://via.placeholder.com/150?text=この世界の片隅に',
            ],
            [
                'title' => '耳をすませば',
                'description' => '読書好きの少女が、一冊の本をきっかけに少年と出会い、夢を追いかける物語。',
                'director' => '近藤喜文',
                'release_date' => '1995-07-15',
                'image' => 'https://via.placeholder.com/150?text=耳をすませば',
            ],
            [
                'title' => '借りぐらしのアリエッティ',
                'description' => '小人族の少女と人間の少年の友情と冒険を描いた物語。',
                'director' => '米林宏昌',
                'release_date' => '2010-07-17',
                'image' => 'https://via.placeholder.com/150?text=借りぐらしのアリエッティ',
            ],
            [
                'title' => 'かぐや姫の物語',
                'description' => '竹取物語をもとに、月から来たかぐや姫の成長と帰還を描く。',
                'director' => '高畑勲',
                'release_date' => '2013-11-23',
                'image' => 'https://via.placeholder.com/150?text=かぐや姫の物語',
            ],
            [
                'title' => 'メアリと魔女の花',
                'description' => '魔法の力を手に入れた少女が魔法学校で冒険を繰り広げる。',
                'director' => '米林宏昌',
                'release_date' => '2017-07-08',
                'image' => 'https://via.placeholder.com/150?text=メアリと魔女の花',
            ],
            [
                'title' => '未来のミライ',
                'description' => '新しい妹に嫉妬する少年が、未来の自分や妹と出会い成長していく物語。',
                'director' => '細田守',
                'release_date' => '2018-07-20',
                'image' => 'https://via.placeholder.com/150?text=未来のミライ',
            ],
            [
                'title' => 'アーヤと魔女',
                'description' => '孤児院で育った少女が魔女の家で不思議な体験をする物語。',
                'director' => '宮崎吾朗',
                'release_date' => '2020-12-30',
                'image' => 'https://via.placeholder.com/150?text=アーヤと魔女',
            ],
            [
                'title' => 'マイ・インターン',
                'description' => '引退後も働く意欲に満ちた老人が、若い女性社長の会社でインターンとして働く。',
                'director' => 'ナンシー・マイヤーズ',
                'release_date' => '2015-09-25',
                'image' => 'https://via.placeholder.com/150?text=マイ・インターン',
            ],
            [
                'title' => '天気の子',
                'description' => '天候を操る力を持つ少女と、彼女を救おうとする少年の物語。',
                'director' => '新海誠',
                'release_date' => '2019-07-19',
                'image' => 'https://via.placeholder.com/150?text=天気の子',
            ],
            [
                'title' => 'パプリカ',
                'description' => '夢と現実が交錯する世界で、夢の中に入り込む能力を持つ女性が活躍する物語。',
                'director' => '今敏',
                'release_date' => '2006-11-25',
                'image' => 'https://via.placeholder.com/150?text=パプリカ',
            ],
            [
                'title' => 'リトルフォレスト 夏・秋',
                'description' => '自給自足の生活を送る女性の四季折々の生活を描いた作品。',
                'director' => '森淳一',
                'release_date' => '2014-08-30',
                'image' => 'https://via.placeholder.com/150?text=リトルフォレスト 夏・秋',
            ],
            [
                'title' => 'リトルフォレスト 冬・春',
                'description' => '自給自足の生活を送る女性の四季折々の生活を描いた続編。',
                'director' => '森淳一',
                'release_date' => '2015-02-14',
                'image' => 'https://via.placeholder.com/150?text=リトルフォレスト 冬・春',
            ],
            [
                'title' => 'アニメ ちびまる子ちゃん',
                'description' => '小学生の少女が日常生活で経験するさまざまな出来事を描く。',
                'director' => 'さくらももこ',
                'release_date' => '1990-01-07',
                'image' => 'https://via.placeholder.com/150?text=ちびまる子ちゃん',
            ],
            [
                'title' => 'ぼくの名前はズッキーニ',
                'description' => '親を失った少年が孤児院で新しい友達と出会い、成長していく物語。',
                'director' => 'クロード・バラス',
                'release_date' => '2016-10-19',
                'image' => 'https://via.placeholder.com/150?text=ぼくの名前はズッキーニ',
            ],
            [
                'title' => 'アナと雪の女王',
                'description' => '魔法の力を持つ姉妹が、王国を救うために冒険する物語。',
                'director' => 'クリス・バック、ジェニファー・リー',
                'release_date' => '2013-11-27',
                'image' => 'https://via.placeholder.com/150?text=アナと雪の女王',
            ],
            [
                'title' => 'リメンバー・ミー',
                'description' => '死者の世界に迷い込んだ少年が、家族の秘密を解き明かす物語。',
                'director' => 'リー・アンクリッチ',
                'release_date' => '2017-10-27',
                'image' => 'https://via.placeholder.com/150?text=リメンバー・ミー',
            ],
            [
                'title' => 'ボス・ベイビー',
                'description' => '赤ちゃんの姿をしたビジネスマンが家族の絆を取り戻すために奮闘する。',
                'director' => 'トム・マクグラス',
                'release_date' => '2017-03-31',
                'image' => 'https://via.placeholder.com/150?text=ボス・ベイビー',
            ],
            [
                'title' => 'ファインディング・ニモ',
                'description' => '行方不明になった息子を探すため、父親が海を冒険する物語。',
                'director' => 'アンドリュー・スタントン',
                'release_date' => '2003-05-30',
                'image' => 'https://via.placeholder.com/150?text=ファインディング・ニモ',
            ],
            [
                'title' => 'モアナと伝説の海',
                'description' => '南太平洋の島々を舞台に、勇敢な少女が冒険を繰り広げる物語。',
                'director' => 'ロン・クレメンツ、ジョン・マスカー',
                'release_date' => '2016-11-23',
                'image' => 'https://via.placeholder.com/150?text=モアナと伝説の海',
            ],
            [
                'title' => 'カーズ',
                'description' => '野心的なレーシングカーが田舎町で新たな友人を見つけ、自分の道を見つける物語。',
                'director' => 'ジョン・ラセター',
                'release_date' => '2006-06-09',
                'image' => 'https://via.placeholder.com/150?text=カーズ',
            ],
            [
                'title' => 'スパイダーマン: スパイダーバース',
                'description' => '異なる次元から集まったスパイダーマンたちが協力して敵と戦う物語。',
                'director' => 'ピーター・ラムジー、ロドニー・ロスマン',
                'release_date' => '2018-12-14',
                'image' => 'https://via.placeholder.com/150?text=スパイダーマン: スパイダーバース',
            ],
            [
                'title' => 'アベンジャーズ/エンドゲーム',
                'description' => 'ヒーローたちが最強の敵サノスと最後の戦いに挑む。',
                'director' => 'アンソニー・ルッソ、ジョー・ルッソ',
                'release_date' => '2019-04-26',
                'image' => 'https://via.placeholder.com/150?text=アベンジャーズ/エンドゲーム',
            ],
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}
