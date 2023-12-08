<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 舞鶴小学校
        School::create([
            'school_name' => '舞鶴',
            'school_number' => '0001',
            'tel_number' => '092-741-6322',
            'fax_number' => '092-741-4039',
            'email' => 'test4@example.com',
            'post_code' => '810-0073',
            'address' => '福岡市中央区舞鶴2-6-1',
           'area_id' => '1',
        ]);
        
        // 当仁小学校
        School::create([
            'school_name' => '当仁',
            'school_number' => '0002',
            'tel_number' => '092-741-2701',
            'fax_number' => '092-741-4475',
            'email' => 'test2@example.com',
            'post_code' => '810-0063',
            'address' => '福岡市中央区唐人町3-1-45',
            'area_id' => '1',
         ]);
         
         // 博多小学校
        School::create([
            'school_name' => '博多',
            'school_number' => '0003',
            'tel_number' => '092-291-2001',
            'fax_number' => '092-291-2002',
            'email' => 'test3@example.com',
            'post_code' => '812-0023',
            'address' => '福岡市博多区奈良屋町1-38',
            'area_id' => '1',
        ]);
        
        // 警固小学校
        School::create([
            'school_name' => '警固',
            'school_number' => '0004',
            'tel_number' => '092-741-3664',
            'fax_number' => '092-741-3665',
            'email' => 'test4@example.com',
            'post_code' => '810-0023',
            'address' => '福岡市中央区警固1-11-1',
            'area_id' => '1',
        ]);

        // 西新小学校
        School::create([
            'school_name' => '西新',
            'school_number' => '0005',
            'tel_number' => '092-831-4584',
            'fax_number' => '092-831-4585',
            'email' => 'test5@example.com',
            'post_code' => '814-0002',
            'address' => '福岡市早良区西新6-4-1',
            'area_id' => '1',
        ]);

        // 春吉小学校
        School::create([
            'school_name' => '春吉',
            'school_number' => '0006',
            'tel_number' => '092-751-6386',
            'fax_number' => '092-751-6387',
            'email' => 'test6@example.com',
            'post_code' => '810-0003',
            'address' => '福岡市中央区春吉1-17-38',
            'area_id' => '1',
        ]);

                 
         // 住吉小学校
        School::create([
            'school_name' => '住吉',
            'school_number' => '0007',
            'tel_number' => '092-431-2739',
            'fax_number' => '092-431-2730',
            'email' => 'test7@example.com',
            'post_code' => '812-0017',
            'address' => '福岡市博多区美野島3-22-7',
            'area_id' => '1',
        ]);

        // 草ヶ江小学校
        School::create([
            'school_name' => '草ヶ江',
            'school_number' => '0008',
            'tel_number' => '092-771-3815',
            'fax_number' => '092-771-3816',
            'email' => 'test8@example.com',
            'post_code' => '810-0045',
            'address' => '福岡市中央区草香江2-3-5',
            'area_id' => '1',
        ]);
        
        // 堅粕小学校
        School::create([
            'school_name' => '堅粕',
            'school_number' => '0009',
            'tel_number' => '092-431-4194',
            'fax_number' => '092-431-4978',
            'email' => 'test9@example.com',
            'post_code' => '812-0013',
            'address' => '福岡市博多区博多駅東1-8-1',
            'area_id' => '1',
        ]);
        
        // 馬出小学校
        School::create([
            'school_name' => '馬出',
            'school_number' => '0010',
            'tel_number' => '092-641-6588',
            'fax_number' => '092-641-6589',
            'email' => 'test10@example.com',
            'post_code' => '812-0054',
            'address' => '福岡市東区馬出1-12-27',
            'area_id' => '1',
        ]);
        
        // 住吉小学校
        School::create([
            'school_name' => '住吉',
            'school_number' => '0011',
            'tel_number' => '092-431-2739',
            'fax_number' => '092-431-2730',
            'email' => 'test11@example.com',
            'post_code' => '812-0017',
            'address' => '福岡市博多区美野島3-22-7',
            'area_id' => '1',
        ]);
        
        // 草ヶ江小学校
        School::create([
            'school_name' => '草ヶ江',
            'school_number' => '0012',
            'tel_number' => '092-771-3815',
            'fax_number' => '092-771-3816',
            'email' => 'test12@example.com',
            'post_code' => '810-0045',
            'address' => '福岡市中央区草香江2-3-5',
            'area_id' => '1',
        ]);
        
        // 堅粕小学校
        School::create([
            'school_name' => '堅粕',
            'school_number' => '0013',
            'tel_number' => '092-431-4194',
            'fax_number' => '092-431-4978',
            'email' => 'test13@example.com',
            'post_code' => '812-0013',
            'address' => '福岡市博多区博多駅東1-8-1',
            'area_id' => '1',
        ]);
        
        // 馬出小学校
        School::create([
            'school_name' => '馬出',
            'school_number' => '0014',
            'tel_number' => '092-641-6588',
            'fax_number' => '092-641-6589',
            'email' => 'test14@example.com',
            'post_code' => '812-0054',
            'address' => '福岡市東区馬出1-12-27',
            'area_id' => '1',
        ]);
        
        // 千代小学校
        School::create([
            'school_name' => '千代',
            'school_number' => '0015',
            'tel_number' => '092-651-3070',
            'fax_number' => '092-651-7352',
            'email' => 'test15@example.com',
            'post_code' => '812-0045',
            'address' => '福岡市博多区東公園8-1',
            'area_id' => '1',
        ]);
        
        // 原小学校
        School::create([
            'school_name' => '原',
            'school_number' => '0016',
            'tel_number' => '092-821-2535',
            'fax_number' => '092-821-2536',
            'email' => 'test16@example.com',
            'post_code' => '814-0022',
            'address' => '福岡市早良区原2-5-1',
            'area_id' => '1',
        ]);
        
        // 長尾小学校
        School::create([
            'school_name' => '長尾',
            'school_number' => '0017',
            'tel_number' => '092-871-2271',
            'fax_number' => '092-871-2272',
            'email' => 'test17@example.com',
            'post_code' => '814-0123',
            'address' => '福岡市城南区長尾5-1-1',
            'area_id' => '1',
        ]);
        
        // 吉塚小学校
        School::create([
            'school_name' => '吉塚',
            'school_number' => '0018',
            'tel_number' => '092-611-0938',
            'fax_number' => '092-611-0939',
            'email' => 'test18@example.com',
            'post_code' => '812-0041',
            'address' => '福岡市博多区吉塚2-21-54',
            'area_id' => '1',
        ]);
        
        // 東住吉小学校
        School::create([
            'school_name' => '東住吉',
            'school_number' => '0019',
            'tel_number' => '092-431-0634',
            'fax_number' => '092-431-6614',
            'email' => 'test19@example.com',
            'post_code' => '812-0016',
            'address' => '福岡市博多区博多駅南2-6-1',
            'area_id' => '1',
        ]);
        
        // 筥松小学校
        School::create([
            'school_name' => '筥松',
            'school_number' => '0020',
            'tel_number' => '092-621-1692',
            'fax_number' => '092-621-9046',
            'email' => 'test20@example.com',
            'post_code' => '812-0069',
            'address' => '福岡市東区郷口町16-1',
            'area_id' => '1',
        ]);
         
         // 21平尾小学校
        School::create([
            'school_name' => '平尾',
            'school_number' => '0021',
            'tel_number' => '092-522-8215',
            'fax_number' => '092-522-8216',
            'email' => 'test21@example.com',
            'post_code' => '810-0014',
            'address' => '福岡市中央区平尾3-29-1',
            'area_id' => '1',
        ]);

        // 22高宮小学校
        School::create([
            'school_name' => '高宮',
            'school_number' => '0022',
            'tel_number' => '092-522-8213',
            'fax_number' => '092-522-8214',
            'email' => 'test22@example.com',
            'post_code' => '810-0012',
            'address' => '福岡市中央区白金2-15-40',
            'area_id' => '1',
        ]);
        
        // 23姪浜小学校
        School::create([
            'school_name' => '姪浜',
            'school_number' => '0023',
            'tel_number' => '092-891-3421',
            'fax_number' => '092-891-3422',
            'email' => 'test23@example.com',
            'post_code' => '819-0002',
            'address' => '福岡市西区姪の浜2-10-6',
            'area_id' => '1',
        ]);
        
        // 24席田小学校
        School::create([
            'school_name' => '席田',
            'school_number' => '0024',
            'tel_number' => '092-611-4706',
            'fax_number' => '092-611-4707',
            'email' => 'test24@example.com',
            'post_code' => '812-0002',
            'address' => '福岡市博多区空港前4-17-1',
            'area_id' => '1',
        ]);
        
        // 25三宅小学校
        School::create([
            'school_name' => '三宅',
            'school_number' => '0025',
            'tel_number' => '092-541-6468',
            'fax_number' => '092-541-6469',
            'email' => 'test25@example.com',
            'post_code' => '811-1344',
            'address' => '福岡市南区三宅2-23-1',
            'area_id' => '1',
        ]);
        
        // 26花畑小学校
        School::create([
            'school_name' => '花畑',
            'school_number' => '0026',
            'tel_number' => '092-565-4983',
            'fax_number' => '092-565-4984',
            'email' => 'test26@example.com',
            'post_code' => '811-1356',
            'address' => '福岡市南区花畑3-34-1',
            'area_id' => '1',
        ]);
        
        // 27月隈小学校
        School::create([
            'school_name' => '月隈',
            'school_number' => '0027',
            'tel_number' => '092-503-5321',
            'fax_number' => '092-503-4650',
            'email' => 'test27@example.com',
            'post_code' => '816-0858',
            'address' => '福岡市博多区月隈3-30-1',
            'area_id' => '1',
        ]);
        
        // 28箱崎小学校
        School::create([
            'school_name' => '箱崎',
            'school_number' => '0028',
            'tel_number' => '092-651-3190',
            'fax_number' => '092-651-3766',
            'email' => 'test28@example.com',
            'post_code' => '812-0053',
            'address' => '福岡市東区箱崎2-2-45',
            'area_id' => '1',
        ]);
        
        // 29壱岐小学校
        School::create([
            'school_name' => '壱岐',
            'school_number' => '0029',
            'tel_number' => '092-881-1568',
            'fax_number' => '092-881-1569',
            'email' => 'test29@example.com',
            'post_code' => '819-0041',
            'address' => '福岡市西区拾六町3-21-1',
            'area_id' => '1',
        ]);
        
        // 30能古小学校（小中一貫校）
        School::create([
            'school_name' => '能古',
            'school_number' => '0030',
            'tel_number' => '092-881-0858',
            'fax_number' => '092-881-8416',
            'email' => 'test30@example.com',
            'post_code' => '819-0012',
            'address' => '福岡市西区能古357',
            'area_id' => '1',
        ]);
        
        // 31今宿小学校
        School::create([
            'school_name' => '今宿',
            'school_number' => '0031',
            'tel_number' => '092-806-0009',
            'fax_number' => '092-806-6411',
            'email' => 'test31@example.com',
            'post_code' => '819-0161',
            'address' => '福岡市西区今宿東1-27-1',
            'area_id' => '1',
        ]);
        
        // 32今津小学校
        School::create([
            'school_name' => '今津',
            'school_number' => '0032',
            'tel_number' => '092-806-2004',
            'fax_number' => '092-806-2005',
            'email' => 'test32@example.com',
            'post_code' => '819-0165',
            'address' => '福岡市西区今津4808',
            'area_id' => '1',
        ]);
        
        // 33玉川小学校
        School::create([
            'school_name' => '玉川',
            'school_number' => '0033',
            'tel_number' => '092-541-5331',
            'fax_number' => '092-541-5332',
            'email' => 'test33@example.com',
            'post_code' => '815-0035',
            'address' => '福岡市南区向野1-5-1',
            'area_id' => '1',
        ]);
        
        // 34高取小学校
        School::create([
            'school_name' => '高取',
            'school_number' => '0034',
            'tel_number' => '092-821-6636',
            'fax_number' => '092-821-6637',
            'email' => 'test34@example.com',
            'post_code' => '814-0012',
            'address' => '福岡市早良区昭代2-15-51',
            'area_id' => '1',
        ]);
        
        // 35鳥飼小学校
        School::create([
            'school_name' => '鳥飼',
            'school_number' => '0035',
            'tel_number' => '092-831-4238',
            'fax_number' => '092-831-4239',
            'email' => 'test35@example.com',
            'post_code' => '814-0103',
            'address' => '福岡市城南区鳥飼4-13-2',
            'area_id' => '1',
        ]);
        
        // 36西高宮小学校
        School::create([
            'school_name' => '西高宮',
            'school_number' => '0036',
            'tel_number' => '092-531-8136',
            'fax_number' => '092-531-8137',
            'email' => 'test36@example.com',
            'post_code' => '815-0071',
            'address' => '福岡市南区平和1-6-55',
            'area_id' => '1',
        ]);
        
        // 37赤坂小学校
        School::create([
            'school_name' => '赤坂',
            'school_number' => '0037',
            'tel_number' => '092-721-1636',
            'fax_number' => '092-721-1637',
            'email' => 'test37@example.com',
            'post_code' => '810-0042',
            'address' => '福岡市中央区赤坂2-5-20',
            'area_id' => '1',
        ]);
        
        // 38百道小学校
        School::create([
            'school_name' => '百道',
            'school_number' => '0038',
            'tel_number' => '092-821-2183',
            'fax_number' => '092-821-4799',
            'email' => 'test38@example.com',
            'post_code' => '814-0006',
            'address' => '福岡市早良区百道3-1-1',
            'area_id' => '1',
        ]);
        
        // 39曰佐小学校
        School::create([
            'school_name' => '曰佐',
            'school_number' => '0039',
            'tel_number' => '092-591-5028',
            'fax_number' => '092-591-5038',
            'email' => 'test39@example.com',
            'post_code' => '811-1311',
            'address' => '福岡市南区横手3-42-1',
            'area_id' => '1',
        ]);
        
        // 40宮竹小学校
        School::create([
            'school_name' => '宮竹',
            'school_number' => '0040',
            'tel_number' => '092-581-0361',
            'fax_number' => '092-581-0424',
            'email' => 'test40@example.com',
            'post_code' => '811-1302',
            'address' => '福岡市南区井尻1-1-1',
            'area_id' => '1',
        ]);
        
        // 41田隈小学校
        School::create([
            'school_name' => '田隈',
            'school_number' => '0041',
            'tel_number' => '092-871-3706',
            'fax_number' => '092-871-3707',
            'email' => 'test41@example.com',
            'post_code' => '814-0174',
            'address' => '福岡市早良区田隈2-7-1',
            'area_id' => '1',
        ]);

        // 42香椎小学校
        School::create([
            'school_name' => '香椎',
            'school_number' => '0042',
            'tel_number' => '092-681-7231',
            'fax_number' => '092-681-7232',
            'email' => 'test42@example.com',
            'post_code' => '813-0013',
            'address' => '福岡市東区香椎駅前3-2-1',
            'area_id' => '1',
        ]);
        
        // 43多々良小学校
        School::create([
            'school_name' => '多々良',
            'school_number' => '0043',
            'tel_number' => '092-691-3361',
            'fax_number' => '092-691-3362',
            'email' => 'test43@example.com',
            'post_code' => '813-0033',
            'address' => '福岡市東区多々良1-56-1',
            'area_id' => '1',
        ]);
        
        // 44名島小学校
        School::create([
            'school_name' => '名島',
            'school_number' => '0044',
            'tel_number' => '092-681-3366',
            'fax_number' => '092-681-3367',
            'email' => 'test44@example.com',
            'post_code' => '813-0043',
            'address' => '福岡市東区名島5-5-1',
            'area_id' => '1',
        ]);
        
        // 45大楠小学校
        School::create([
            'school_name' => '大楠',
            'school_number' => '0045',
            'tel_number' => '092-522-8211',
            'fax_number' => '092-522-8212',
            'email' => 'test45@example.com',
            'post_code' => '815-0082',
            'address' => '福岡市南区大楠3-10-1',
            'area_id' => '1',
        ]);
        
        // 46春住小学校
        School::create([
            'school_name' => '春住',
            'school_number' => '0046',
            'tel_number' => '092-431-2315',
            'fax_number' => '092-431-2322',
            'email' => 'test46@example.com',
            'post_code' => '812-0016',
            'address' => '福岡市博多区博多駅南5-3-1',
            'area_id' => '1',
        ]);
        
        // 47板付小学校
        School::create([
            'school_name' => '板付',
            'school_number' => '0047',
            'tel_number' => '092-581-0072',
            'fax_number' => '092-581-9312',
            'email' => 'test47@example.com',
            'post_code' => '816-0882',
            'address' => '福岡市博多麦野2-3-1',
            'area_id' => '1',
        ]);
        
        // 48那珂小学校
        School::create([
            'school_name' => '那珂',
            'school_number' => '0048',
            'tel_number' => '092-431-4979',
            'fax_number' => '092-431-4956',
            'email' => 'test48@example.com',
            'post_code' => '816-0893',
            'address' => '福岡市博多区那珂3-10-1',
            'area_id' => '1',
        ]);
        
        // 49那珂南小学校
        School::create([
            'school_name' => '那珂南',
            'school_number' => '0049',
            'tel_number' => '092-581-0208',
            'fax_number' => '092-581-6035',
            'email' => 'test49@example.com',
            'post_code' => '816-0877',
            'address' => '福岡市博多区元町3-1-1',
            'area_id' => '1',
        ]);
        
        // 50香住丘小学校
        School::create([
            'school_name' => '香住丘',
            'school_number' => '0050',
            'tel_number' => '092-681-3511',
            'fax_number' => '092-681-3512',
            'email' => 'test50@example.com',
            'post_code' => '813-0003',
            'address' => '福岡市東区香住ｹ丘3-10-1',
            'area_id' => '1',
        ]);
        
        // 51東光小学校
        School::create([
            'school_name' => '東光',
            'school_number' => '0051',
            'tel_number' => '092-411-2498',
            'fax_number' => '092-411-2484',
            'email' => 'test51@example.com',
            'post_code' => '812-0007',
            'address' => '福岡市博多区東比恵2-21-1',
            'area_id' => '1',
        ]);
        
        // 52南当仁小学校
        School::create([
            'school_name' => '南当仁',
            'school_number' => '0052',
            'tel_number' => '092-741-8792',
            'fax_number' => '092-741-8793',
            'email' => 'test52@example.com',
            'post_code' => '810-0053',
            'address' => '福岡市中央区鳥飼2-4-61',
            'area_id' => '1',
        ]);
        
        // 53東吉塚小学校
        School::create([
            'school_name' => '東吉塚',
            'school_number' => '0053',
            'tel_number' => '092-611-7671',
            'fax_number' => '092-611-7687',
            'email' => 'test53@example.com',
            'post_code' => '812-0041',
            'address' => '福岡市博多区吉塚6-8-11',
            'area_id' => '1',
        ]);
        
        // 55若久小学校
        School::create([
            'school_name' => '若久',
            'school_number' => '0055',
            'tel_number' => '092-541-4210',
            'fax_number' => '092-541-4227',
            'email' => 'test55@example.com',
            'post_code' => '815-0042',
            'address' => '福岡市南区若久1-12-1',
            'area_id' => '1',
        ]);
        
        // 56笹丘小学校
        School::create([
            'school_name' => '笹丘',
            'school_number' => '0056',
            'tel_number' => '092-731-0756',
            'fax_number' => '092-731-0757',
            'email' => 'test56@example.com',
            'post_code' => '810-0034',
            'address' => '福岡市中央区笹丘2-25-1',
            'area_id' => '1',
        ]);
        
        // 57内浜小学校
        School::create([
            'school_name' => '内浜',
            'school_number' => '0057',
            'tel_number' => '092-881-0273',
            'fax_number' => '092-881-1322',
            'email' => 'test57@example.com',
            'post_code' => '819-0002',
            'address' => '福岡市西区姪の浜5-8-8',
            'area_id' => '1',
        ]);
        
        // 58室見小学校
        School::create([
            'school_name' => '室見',
            'school_number' => '0058',
            'tel_number' => '092-831-3783',
            'fax_number' => '092-831-3784',
            'email' => 'test58@example.com',
            'post_code' => '814-0015',
            'address' => '福岡市早良区室見3-3-1',
            'area_id' => '1',
        ]);
        
        // 59別府小学校
        School::create([
            'school_name' => '別府',
            'school_number' => '0059',
            'tel_number' => '092-821-1238',
            'fax_number' => '092-821-1239',
            'email' => 'test59@example.com',
            'post_code' => '814-0104',
            'address' => '福岡市城南区別府6-9-1',
            'area_id' => '1',
        ]);
        
        // 60和白小学校
        School::create([
            'school_name' => '和白',
            'school_number' => '0060',
            'tel_number' => '092-606-2061',
            'fax_number' => '092-606-2062',
            'email' => 'test60@example.com',
            'post_code' => '811-0203',
            'address' => '福岡市東区塩浜1-6-1',
            'area_id' => '1',
        ]);
        
        // 61金武小学校
        School::create([
            'school_name' => '金武',
            'school_number' => '0061',
            'tel_number' => '092-811-1303',
            'fax_number' => '092-811-1339',
            'email' => 'test61@example.com',
            'post_code' => '819-0035',
            'address' => '福岡市西区金武2028-1',
            'area_id' => '1',
        ]);

        // 63周船寺小学校
        School::create([
            'school_name' => '周船寺',
            'school_number' => '0063',
            'tel_number' => '092-806-1038',
            'fax_number' => '092-806-8097',
            'email' => 'test63@example.com',
            'post_code' => '819-0373',
            'address' => '福岡市西区周船寺1-22-39',
            'area_id' => '1',
        ]);
        
        // 64元岡小学校
        School::create([
            'school_name' => '元岡',
            'school_number' => '0064',
            'tel_number' => '092-806-1135',
            'fax_number' => '092-806-5038',
            'email' => 'test64@example.com',
            'post_code' => '819-0384',
            'address' => '福岡市西区太郎丸1-2-24',
            'area_id' => '1',
        ]);
        
        // 65北崎小学校
        School::create([
            'school_name' => '北崎',
            'school_number' => '0065',
            'tel_number' => '092-809-2115',
            'fax_number' => '092-809-1298',
            'email' => 'test65@example.com',
            'post_code' => '819-0203',
            'address' => '福岡市西区小田1385',
            'area_id' => '1',
        ]);
        
        // 66玄界小学校
        School::create([
            'school_name' => '玄界',
            'school_number' => '0066',
            'tel_number' => '092-809-2951',
            'fax_number' => '092-809-1274',
            'email' => 'test66@example.com',
            'post_code' => '819-0205',
            'address' => '福岡市西区玄界島239',
            'area_id' => '1',
        ]);
        
        // 67小呂小学校
        School::create([
            'school_name' => '小呂',
            'school_number' => '0067',
            'tel_number' => '092-809-2911',
            'fax_number' => '092-809-1819',
            'email' => 'test67@example.com',
            'post_code' => '819-0011',
            'address' => '福岡市西区小呂島285',
            'area_id' => '1',
        ]);
        
        // 68千早小学校
        School::create([
            'school_name' => '千早',
            'school_number' => '0068',
            'tel_number' => '092-681-0831',
            'fax_number' => '092-681-0832',
            'email' => 'test68@example.com',
            'post_code' => '813-0044',
            'address' => '福岡市東区千早3-13-1',
            'area_id' => '1',
        ]);
        
        // 69小笹小学校
        School::create([
            'school_name' => '小笹',
            'school_number' => '0069',
            'tel_number' => '092-522-8217',
            'fax_number' => '092-522-8218',
            'email' => 'test69@example.com',
            'post_code' => '810-0016',
            'address' => '福岡市中央区平和5-13-1',
            'area_id' => '1',
        ]);
        
        // 70七隈小学校
        School::create([
            'school_name' => '七隈',
            'school_number' => '0070',
            'tel_number' => '092-871-3900',
            'fax_number' => '092-871-3901',
            'email' => 'test70@example.com',
            'post_code' => '814-0133',
            'address' => '福岡市城南区七隈4-25-8',
            'area_id' => '1',
        ]);
        
        // 71老司小学校
        School::create([
            'school_name' => '老司',
            'school_number' => '0071',
            'tel_number' => '092-565-2529',
            'fax_number' => '092-565-2651',
            'email' => 'test71@example.com',
            'post_code' => '811-1346',
            'address' => '福岡市南区老司3-2-1',
            'area_id' => '1',
        ]);
        
        // 72原西小学校
        School::create([
            'school_name' => '原西',
            'school_number' => '0072',
            'tel_number' => '092-831-6960',
            'fax_number' => '092-831-2496',
            'email' => 'test72@example.com',
            'post_code' => '814-0022',
            'address' => '福岡市早良区原5-16-10',
            'area_id' => '1',
        ]);
        
        // 73長住小学校
        School::create([
            'school_name' => '長住',
            'school_number' => '0073',
            'tel_number' => '092-541-2931',
            'fax_number' => '092-541-2932',
            'email' => 'test73@example.com',
            'post_code' => '811-1362',
            'address' => '福岡市南区長住4-5-39',
            'area_id' => '1',
        ]);
        
        // 74原北小学校
        School::create([
            'school_name' => '原北',
            'school_number' => '0074',
            'tel_number' => '092-821-5586',
            'fax_number' => '092-821-6908',
            'email' => 'test74@example.com',
            'post_code' => '814-0031',
            'address' => '福岡市早良区南庄4-5-40',
            'area_id' => '1',
        ]);
        
        // 75筑紫丘小学校
        School::create([
            'school_name' => '筑紫丘',
            'school_number' => '0075',
            'tel_number' => '092-551-1572',
            'fax_number' => '092-551-1575',
            'email' => 'test75@example.com',
            'post_code' => '815-0034',
            'address' => '福岡市南区南大橋1-13-1',
            'area_id' => '1',
        ]);
        
        // 76西花畑小学校
        School::create([
            'school_name' => '西花畑',
            'school_number' => '0076',
            'tel_number' => '092-565-1573',
            'fax_number' => '092-565-1574',
            'email' => 'test76@example.com',
            'post_code' => '811-1355',
            'address' => '福岡市南区桧原2-20-1',
            'area_id' => '1',
        ]);
        
        // 77弥永小学校
        School::create([
            'school_name' => '弥永',
            'school_number' => '0077',
            'tel_number' => '092-581-5585',
            'fax_number' => '092-581-5558',
            'email' => 'test77@example.com',
            'post_code' => '811-1323',
            'address' => '福岡市南区弥永4-2-1',
            'area_id' => '1',
        ]);
        
        // 78堤小学校
        School::create([
            'school_name' => '堤',
            'school_number' => '0078',
            'tel_number' => '092-861-2785',
            'fax_number' => '092-861-2484',
            'email' => 'test78@example.com',
            'post_code' => '814-0153',
            'address' => '福岡市城南区樋井川6-27-56',
            'area_id' => '1',
        ]);
        
        // 79飯倉小学校
        School::create([
            'school_name' => '飯倉',
            'school_number' => '0079',
            'tel_number' => '092-801-4400',
            'fax_number' => '092-801-8948',
            'email' => 'test79@example.com',
            'post_code' => '814-0161',
            'address' => '福岡市早良区飯倉7-30-9',
            'area_id' => '1',
        ]);
        
        // 80城浜小学校
        School::create([
            'school_name' => '城浜',
            'school_number' => '0080',
            'tel_number' => '092-661-6915',
            'fax_number' => '092-661-6961',
            'email' => 'test80@example.com',
            'post_code' => '813-0045',
            'address' => '福岡市東区城浜団地31-1',
            'area_id' => '1',
        ]);
        
        // 81若宮小学校
        School::create([
            'school_name' => '若宮',
            'school_number' => '0081',
            'tel_number' => '092-661-6655',
            'fax_number' => '092-661-6916',
            'email' => 'test81@example.com',
            'post_code' => '813-0036',
            'address' => '福岡市東区若宮3-12-1',
            'area_id' => '1',
        ]);

        // 82城南小学校
        School::create([
            'school_name' => '城南',
            'school_number' => '0082',
            'tel_number' => '092-851-5154',
            'fax_number' => '092-851-5166',
            'email' => 'test82@example.com',
            'post_code' => '814-0111',
            'address' => '福岡市城南区茶山6-20-1',
            'area_id' => '1',
        ]);
        
        // 83勝馬小学校
        School::create([
            'school_name' => '勝馬',
            'school_number' => '0083',
            'tel_number' => '092-603-6615',
            'fax_number' => '092-603-6920',
            'email' => 'test83@example.com',
            'post_code' => '811-0325',
            'address' => '福岡市東区勝馬1786',
            'area_id' => '1',
        ]);
        
        // 84志賀島小学校
        School::create([
            'school_name' => '志賀島',
            'school_number' => '0084',
            'tel_number' => '092-603-6506',
            'fax_number' => '092-603-6541',
            'email' => 'test84@example.com',
            'post_code' => '811-0323',
            'address' => '福岡市東区志賀島1566-1',
            'area_id' => '1',
        ]);
        
        // 85西戸崎小学校
        School::create([
            'school_name' => '西戸崎',
            'school_number' => '0085',
            'tel_number' => '092-603-0046',
            'fax_number' => '092-603-0208',
            'email' => 'test85@example.com',
            'post_code' => '811-0321',
            'address' => '福岡市東区西戸崎6-3-1',
            'area_id' => '1',
        ]);
        
        // 86東花畑小学校
        School::create([
            'school_name' => '東花畑',
            'school_number' => '0086',
            'tel_number' => '092-566-7700',
            'fax_number' => '092-566-7701',
            'email' => 'test86@example.com',
            'post_code' => '811-1351',
            'address' => '福岡市南区屋形原2-23-1',
            'area_id' => '1',
        ]);
        
        // 87金山小学校
        School::create([
            'school_name' => '金山',
            'school_number' => '0087',
            'tel_number' => '092-861-5313',
            'fax_number' => '092-861-5129',
            'email' => 'test87@example.com',
            'post_code' => '814-0131',
            'address' => '福岡市城南区松山1-20-56',
            'area_id' => '1',
        ]);
        
        // 88下山門小学校
        School::create([
            'school_name' => '下山門',
            'school_number' => '0088',
            'tel_number' => '092-891-1688',
            'fax_number' => '092-891-0549',
            'email' => 'test88@example.com',
            'post_code' => '819-0052',
            'address' => '福岡市西区下山門4-15-1',
            'area_id' => '1',
        ]);
        
        // 89長丘小学校
        School::create([
            'school_name' => '長丘',
            'school_number' => '0089',
            'tel_number' => '092-511-1350',
            'fax_number' => '092-511-1413',
            'email' => 'test89@example.com',
            'post_code' => '815-0075',
            'address' => '福岡市南区長丘2-22-42',
            'area_id' => '1',
        ]);
        
        // 90美和台小学校
        School::create([
            'school_name' => '美和台',
            'school_number' => '0090',
            'tel_number' => '092-606-4755',
            'fax_number' => '092-606-4789',
            'email' => 'test90@example.com',
            'post_code' => '811-0212',
            'address' => '福岡市東区美和台2-25-1',
            'area_id' => '1',
        ]);
        
        // 91八田小学校
        School::create([
            'school_name' => '八田',
            'school_number' => '0091',
            'tel_number' => '092-671-4080',
            'fax_number' => '092-671-4085',
            'email' => 'test91@example.com',
            'post_code' => '813-0031',
            'address' => '福岡市東区八田2-15-1',
            'area_id' => '1',
        ]);
        
        // 92板付北小学校
        School::create([
            'school_name' => '板付北',
            'school_number' => '0092',
            'tel_number' => '092-451-5022',
            'fax_number' => '092-451-5024',
            'email' => 'test92@example.com',
            'post_code' => '816-0888',
            'address' => '福岡市博多区板付2-2-20',
            'area_id' => '1',
        ]);
        
        // 93西長住小学校
        School::create([
            'school_name' => '西長住',
            'school_number' => '0093',
            'tel_number' => '092-512-1335',
            'fax_number' => '092-512-4343',
            'email' => 'test93@example.com',
            'post_code' => '811-1361',
            'address' => '福岡市南区西長住1-9-20',
            'area_id' => '1',
        ]);
        
        // 94賀茂小学校
        School::create([
            'school_name' => '賀茂',
            'school_number' => '0094',
            'tel_number' => '092-862-0233',
            'fax_number' => '092-862-4516',
            'email' => 'test94@example.com',
            'post_code' => '814-0164',
            'address' => '福岡市早良区賀茂1-31-1',
            'area_id' => '1',
        ]);
        
        // 95脇山小学校
        School::create([
            'school_name' => '脇山',
            'school_number' => '0095',
            'tel_number' => '092-804-2805',
            'fax_number' => '092-804-2842',
            'email' => 'test95@example.com',
            'post_code' => '811-1111',
            'address' => '福岡市早良区脇山2558',
            'area_id' => '1',
        ]);
        
        // 96内野小学校
        School::create([
            'school_name' => '内野',
            'school_number' => '0096',
            'tel_number' => '092-804-2207',
            'fax_number' => '092-804-4100',
            'email' => 'test96@example.com',
            'post_code' => '811-1123',
            'address' => '福岡市早良区内野8-15-1',
            'area_id' => '1',
        ]);
        
        // 98入部小学校
        School::create([
            'school_name' => '入部',
            'school_number' => '0098',
            'tel_number' => '092-804-2902',
            'fax_number' => '092-804-2999',
            'email' => 'test98@example.com',
            'post_code' => '811-1102',
            'address' => '福岡市早良区東入部2-21-15',
            'area_id' => '1',
        ]);
        
        // 99東月隈小学校
        School::create([
            'school_name' => '東月隈',
            'school_number' => '0099',
            'tel_number' => '092-504-0550',
            'fax_number' => '092-504-0595',
            'email' => 'test99@example.com',
            'post_code' => '812-0854',
            'address' => '福岡市博多区東月隈4-17-1',
            'area_id' => '1',
        ]);
        
        // 100有田小学校
        School::create([
            'school_name' => '有田',
            'school_number' => '0100',
            'tel_number' => '092-861-1235',
            'fax_number' => '092-861-1309',
            'email' => 'test100@example.com',
            'post_code' => '814-0033',
            'address' => '福岡市早良区有田8-17-1',
            'area_id' => '1',
        ]);
        
        // 101壱岐南小学校
        School::create([
            'school_name' => '壱岐南',
            'school_number' => '0101',
            'tel_number' => '092-811-0955',
            'fax_number' => '092-811-5715',
            'email' => 'test101@example.com',
            'post_code' => '819-0032',
            'address' => '福岡市西区戸切2-17-1',
            'area_id' => '1',
        ]);

        // 102和白東小学校
        School::create([
            'school_name' => '和白東',
            'school_number' => '0102',
            'tel_number' => '092-607-0621',
            'fax_number' => '092-607-2978',
            'email' => 'test102@example.com',
            'post_code' => '811-0215',
            'address' => '福岡市東区高美台2-8-1',
            'area_id' => '1',
        ]);
        
        // 103片江小学校
        School::create([
            'school_name' => '片江',
            'school_number' => '0103',
            'tel_number' => '092-862-1600',
            'fax_number' => '092-862-4532',
            'email' => 'test103@example.com',
            'post_code' => '814-0142',
            'address' => '福岡市城南区片江4-5-1',
            'area_id' => '1',
        ]);
        
        // 104野芥小学校
        School::create([
            'school_name' => '野芥',
            'school_number' => '0104',
            'tel_number' => '092-862-1814',
            'fax_number' => '092-862-4571',
            'email' => 'test104@example.com',
            'post_code' => '814-0171',
            'address' => '福岡市早良区野芥7-16-1',
            'area_id' => '1',
        ]);
        
        // 105西陵小学校
        School::create([
            'school_name' => '西陵',
            'school_number' => '0105',
            'tel_number' => '092-881-1702',
            'fax_number' => '092-881-5313',
            'email' => 'test105@example.com',
            'post_code' => '819-0055',
            'address' => '福岡市西区生の松原3-9-2',
            'area_id' => '1',
        ]);
        
        // 106舞松原小学校
        School::create([
            'school_name' => '舞松原',
            'school_number' => '0106',
            'tel_number' => '092-671-6171',
            'fax_number' => '092-671-6242',
            'email' => 'test106@example.com',
            'post_code' => '813-0042',
            'address' => '福岡市東区舞松原5-19-1',
            'area_id' => '1',
        ]);
        
        // 107福浜小学校
        School::create([
            'school_name' => '福浜',
            'school_number' => '0107',
            'tel_number' => '092-771-0125',
            'fax_number' => '092-771-2069',
            'email' => 'test107@example.com',
            'post_code' => '810-0066',
            'address' => '福岡市中央区福浜1-2-1',
            'area_id' => '1',
        ]);
        
        // 108南片江小学校
        School::create([
            'school_name' => '南片江',
            'school_number' => '0108',
            'tel_number' => '092-862-2311',
            'fax_number' => '092-862-4639',
            'email' => 'test108@example.com',
            'post_code' => '814-0143',
            'address' => '福岡市城南区南片江2-9-1',
            'area_id' => '1',
        ]);
        
        // 109大原小学校
        School::create([
            'school_name' => '大原',
            'school_number' => '0109',
            'tel_number' => '092-843-7731',
            'fax_number' => '092-843-9430',
            'email' => 'test109@example.com',
            'post_code' => '814-0022',
            'address' => '福岡市早良区原3-8-10',
            'area_id' => '1',
        ]);
        
        // 110香椎東小学校
        School::create([
            'school_name' => '香椎東',
            'school_number' => '0110',
            'tel_number' => '092-681-1511',
            'fax_number' => '092-681-1557',
            'email' => 'test110@example.com',
            'post_code' => '813-0014',
            'address' => '福岡市東区香椎台1-9-1',
            'area_id' => '1',
        ]);
        
        // 111弥永西小学校
        School::create([
            'school_name' => '弥永西',
            'school_number' => '0111',
            'tel_number' => '092-585-1556',
            'fax_number' => '092-585-1589',
            'email' => 'test111@example.com',
            'post_code' => '811-1323',
            'address' => '福岡市南区弥永2-10-1',
            'area_id' => '1',
        ]);
        
        // 112東若久小学校
        School::create([
            'school_name' => '東若久',
            'school_number' => '0112',
            'tel_number' => '092-561-8020',
            'fax_number' => '092-561-7855',
            'email' => 'test112@example.com',
            'post_code' => '815-0042',
            'address' => '福岡市南区若久3-37-1',
            'area_id' => '1',
        ]);
        
        // 113四箇田小学校
        School::create([
            'school_name' => '四箇田',
            'school_number' => '0113',
            'tel_number' => '092-811-6103',
            'fax_number' => '092-811-1968',
            'email' => 'test113@example.com',
            'post_code' => '814-0176',
            'address' => '福岡市早良区四箇田団地56-1',
            'area_id' => '1',
        ]);
        
        // 114壱岐東小学校
        School::create([
            'school_name' => '壱岐東',
            'school_number' => '0114',
            'tel_number' => '092-811-6101',
            'fax_number' => '092-811-6152',
            'email' => 'test114@example.com',
            'post_code' => '819-0031',
            'address' => '福岡市西区橋本1-14-1',
            'area_id' => '1',
        ]);
        
        // 115石丸小学校
        School::create([
            'school_name' => '石丸',
            'school_number' => '0115',
            'tel_number' => '092-881-1336',
            'fax_number' => '092-881-4872',
            'email' => 'test115@example.com',
            'post_code' => '819-0025',
            'address' => '福岡市西区石丸3-9-25',
            'area_id' => '1',
        ]);
        
        // 116鶴田小学校
        School::create([
            'school_name' => '鶴田',
            'school_number' => '0116',
            'tel_number' => '092-566-5677',
            'fax_number' => '092-566-6008',
            'email' => 'test116@example.com',
            'post_code' => '811-1352',
            'address' => '福岡市南区鶴田3-7-1',
            'area_id' => '1',
        ]);
        
        // 117田島小学校
        School::create([
            'school_name' => '田島',
            'school_number' => '0117',
            'tel_number' => '092-844-2848',
            'fax_number' => '092-844-4478',
            'email' => 'test117@example.com',
            'post_code' => '814-0113',
            'address' => '福岡市城南区田島3-20-1',
            'area_id' => '1',
        ]);
        
        // 118愛宕小学校
        School::create([
            'school_name' => '愛宕',
            'school_number' => '0118',
            'tel_number' => '092-882-0264',
            'fax_number' => '092-882-4398',
            'email' => 'test118@example.com',
            'post_code' => '819-0015',
            'address' => '福岡市西区愛宕4-15-1',
            'area_id' => '1',
        ]);
        
        // 119福重小学校
        School::create([
            'school_name' => '福重',
            'school_number' => '0119',
            'tel_number' => '092-882-0400',
            'fax_number' => '092-882-4364',
            'email' => 'test119@example.com',
            'post_code' => '819-0022',
            'address' => '福岡市西区福重4-25-1',
            'area_id' => '1',
        ]);
        
        // 120三筑小学校
        School::create([
            'school_name' => '三筑',
            'school_number' => '0120',
            'tel_number' => '092-501-8740',
            'fax_number' => '092-501-8741',
            'email' => 'test120@example.com',
            'post_code' => '816-0887',
            'address' => '福岡市博多区三筑2-9-1',
            'area_id' => '1',
        ]);
        
        // 121 飯原小学校
        School::create([
            'school_name' => '飯原',
            'school_number' => '0121',
            'tel_number' => '092-862-2155',
            'fax_number' => '092-862-2156',
            'email' => 'test121@example.com',
            'post_code' => '814-0022',
            'address' => '福岡市早良区原7-3-1',
            'area_id' => '1',
        ]);

        // 122 青葉小学校
        School::create([
            'school_name' => '青葉',
            'school_number' => '0122',
            'tel_number' => '092-691-2301',
            'fax_number' => '092-691-2302',
            'email' => 'test122@example.com',
            'post_code' => '813-0025',
            'address' => '福岡市東区青葉3-9-1',
            'area_id' => '1',
        ]);
        
        // 123 奈多小学校
        School::create([
            'school_name' => '奈多',
            'school_number' => '0123',
            'tel_number' => '092-607-7177',
            'fax_number' => '092-607-7178',
            'email' => 'test123@example.com',
            'post_code' => '811-0205',
            'address' => '福岡市東区奈多団地40-1',
            'area_id' => '1',
        ]);
        
        // 124 野多目小学校
        School::create([
            'school_name' => '野多目',
            'school_number' => '0124',
            'tel_number' => '092-565-7651',
            'fax_number' => '092-565-7652',
            'email' => 'test124@example.com',
            'post_code' => '811-1347',
            'address' => '福岡市南区野多目2-6-1',
            'area_id' => '1',
        ]);
        
        // 125 高木小学校
        School::create([
            'school_name' => '高木',
            'school_number' => '0125',
            'tel_number' => '092-501-7521',
            'fax_number' => '092-501-7523',
            'email' => 'test125@example.com',
            'post_code' => '815-0004',
            'address' => '福岡市南区高木3-11-1',
            'area_id' => '1',
        ]);
        
        // 126 堤丘小学校
        School::create([
            'school_name' => '堤丘',
            'school_number' => '0126',
            'tel_number' => '092-863-7611',
            'fax_number' => '092-863-7671',
            'email' => 'test126@example.com',
            'post_code' => '814-0151',
            'address' => '福岡市城南区堤1-16-1',
            'area_id' => '1',
        ]);
        
        // 127 有住小学校
        School::create([
            'school_name' => '有住',
            'school_number' => '0127',
            'tel_number' => '092-831-5558',
            'fax_number' => '092-831-5559',
            'email' => 'test127@example.com',
            'post_code' => '814-0033',
            'address' => '福岡市早良区有田7-17-1',
            'area_id' => '1',
        ]);
        
        // 128 城原小学校
        School::create([
            'school_name' => '城原',
            'school_number' => '0128',
            'tel_number' => '092-882-0333',
            'fax_number' => '092-882-0312',
            'email' => 'test128@example.com',
            'post_code' => '819-0054',
            'address' => '福岡市西区上山門1-27-1',
            'area_id' => '1',
        ]);
        
        // 129 香椎浜小学校
        School::create([
            'school_name' => '香椎浜',
            'school_number' => '0129',
            'tel_number' => '092-672-8511',
            'fax_number' => '092-672-8510',
            'email' => 'test129@example.com',
            'post_code' => '813-0016',
            'address' => '福岡市東区香椎浜2-2-2',
            'area_id' => '1',
        ]);
        
        // 130 大池小学校
        School::create([
            'school_name' => '大池',
            'school_number' => '0130',
            'tel_number' => '092-561-1016',
            'fax_number' => '092-561-1046',
            'email' => 'test130@example.com',
            'post_code' => '815-0072',
            'address' => '福岡市南区多賀2-8-1',
            'area_id' => '1',
        ]);
        
        // 131 早良小学校
        School::create([
            'school_name' => '早良',
            'school_number' => '0131',
            'tel_number' => '092-804-5550',
            'fax_number' => '092-804-5512',
            'email' => 'test131@example.com',
            'post_code' => '811-1122',
            'address' => '福岡市早良区早良1-8-1',
            'area_id' => '1',
        ]);
        
        // 132 香椎下原小学校
        School::create([
            'school_name' => '香椎下原',
            'school_number' => '0132',
            'tel_number' => '092-682-3906',
            'fax_number' => '092-682-3907',
            'email' => 'test132@example.com',
            'post_code' => '813-0002',
            'address' => '福岡市東区下原1-4-1',
            'area_id' => '1',
        ]);
        
        // 133 弥生小学校
        School::create([
            'school_name' => '弥生',
            'school_number' => '0133',
            'tel_number' => '092-451-1935',
            'fax_number' => '092-451-1936',
            'email' => 'test133@example.com',
            'post_code' => '812-0893',
            'address' => '福岡市博多区那珂4-9-1',
            'area_id' => '1',
        ]);
        
        // 134 塩原小学校
        School::create([
            'school_name' => '塩原',
            'school_number' => '0134',
            'tel_number' => '092-551-1355',
            'fax_number' => '092-551-1429',
            'email' => 'test134@example.com',
            'post_code' => '815-0032',
            'address' => '福岡市南区塩原1-27-1',
            'area_id' => '1',
        ]);
        
        // 135 田村小学校
        School::create([
            'school_name' => '田村',
            'school_number' => '0135',
            'tel_number' => '092-864-4362',
            'fax_number' => '092-864-4691',
            'email' => 'test135@example.com',
            'post_code' => '814-0175',
            'address' => '福岡市早良区田村3-32-1',
            'area_id' => '1',
        ]);
        
        // 136 千早西小学校
        School::create([
            'school_name' => '千早西',
            'school_number' => '0136',
            'tel_number' => '092-682-1089',
            'fax_number' => '092-682-1090',
            'email' => 'test136@example.com',
            'post_code' => '813-0016',
            'address' => '福岡市東区香椎浜1-4-1',
            'area_id' => '1',
        ]);
        
        // 137 東箱崎小学校
        School::create([
            'school_name' => '東箱崎',
            'school_number' => '0137',
            'tel_number' => '092-641-9351',
            'fax_number' => '092-641-9352',
            'email' => 'test137@example.com',
            'post_code' => '812-0053',
            'address' => '福岡市東区箱崎5-11-20',
            'area_id' => '1',
        ]);
        
        // 138 柏原小学校
        School::create([
            'school_name' => '柏原',
            'school_number' => '0138',
            'tel_number' => '092-565-4555',
            'fax_number' => '092-565-4556',
            'email' => 'test138@example.com',
            'post_code' => '811-1353',
            'address' => '福岡市南区柏原5-21-1',
            'area_id' => '1',
        ]);
        
        // 139 飯倉中央小学校
        School::create([
            'school_name' => '飯倉中央',
            'school_number' => '0139',
            'tel_number' => '092-845-5425',
            'fax_number' => '092-845-5426',
            'email' => 'test139@example.com',
            'post_code' => '814-0161',
            'address' => '福岡市早良区飯倉3-6-35',
            'area_id' => '1',
        ]);
        
        // 140 玄洋小学校
        School::create([
            'school_name' => '玄洋',
            'school_number' => '0140',
            'tel_number' => '092-806-8146',
            'fax_number' => '092-806-8147',
            'email' => 'test140@example.com',
            'post_code' => '819-0167',
            'address' => '福岡市西区今宿町3-38-1',
            'area_id' => '1',
        ]);
        
        // 141 小田部小学校
        School::create([
            'school_name' => '小田部',
            'school_number' => '0141',
            'tel_number' => '092-845-8330',
            'fax_number' => '092-845-8331',
            'email' => 'test141@example.com',
            'post_code' => '814-0032',
            'address' => '福岡市早良区小田部6-4-1',
            'area_id' => '1',
        ]);
        
        // 142 香陵小学校
        School::create([
            'school_name' => '香陵',
            'school_number' => '0142',
            'tel_number' => '092-682-0022',
            'fax_number' => '092-682-0063',
            'email' => 'test142@example.com',
            'post_code' => '813-0016',
            'address' => '福岡市東区香椎浜4-3-2',
            'area_id' => '1',
        ]);
        
        // 143 百道浜小学校
        School::create([
            'school_name' => '百道浜',
            'school_number' => '0143',
            'tel_number' => '092-845-7750',
            'fax_number' => '092-845-7751',
            'email' => 'test143@example.com',
            'post_code' => '814-0001',
            'address' => '福岡市早良区百道浜4-24-1',
            'area_id' => '1',
        ]);
        
        // 144 松島小学校
        School::create([
            'school_name' => '松島',
            'school_number' => '0144',
            'tel_number' => '092-612-5511',
            'fax_number' => '092-612-5512',
            'email' => 'test144@example.com',
            'post_code' => '812-0062',
            'address' => '福岡市東区松島1-39-1',
            'area_id' => '1',
        ]);
        
        // 145 横手小学校
        School::create([
            'school_name' => '横手',
            'school_number' => '0145',
            'tel_number' => '092-501-9275',
            'fax_number' => '092-501-9334',
            'email' => 'test145@example.com',
            'post_code' => '811-1311',
            'address' => '福岡市南区横手4-22-1',
            'area_id' => '1',
        ]);
        
        // 146 三苫小学校
        School::create([
            'school_name' => '三苫',
            'school_number' => '0146',
            'tel_number' => '092-606-6075',
            'fax_number' => '092-606-6058',
            'email' => 'test146@example.com',
            'post_code' => '811-0201',
            'address' => '福岡市東区三苫7-2-1',
            'area_id' => '1',
        ]);
        
        // 147 愛宕浜小学校
        School::create([
            'school_name' => '愛宕浜',
            'school_number' => '0147',
            'tel_number' => '092-885-0910',
            'fax_number' => '092-885-0915',
            'email' => 'test147@example.com',
            'post_code' => '819-0013',
            'address' => '福岡市西区愛宕浜4-42-1',
            'area_id' => '1',
        ]);
        
        // 148 姪北小学校
        School::create([
            'school_name' => '姪北',
            'school_number' => '0148',
            'tel_number' => '092-882-1004',
            'fax_number' => '092-882-1225',
            'email' => 'test148@example.com',
            'post_code' => '819-0002',
            'address' => '福岡市西区姪の浜2-20-23',
            'area_id' => '1',
        ]);
        
        // 149 照葉小学校
        School::create([
            'school_name' => '照葉',
            'school_number' => '0149',
            'tel_number' => '092-681-1310',
            'fax_number' => '092-681-1311',
            'email' => 'test149@example.com',
            'post_code' => '813-0017',
            'address' => '福岡市東区香椎照葉2-2-1',
            'area_id' => '1',
        ]);
        
        // 150 西都小学校
        School::create([
            'school_name' => '西都',
            'school_number' => '0150',
            'tel_number' => '092-834-2312',
            'fax_number' => '092-807-2472',
            'email' => 'test150@example.com',
            'post_code' => '819-0377',
            'address' => '福岡市西区女原北12-45',
            'area_id' => '1',
        ]);
        
        // 151 照葉北小学校
        School::create([
            'school_name' => '照葉北',
            'school_number' => '0151',
            'tel_number' => '092-692-2522',
            'fax_number' => '092-661-2033',
            'email' => 'test151@example.com',
            'post_code' => '813-0017',
            'address' => '福岡市東区香椎照葉7丁目5-1',
            'area_id' => '1',
        ]);
        
        // 152 西都北小学校
        School::create([
            'school_name' => '西都北',
            'school_number' => '0152',
            'tel_number' => '092-834-9020',
            'fax_number' => '092-834-9021',
            'email' => 'test152@example.com',
            'post_code' => '819-0379',
            'address' => '福岡市西区北原2-40-1',
            'area_id' => '1',
        ]);
        
        // 153 ジーズ小学校（ダミー）
        School::create([
            'school_name' => 'ジーズ',
            'school_number' => '0153',
            'tel_number' => '000-000-0000',
            'fax_number' => '000-000-0000',
            'email' => 'test153@example.com',
            'post_code' => '000-0000',
            'address' => '福岡市西区北原2-40-1',
            'area_id' => '1',
        ]);

    }
}
