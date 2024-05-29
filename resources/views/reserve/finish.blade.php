<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予約完了</title>
</head>

<x-app-layout>
<div class="max-w-2xl mx-auto p-4 bg-white shadow-lg mt-6 rounded">
        <h2 class="text-xl font-bold mb-4 text-center">予約完了</h2>
        <p class="mb-4">教育コンシェルジュが予約を承りました。日にちが確定次第、メールにてお知らせします。詳細を確認したい方は以下のボタンを押してPDFを印刷してください。</p>

        <a href="{{route('pdf.output',$reserve->id)}}" target="_blank" class="block mb-4">
            <x-primary-button class="w-full bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded transition duration-300 ease-in-out">申込用紙pdfのダウンロード</x-primary-button>
        </a>

         <a href="{{route('top')}}">
           <button class="w-full bg-blue-500 hover:bg-blue-200 font-bold py-2 px-4 rounded transition duration-300 ease-in-out">終了</button>
         </a>
         
</div>

    <div>
   　　 @include('components.teacher.searchform')
    </div>
</x-app-layout>