<!--resourses/views/reserve/edit.blae.php-->

<!--<!DOCTYPE html>-->
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('授業予約情報修正フォーム') }}
    </h2>
  </x-slot>
  <div class="container mx-auto p-4 flex justify-center items-center min-h-screen bg-gray-100">

            <form action="{{ route('reserve.update',$reserve->id) }}" method="POST" class="w-full sm:max-w-3xl">
                <!----------------------------------------------------------------------->
                <h1 class="text-2xl font-semibold mb-4">授業予約情報修正フォーム</h1>
                 @method('put')
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
                    <label for="" class="block mb-2">住所:</label>
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
                    <label for="email" class="block mb-2">学校FAX番号:</label>
                    <p  class="border p-2 w-full sm:w-2/1">{{$school->email}}</p>
                </div>
    
    
                <!-- 担当教員情報 -->
                <div class="mb-4">
                     <h2 class="text-xl font-semibold mb-2">担当教員情報</h2>
                    <label for="teacher_name" class="block mb-2">担当教員名:</label>
                    <p  class="border p-2 w-full sm:w-2/1">{{$teacher->teacher_name}}</p>
                </div>
    
                <!-- 授業希望日 ここに入力された内容は、reservations.tableに保存-->
                <div class="mb-4">
                    <h2 class="text-xl font-semibold mb-2">授業希望日</h2>
                    <label for="first_choice_date" class="block mb-2">第１授業希望日:</label>
                    <input type="date"  name="first_choice_date" class="border p-2 w-full sm:w-2/1" value="{{$reserve->first_choice_date}}" required autofocus/>
                    <!-- <label for="first_choice_date" class="block mb-2">時間帯:</label>-->
                    <!--<input type="time"  name="first_choice_date" class="border p-2 w-full sm:w-2/1" />-->
                    
                    <label for="second_choice_date" class="block mb-2">第２授業希望日:</label>
                    <input type="date"  name="second_choice_date" class="border p-2 w-full sm:w-2/1" value="{{$reserve->second_choice_date}}" required autofocus/>
                    <!--<label for="second_choice_date" class="block mb-2">時間帯:</label>-->
                    <!--<input type="time"  name="second_choice_date" class="border p-2 w-full sm:w-2/1" />-->
                    
                    <label for="third_choice_date" class="block mb-2">第３授業希望日:</label>
                    <input type="date"  name="third_choice_date" class="border p-2 w-full sm:w-2/1" value="{{$reserve->third_choice_date}}" required autofocus/>
                    <!--<label for="third_choice_date" class="block mb-2">時間帯:</label>-->
                    <!--<input type="time"  name="third_choice_date" class="border p-2 w-full sm:w-2/1" />-->
                </div>
                
   　
                <!------------------------------------------------------------------->
    
                <!-- 送信ボタン 右よりにしたい-->
                <div class="mt-6">
                <a href="{{ url()->previous() }}">
                <x-secondary-button class="ml-3">
                  {{ __('戻る') }}
                </x-primary-button>
                 </a>
                 
                  <x-primary-button class="ml-3">
                    {{ __('修正終了') }}
                  </x-primary-button>
                </div>
                
   　　　 </form>
     </div>
</x-app-layout>