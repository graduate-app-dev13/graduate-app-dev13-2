<!-- resources/views/pdf/pdf.blade.php -->
@php
$formattedFirstDate = \Carbon\Carbon::parse($reserve->first_choice_date)->format('m月d日');
$dayOfWeekFirst = \Carbon\Carbon::parse($reserve->first_choice_date)->isoFormat('ddd');
$firstStartTime = \Carbon\Carbon::parse($reserve->first_choice_start_time)->format('H:i');
$firstEndTime = \Carbon\Carbon::parse($reserve->first_choice_end_time)->format('H:i');

$formattedSecondDate = \Carbon\Carbon::parse($reserve->second_choice_date)->format('m月d日');
$dayOfWeekSecond = \Carbon\Carbon::parse($reserve->second_choice_date)->isoFormat('ddd');
$secondStartTime = \Carbon\Carbon::parse($reserve->second_choice_start_time)->format('H:i');
$secondEndTime = \Carbon\Carbon::parse($reserve->second_choice_end_time)->format('H:i');

$formattedThirdDate = \Carbon\Carbon::parse($reserve->third_choice_date)->format('m月d日');
$dayOfWeekThird = \Carbon\Carbon::parse($reserve->third_choice_date)->isoFormat('ddd');
$thirdStartTime = \Carbon\Carbon::parse($reserve->third_choice_start_time)->format('H:i');
$thirdEndTime = \Carbon\Carbon::parse($reserve->third_choice_end_time)->format('H:i');
@endphp

