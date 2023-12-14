<!--resourses/views/reserve/show.blade.php-->
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
    <title>授業予約 確認ページ</title>
    <style>
        /* 追加のCSSスタイルをインラインで記述 */
        table {
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
        }
        .text{
            width:70%;
        }
        .title{
            width:15%;
            background-color:rgb(176, 175, 160)
        }
        th, td {
            padding: 10px;
        }
        .my-button {
        font-size: 16px; /* 例えば16pxのフォントサイズを設定 */
        padding: 10px 20px; /* 上下10px、左右20pxのパディングを設定 */
        border: none; /* 枠線なし */
        border-radius: 5px; /* 角丸の半径を5pxに設定 */
        background-color: #007bff; /* Bootstrapのプライマリーボタンに似た色 */
        color: white; /* 文字色を白に設定 */
        cursor: pointer; /* ホバーした時のカーソルをポインターに設定 */
        display: inline-block; /* インラインブロック要素として表示 */
        text-align: center; /* テキストを中央寄せに設定 */
        text-decoration: none; /* テキストの下線をなしに設定 */
        -webkit-transition: background-color 0.3s ease; /* 背景色の変更を滑らかに */
        transition: background-color 0.3s ease; /* 背景色の変更を滑らかに */
        }

        .my-button:hover {
        background-color: #0056b3; /* ホバー時の背景色を変更 */
}



    /* 他の要素に対するスタイルもここで追加できます */
    </style>
</head>

<x-app-layout>
    <div class="bg m-auto">
        
        <div class="container px-6 p-4">{{-- ページの真ん中に来るようにしたい。 --}}
            <table class="table max-w-4xl mx-auto grid-cols-4 gap-6 md:grid-cols-8 lg:grid-cols-12">
                <tbody>
                    <thead>
                        <tr>
                            <th class="title text-center" colspan="4"><strong>授業情報</strong></th>
                        </tr>
                    </thead>
                    <tr>
                        <td class="title">授業名</td>
                        <td>{{ $lesson->lesson_name }}</td>
                        <td class="title">授業形式</td>
                        <td>{{ $lesson->lesson_type }}</td>
                    </tr>
                    <tr>
                        <td class="title">授業内容</td>
                        <td colspan="3">{{ $lesson->lesson_detail }}</td>
                    </tr>

                    <tr>
                        <td class="title">申し込み可能時期</td>
                        <td colspan="3">{{ $lesson->started_date }}から{{ $lesson->finished_date }}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table max-w-4xl mx-auto">
                <tbody>
                    <thead>
                        <tr>
                            <th class="title text-center" colspan="4"><strong>会社情報</strong></th>
                        </tr>
                    </thead>
                    <tr>
                        <td class="title">担当会社名</td>
                        <td>{{ $company->company_name }}</td>
                        <td class="title">住所</td>
                        <td>〒{{ $company->post_code }}{{ $company->address }}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table max-w-4xl mx-auto">
                <tbody>
                    <thead>
                        <tr>
                            <th class="title text-center" colspan="6"><strong>学校情報</strong></th>
                        </tr>
                    </thead>
                    <tr>
                        <td class="title">学校名</td>
                        <td>{{ $school->school_name }}小学校</td>
                        <td class="title">住所</td>
                        <td colspan="3">〒{{ $school->post_code }}　{{ $school->address }}</td>
                    </tr>
                    <tr>
                        <td class="title">担当教員名</td>
                        <td>{{ $user->name }}</td>
                        <td class="title">希望内容</td>
                        <td colspan="3">教科:{{ $reserve->subject }} 学年：{{ $reserve->graduate }}{{ $reserve->number_student }}人</td>
                    </tr>
                    <!--<tr>-->
                    <!--    <td class="title">希望教科</td>-->
                    <!--    <td>学年{{$reserve->graduate}}教科{{$reserve->subject}}</td>-->
                    <!--    <td class="title">児童生徒の人数{{$reserve->number_student}}</td>-->
                    <!--    <td></td>-->
                    <!--</tr>-->
                </tbody>
            </table>

            <table class="table max-w-4xl mx-auto">
                <tbody>
                    <thead>
                        <tr>
                            <th class="title text-center" colspan="2"><strong>授業希望日</strong></th>
                        </tr>
                    </thead>
                    <tr>
                        <td class="title">第１授業希望日</td>
                        <td>{{ $formattedFirstDate }}（{{ $dayOfWeekFirst }}）{{ $firstStartTime }} - {{ $firstEndTime }}</td>
                    </tr>
                    <tr>
                        <td class="title">第２授業希望日</td>
                        <td>{{ $formattedSecondDate }}（{{ $dayOfWeekSecond }}）{{ $secondStartTime }} - {{ $secondEndTime }}</td>
                    </tr>
                    <tr>
                        <td class="title">第３授業希望日</td>
                        <td>{{ $formattedThirdDate }}（{{ $dayOfWeekThird }}）{{ $thirdStartTime }} - {{ $thirdEndTime }}</td>
                    </tr>
                </tbody>
            </table>

                @csrf
                <section>
                    <div class="container px-6 m-auto">
                        <div class="grid grid-cols-4 gap-6 md:grid-cols-8 lg:grid-cols-12">
                            <div class="col-span-4 max-w-4xl mx-auto">
                                <div class="section">
                                    <a href="{{ route('reserve.finish',$reserve->id) }}">
                                    <x-primary-button class="ml-3">予約確定</x-primary-button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-span-4 max-w-4xl mx-auto">
                                    <div class="section">
                                    <form action="{{ route('reserve.edit',$reserve->id) }}" method="GET" class="text-left">
                                    @csrf
                                    <button class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center  mr-2 mb-2">訂正する</button>
                                    </form>
                                    </div>
                            </div>

                            <div class="col-span-4 max-w-4xl mx-auto">
                                <div class="section">
                                <form action="{{ route('reserve.destroy',$reserve->id) }}" method="POST" class="text-left">
                                    @method('delete')
                                    @csrf
                                    <button class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center  mr-2 mb-2">予約中止</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
</x-app-layout>