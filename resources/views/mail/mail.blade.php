<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>授業の予約が成立しました</title>
</head>
<body>
   
    <p>{{$school_name}}</p> 
    <p>予約者：{{$user_name}}</p>

    <p>以下の内容で授業の予約が成立しました。</p>
    ーーーー
    <p>{{$content}}</p>
    <p>{{$url}}</p>
    ーーーー

    <p>予約内容についての詳細や変更がある場合、担当者よりご連絡いたします。</p>
    <p>何かご不明点、変更点がございましたら、お気軽にご連絡ください。</p>
    <p>ご予約いただき、誠にありがとうございます。</p>
</body>
</html>