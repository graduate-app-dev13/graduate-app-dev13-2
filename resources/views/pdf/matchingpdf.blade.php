<!-- resources/views/pdf/matchingpdf.blade.php -->
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SPOT TEACHER 授業決定書</title>
        
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
            
            /* セルとヘッダーのスタイル */
            .table th, .table td {
              border: 2px solid #ddd; /* 細いボーダー */
              padding: 8px; /* 内側の余白 */
              text-align: left; /* 左寄せテキスト */
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
            
            /* ヘッダーのセンタリングと強調 */
            .table thead th {
              text-align: center; /* 中央寄せテキスト */
              font-weight: bold; /* フォントの太さ */
            }
            
            .info{
                width: 100%;
                 margin-left: 10px; /* 下部の余白 */
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
    <!--===============================================================================-->
    <!--時間の表示設定-->
    @php
    $dateInstance = \Carbon\Carbon::parse($matching->matching_date);
    $dateInstance->setLocale('ja');
    $formattedDate = $dateInstance->format('m月d日') . $dateInstance->isoFormat('(ddd)');
    
    $formattedStartTime = \Carbon\Carbon::parse($matching->start_time)->format('H時i分');
    $formattedEndTime = \Carbon\Carbon::parse($matching->finish_time)->format('H時i分');
    @endphp
<!--======================================================================================-->
    <body>
        <div class="bg">
            <div class="container">
                <h1 class="heading">授　業　決　定　書</h1>
                <p class="date"> {{ $matching->updated_at->format('m月d日') }}（{{ $matching->updated_at->isoFormat('ddd') }}）</p>
                <P class="note-text name-p">  この決定書は企業（団体）・学校様どちらにも同じものをお渡ししています。</P>
                
                <table class="table">
                    
                    <tbody>
                        <thead>
                            <tr>
                                 <th class="t-head" colspan="4"><strong>授業（企業・団体）情報</strong></th>
                            </tr>
                        </thead>
                        
                        <tr>
                            <th class="title">担当会社名</th>
                            <td class="text">{{ $company->company_name}}</td>
                            <th class="title">代表者名</th>
                            <td class="text">◯◯　◯◯</td>
                        </tr>
                        
                        <tr>
                            <th class="title">住所</th>
                            <td class="text" colspan="3"><p>{{ $company->address}}</p></td>
                        </tr>
                        
                        <tr>
                            <th class="title">授業名</th>
                            <td class="text">{{ $lesson->lesson_name }}</td>
                            <th class="title">授業形式</th>
                            <td class="text">{{ $lesson->lesson_type }}</td>
                        </tr>
                        
                        <tr>
                            <th class="title">授業内容</th>
                            <td class="text" colspan="3"><p>{{ $lesson->lesson_detail}}</p></td>
                        </tr>
                        
                        <tr>
                            <th class="title">補足</th>
                            <td class="text" colspan="3">##</td>
                        </tr>
                    </tbody>
                </table>
                    
                <table class="table">
                    <tbody>
                        <thead>
                            <tr>
                                <th class="t-head" colspan="4"><strong>学校情報</strong></th>
                            </tr>
                        </thead>
                        
                        <tr>
                            <th class="title">学校名</th>
                            <td class="text">{{ $school->school_name }}小学校</td>
                            <th class="title">代表者</th>
                            <td class="text">{{ $user->name }}</td>
                        </tr>
                        
                        <tr>
                            <th class="title">住 所</th>
                            <td class="text" colspan="3">{{ $school->address }}</td>
                        </tr>
                        
                        <tr>
                            <th class="title">授業実施日</th>
                            <td class="text">{{$formattedDate}}</td>
                            <th class="title">時間</th>
                             <td class="text">{{$formattedStartTime}}から{{$formattedEndTime}}まで</td>
                         </tr>
                         
                        <tr>
                            <th class="title">教科</th>
                            <td class="text">{{ $lessonuserreservation->subject }}</td>
                            <th class="title">学年</th>
                            <td class="text">{{ $lessonuserreservation->graduate }}{{ $lessonuserreservation->number_student }}人</td>
                         </tr>
                         
                         
                        <!--<tr>-->
                        <!--    <th class="title">学年</th>-->
                        <!--    <td class="text">6年生</td>-->
                             
                        <!--    <th class="title">実施場所</th>-->
                        <!--    <td class="text">体育館</td>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--    <th class="title">実施人数</th>-->
                        <!--    <td class="text" colspan="3">合計５４人</td>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--    <th class="title">準備物（児童）</th>-->
                        <!--    <td class="text" colspan="3"></td>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--    <th class="title">準備物（会場）</th>-->
                        <!--    <td class="text" colspan="3"></td>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--    <th class="title">補足</th>-->
                        <!--    <td class="text" colspan="3"></td>-->
                        <!--</tr>-->
                    </tbody>
                </table>

                  <!--info インスタ note-->
                <table class="info">
                    <tr>
                        <!--note-->
                        <td colspan="3" class="link">
                            <img class="note" src="{{ asset('images/su_instagram_link.png') }}" alt="note">
                        </td>
                        <!--名前-->
                        <td colspan="3" class="name">

                            <p class="name-p instagram-text">←先生方に役立つ情報Instagram&nbsp;&nbsp;&nbsp;&nbsp;明日すぐに使える資料noteにて配布中→</p>
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