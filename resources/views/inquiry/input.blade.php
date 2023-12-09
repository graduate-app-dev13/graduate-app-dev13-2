<!--inquiry.input.blade.php-->
<x-app-layout>
    
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('お問い合わせ入力フォーム') }}
    </h2>
  </x-slot>
  
  <div class="container mx-auto p-4 flex justify-center items-center min-h-screen bg-gray-100">

            <form action="{{ route('inquiry.store') }}" method="POST" class="w-full sm:max-w-3xl">
                <!----------------------------------------------------------------------->
                @csrf
                @include('common.errors')
                @isset($lesson)
                 <!--  授業情報 -->
                <div class="mb-4">
                    <h2 class="text-xl font-semibold mb-2">授業情報</h2>
                    <label for="" class="block mb-2">授業名:</label>
                    <p id="lesson_name" name="lesson_name" class="border p-2 w-full sm:w-2/1">{{$lesson->lesson_name}}</p>
                </div>
                
                <div class="mb-4">
                    <label for="" class="block mb-2">授業内容:</label>
                    <p name="school_name" class="border p-2 w-full sm:w-2/1">{{$lesson->lesson_detail}}</p>
                </div>
                 
                <div class="mb-4">
                    <label for="" class="block mb-2">授業形式:</label>
                    <p  class="border p-2 w-full sm:w-2/1">{{$lesson->lesson_type}}</p>
                </div>
                
                <div class="mb-4">
                    <label for="" class="block mb-2">キャリア教育:</label>
                    <p  class="border p-2 w-full sm:w-2/1">{{$lesson->supports_career_edu}}</p>
                </div>
                
                <div class="mb-4">
                    <label for="" class="block mb-2">申し込み可能時期:</label>
                    <p  class="border p-2 w-full sm:w-2/1">{{$lesson->started_date}}から{{$lesson->finished_date}}</p>
                </div>
                
                @endisset
    
                <div class="mb-4">
                    <label  class="block mb-2">学校名:</label>
                    <p  class="border p-2 w-full sm:w-2/1">{{$school->school_name}}</p>
                </div>
    
                <div class="mb-4">
                    <label for="" class="block mb-2">学校住所:</label>
                     <p  class="border p-2 w-full sm:w-2/1">〒{{$school->post_code}}</p>
                     <p  class="border p-2 w-full sm:w-2/1">{{$school->address}}</p>
                </div>
    
                <!-- 学校情報 -->
                <div class="mb-4">
                    <label for="school_tel" class="block mb-2">学校電話番号:</label>
                    <p  class="border p-2 w-full sm:w-2/1">{{$school->tel_number}}</p>
                </div>
    
                <div class="mb-4">
                    <label for="school_fax" class="block mb-2">学校FAX番号:</label>
                    <p  class="border p-2 w-full sm:w-2/1">{{$school->fax_number}}</p>
                </div>
                
                <div class="mb-4">
                    <label for="email" class="block mb-2">メール:</label>
                    <p  class="border p-2 w-full sm:w-2/1">{{$school->email}}</p>
                </div>
    
    
                <!-- 担当教員情報 -->
                 <div class="mb-4">
                     <h2 class="text-xl font-semibold mb-2">担当教員情報</h2>
                    <label for="teacher_name" class="block mb-2">担当教員名:</label>
                    <p  class="border p-2 w-full sm:w-2/1">{{$teacher->name}}</p>
                </div>
                
                           <!-- 授業希望日 ここに入力された内容は、reservations.tableに保存-->
                <div class="mb-4">
                    <h2 class="text-xl font-semibold mb-2">授業希望日</h2>
                    <label for="category_id" class="block mb-2">問い合わせカテゴリー</label>
                    <!--<input type=""  name="first_choice_date" class="border p-2 w-full sm:w-2/1" required autofocus/>-->
                    <select name="category_id" required>
                        <option value="">▼選択してください</option>
                            <option value="1">質問</option>
                            <option value="2">要望</option>
                            <option value="3">相談</option>
                        </select>
                    
                    <label for="inquiry_detail" class="block mb-2">問い合わせ内容:</label>
                    <!--<input type="text" name="inquiry_detail" class="border p-4 w-full h-100" required autofocus/>-->
                   <textarea name="inquiry_detail" rows="10" cols="50" class="border p-2 w-full" required autofocus></textarea>
                </div>
                
                 <!-- 情報 -->
   　　　　　　　　　<input type="hidden" name="lesson_id" value="{{ $lesson->id }}"/>
                <!------------------------------------------------------------------->
    
                <!-- 送信ボタン 右よりにしたい-->
                <div class="mt-6">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 ml-auto mr-auto sm:w-1/5">問い合わせをする</button>
                </div>
   　　　 </form>
     </div>
</x-app-layout>