<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>申込用紙</title>
        <style>
            /* 追加のCSSスタイルをインラインで記述 */
            @font-face{
                font-family: 'ipag';
                font-style: normal;
                font-weight: normal;
                src: url('{{ storage_path('fonts/ipag.ttf') }}');
            }
            @font-face{
                font-family: 'ipag';
                font-style: normal;
                font-weight: bold;
              src: url('{{ storage_path('fonts/ipag.ttf') }}');
            }
            /* PDFの基本スタイル */
            body {
              margin: 0;
              padding: 0;
              box-sizing: border-box;
            }
            
            /* A4サイズのページ設定 */
            @page {
              size: A4;
              margin: 0mm; /* PDFのマージンを設定する */
            }
            
            /* コンテナに適切な余白を設定 */
            .container {
              padding: 24mm; /* 通常のA4用紙の余白は約24mmです。 */
              width: auto;
              height: auto;
            }
            
            /*日付の位置*/
            .date{
                /*右端に*/
                 text-align: right;
            }
            
            /* テーブルの幅とレイアウト */
            .table {
              width: 100%;
              border-collapse: collapse;
              margin-bottom: 10px; /* 下部の余白 */
            }
            
            
            th, td {
                  padding: 10px;
                  max-width: 300px; /* テキストの最大幅を設定（適宜調整） */
                  word-wrap: break-word; /* 長い単語を改行 */
                  overflow-wrap: break-word; /* テキストを必要に応じて改行 */
                  /*white-space: normal; */
                  /* 空白の処理と自動改行を許可 */
                  overflow: hidden; /* オーバーフローした内容は非表示 */
            }
            
            /* セルとヘッダーのスタイル */
            .table th, .table td {
              border: 2px solid #ddd; /* 細いボーダー */
              padding: 8px; /* 内側の余白 */
              text-align: left; /* 左寄せテキスト */
            }
            
            /* ヘッダーのセンタリングと強調 */
            .table thead th {
              text-align: center; /* 中央寄せテキスト */
              font-weight: bold; /* フォントの太さ */
            }
            
          
            
            /* 会社情報、学校情報、希望日のセクションスタイル */
            .heading, .date, .schoolinfo, .title, .text {
              font-size: 10pt; /* フォントサイズを10ポイントに設定 */
            }
            
                       /*文章のタイトル部分*/
            .heading{
                background-color: black; /* 背景を黒に */
                text-align: center;      /* テキストを真ん中に */
                color: white;            /* テキストを白に */
                font-size: 24px;
            }
            
            .title,
            .t-head{
                background-color:#CCCCCC;/*背景をgレー系に*/
            }
            .t-head{
                text-align: center;/*テキストの位置を真ん中に*/ 
            }
            /*最後の文章の部分*/
            .info{
                width: 100%;
                 margin-left: 10px; /* 下部の余白 */
            }
            
            .name{
                width:150px;
            }
            
            .name-p{
                font-size: 12px;
            }
            
            .instagram-text{
                　text-align:left;
            }
            
            .com-text{
                text-align:center;
            }
            
            .note-text, 
            .president-text{
                 text-align:end;
            }
            
            /* リンク画像のスタイル */
            .link{
                width:40px;
            }
            
            .note, .instagram {
              width: 100%; /* 幅を100%に設定 */
              height: auto; /* 高さを自動調整 */
            }
        </style>
    </head>

    <body>
        <div class="bg">
            <div class="container">
                <h1 class="heading">申　込　用　紙</h1>
             
             　<!--日付の表示の変換-->
                @php
                $formattedDate = \Carbon\Carbon::parse($reserve->updated_at)->format('m月d日');
                $dayOfWeek = \Carbon\Carbon::parse($reserve->updated_at)->isoFormat('ddd');
                @endphp

                <!--制作した日付-->
                <p class="date">{{ $formattedDate }}（{{ $dayOfWeek }})</p>
            
                <!--授業（企業・団体）情報報-->
                <table class="table">
                    <tbody>
                        <thead>
                           <tr>
                                <th class="t-head" colspan="4"><strong>授業（企業・団体）情報</strong></th>
                            </tr>
                    　　</thead>

                        <tr>
                            <td class="title">会社名</td>
                            <td class="text">{{ $company->company_name }}</td>
                            <td class="title">代表者名</td>
                            <td class="text">◯◯　◯◯</td>
                        </tr>
                        <tr>
                            <td class="title">住所</td>
                            <td class="text" colspan="3">〒{{ $company->post_code }} {{ $company->address }}</td>
                        </tr>
                        <tr>
                            <td class="title">授業名</td>
                            <td class="text">{{ $lesson->lesson_name }}</td>
                            <td class="title">授業形式</td>
                            <td class="text">{{ $lesson->lesson_type }}</td>
                        </tr>
                        <tr>
                            <td class="title" >授業内容</td>
                            <td class="text" colspan="3"><p>{{ $lesson->lesson_detail }}</p></td>
                        </tr>
                        <tr>
                            <td class="title" ></td>
                            <td class="text" colspan="3"></td>
                        </tr>
    
                        @php
                        $formattedStartDate = \Carbon\Carbon::parse($lesson->started_date)->format('m月d日');
                        $dayOfWeekStart = \Carbon\Carbon::parse($lesson->started_date)->isoFormat('ddd');
                        
                        $formattedEndDate = \Carbon\Carbon::parse($lesson->finished_date)->format('m月d日');
                        $dayOfWeekEnd = \Carbon\Carbon::parse($lesson->finished_date)->isoFormat('ddd');
                        @endphp

                        <tr>
                            <td class="title">申し込み可能時期</td>
                            <td class="text" colspan="3">{{ $formattedStartDate }}（{{ $dayOfWeekStart }}）から{{ $formattedEndDate }}（{{ $dayOfWeekEnd }}）</td>
                        </tr>
                    </tbody>
                </table><!--授業（企業・団体）情報報-->

                <!--学校情報-->
                <table class="table">
                    <tbody>
                        <thead>
                            <tr>
                                <th class="t-head" colspan="4"><strong>学校情報</strong></th>
                            </tr>
                    　　</thead>
                    　　
                        <tr class="schoolinfo">
                            <td class="title">学校名</td>
                            <td class="text">{{ $school->school_name }}小学校</td>
                            <td class="title">担当教員名</td>
                            <td class="text">{{ $teacher->name }}</td>
                        </tr>
                        <tr class="schoolinfo">
                            <td class="title">住 所</td>
                            <td class="text" colspan="3">〒{{ $school->post_code }} {{ $school->address }}</td>
                        </tr>
                          
                        
                        <tr class="schoolinfo">
                            <td class="title">希望教科</td>
                            <td class="text">{{ $reserve->subject }}</td>
                            <td class="title">学年</td>
                            <td class="text">{{ $reserve->graduate }}{{ $reserve->number_student }}人</td>
                        </tr>
                    </tbody>
                </table> <!--学校情報-->    
                
                <!--授業希望日-->       
                <table class="table">
                    <tbody>
                        <thead>
                            <tr>
                                <th class="t-head" colspan="4"><strong>授業希望日</strong></th>
                            </tr>
                    　　</thead>
                    　　
                　　       <tr>
                            <td class="title">第１授業希望日</td>
                            <td  class="text" colspan="3">{{ $formattedFirstDate }}（{{ $dayOfWeekFirst }}）{{ $firstStartTime }} - {{ $firstEndTime }}</td>
                        </tr>
                        <tr>
                            <td class="title">第２授業希望日</td>
                            <td  class="text" colspan="3">{{ $formattedSecondDate }}（{{ $dayOfWeekSecond }}）{{ $secondStartTime }} - {{ $secondEndTime }}</td>
                        </tr>
                        <tr>
                           <td class="title">第３授業希望日</td>
                           <td  class="text" colspan="3">{{ $formattedThirdDate }}（{{ $dayOfWeekThird }}）{{ $thirdStartTime }} - {{ $thirdEndTime }}</td>
                        <tr>
                    </tbody>
                </table><!--授業希望日-->    
 
            
                <!--info インスタ note-->
                <table class="info">
                    <tr>
                        <!--note-->
                        <td colspan="3" class="link">
                            <img class="note" src="{{ asset('images/su_instagram_link.png') }}" alt="note">
                        </td>
                        <!--名前-->
                        <td colspan="3" class="name">
                             <p class="name-p instagram-text">←先生方に役立つ情報Instagram&nbsp;明日すぐに使える資料noteにて配布中→</p>
                            <p class="name-p note-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            <p class="name-p com-text">SPOT TEACHER〜会いたい大人に会えるプラットフォーム〜</p>
                            <p class="name-p com-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;代表　松下　ゆか理</p>
                            
                        </td>
                        <!--インスタ-->
                        <td colspan="3" class="link">
                            <img class="instagram" src="{{ asset('images/su_note_link.png') }}" alt="instagram">
                        </td>
                    </tr>
                </table><!--info インスタ note-->
            </div> <!--container-->
        </div><!--bgo-->
    </body>
</html>




            <!-- <div class="info">-->
                <!--画像のサイズを調整する-->
            <!--    <div class="link">-->
            <!--        <img class="instagram" src="{{ asset('images/su_instagram_link.png') }}" alt="instagram">-->
            <!--　　</div>-->
                 <!--幅を調整する-->
            <!--    <div class="link name">-->
            <!--        <p>←先生方に役立つ情報Instagram</p>-->
            <!--        <p class="president">明日すぐに使える資料noteにて配布中→︎︎︎︎</p>-->
                    <!--左より-->
            <!--        <h3 class="company-name">〜会いたい大人に会えるプラットフォーム〜</h3>-->
                    <!--右寄り-->
            <!--        <h3 class="president"> 代表　　松下　ゆか理</h3>-->
            <!--    </div>-->
                 <!--画像のサイズを調整する-->
            <!--    <div class="link">-->
            <!--        <img class="note" src="{{ asset('images/su_note_link.png') }}" alt="note">-->
            <!--    </div>-->
            <!--</div><!--info-->