<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 企業団体の登録情報
     */
    public function run(): void
    {
        //
        // 日本舞踊協会1
        Company::create([
            'company_name' => '日本舞踊　花柳流',
            'tel_number' => '092-000-0001',
            'fax_number' => '092-000-0002',
            'email' => 'test100@example.com',
            'post_code' => '812-0018',
            'address' => '福岡市博多区住吉3-5-12',
            'hp_url' => 'https://sukesanshi.com/',
            'deleted_at' => null
        ]);
        
        // 株式会社福岡ウイニングスピリッツ2
        Company::create([
            'company_name' => '（株）福岡ウイニングスピリッツ',
            'tel_number' => '092-000-0003',
            'fax_number' => '092-000-0004',
            'email' => 'test101@example.com',
            'post_code' => '812-0039',
            'address' => '福岡県福岡市博多区冷泉町6-15-405',
            'hp_url' => 'https://www.winning-spirits.jp/',
            'deleted_at' => null 
        ]);
        
        //FBS福岡3
        Company::create([
            'company_name' => '（株）福岡放送',
            'tel_number' => '092-000-0005',
            'fax_number' => '092-000-0006',
            'email' => 'test102@example.com',
            'post_code' => '810-8655',
            'address' => '福岡市中央区清川2丁目22番8号',
            'hp_url' => 'https://www.fbs.co.jp/', 
            'deleted_at' => null
        ]);
        
        // 宮村山業4
        Company::create([
            'company_name' => '宮村山業（株）',
            'tel_number' => '092-000-0007',
            'fax_number' => '092-000-0008',
            'email' => 'test103@example.com',
            'post_code' => '860-0863',
            'address' => '熊本県熊本市中央区坪井2丁目1-13',
            'hp_url' => 'https://miyamura-sangyou.co.jp/',
            'deleted_at' => null
        ]);

// （株）つなぐ看護師 5
        Company::create([
            'company_name' => '（株）つなぐ看護師',
            'tel_number' => '092-000-0009',
            'fax_number' => '092-000-0010',
            'email' => 'test104@example.com',
            'post_code' => '819-0052',
            'address' => '福岡県福岡市西区下山門1丁目24-32 ピア下山門Ⅱ 101',
            'hp_url' => 'https://www.tsunagu-kangoshi.com/',
            'deleted_at' => null
        ]);

// （一社）みっどらいふ共育協会 6
        Company::create([
            'company_name' => '（一社）みっどらいふ共育協会',
            'tel_number' => '092-000-0011',
            'fax_number' => '092-000-0012',
            'email' => 'test105@example.com',
            'post_code' => '746-0021',
            'address' => '山口県周南市花園町２番８号',
            'hp_url' => 'https://kaisharesearch.com/company/detail/4250005008745/',
            'deleted_at' => null
        ]);
        
        // ローカルフードサイクリング（株） 7
        Company::create([
            'company_name' => 'ローカルフードサイクリング（株）',
            'tel_number' => '092-000-0013',
            'fax_number' => '092-000-0014',
            'email' => 'test106@example.com',
            'post_code' => '813-0003',
            'address' => '福岡県福岡市東区香住ヶ丘６丁目１２番３号',
            'hp_url' => 'https://lfc-compost.jp/',
            'deleted_at' => null
        ]);

// アノテーションサポート（株） 8
        Company::create([
            'company_name' => 'アノテーションサポート（株）',
            'tel_number' => '092-000-0015',
            'fax_number' => '092-000-0016',
            'email' => 'test107@example.com',
            'post_code' => '162-0843',
            'address' => '東京都新宿区市谷田町2丁目17番',
            'hp_url' => 'https://www.annotation.co.jp/',
            'deleted_at' => null
        ]);

// （株）西日本新聞社 9
        Company::create([
            'company_name' => '（株）西日本新聞社',
            'tel_number' => '092-000-0017',
            'fax_number' => '092-000-0018',
            'email' => 'test108@example.com',
            'post_code' => '810-8721',
            'address' => '福岡県福岡市中央区天神１－４－１',
            'hp_url' => 'https://www.nishinippon.co.jp/',
            'deleted_at' => null
        ]);

// （株）上向き 10
        Company::create([
            'company_name' => '（株）上向き',
            'tel_number' => '092-000-0019',
            'fax_number' => '092-000-0020',
            'email' => 'test109@example.com',
            'post_code' => '810-0041',
            'address' => '福岡県福岡市中央区大名2丁目6-11',
            'hp_url' => 'https://www.uwamuki.co.jp/',
            'deleted_at' => null
        ]);

// 立木美江（日本画家) 11
        Company::create([
            'company_name' => '立木美江',
            'tel_number' => '092-000-0021',
            'fax_number' => '092-000-0022',
            'email' => 'test110@example.com',
            'post_code' => '810-0044',
            'address' => '福岡市中央区六本松1-10-36',
            'hp_url' => 'https://tachiki-yoshie.com/',
            'deleted_at' => null
        ]);

// （株）フリップザミント12
        Company::create([
            'company_name' => '（株）フリップザミント',
            'tel_number' => '092-000-0023',
            'fax_number' => '092-000-0024',
            'email' => 'test111@example.com',
            'post_code' => '810-0042',
            'address' => '福岡県福岡市中央区赤坂2丁目2-1 高木ビル402',
            'hp_url' => 'https://flipthemint.com/#company',
            'deleted_at' => null
        ]);

// (有)ペーパーカンパニー13
        Company::create([
            'company_name' => '(有)ペーパーカンパニー',
            'tel_number' => '092-000-0025',
            'fax_number' => '092-000-0026',
            'email' => 'test112@example.com',
            'post_code' => '8100041',
            'address' => '福岡県福岡市中央区大名２丁目８番１８号',
            'hp_url' => 'https://www.papercompany.co.jp/',
            'deleted_at' => null
        ]);


// （株）こたつ14
        Company::create([
            'company_name' => '（株）こたつ',
            'tel_number' => '092-000-0027',
            'fax_number' => '092-000-0028',
            'email' => 'test113@example.com',
            'post_code' => '8100041',
            'address' => '東京都',
            'hp_url' => 'https://www.kotatsu.co.jp/',
            'deleted_at' => null
        ]);

// 環境活動家・露木志奈15
        Company::create([
            'company_name' => '露木志奈',
            'tel_number' => '092-000-0029',
            'fax_number' => '092-000-0030',
            'email' => 'test114@example.com',
            'post_code' => '8100041',
            'address' => '東京都',
            'hp_url' => 'https://shiina.co/',
            'deleted_at' => null
        ]);
    }
}
