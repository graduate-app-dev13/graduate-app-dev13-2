<x-admin-app-layout>
   <!-- メニューをTailwind CSSでスタイリング -->
    <ul class="bg-blue-500 p-4">
        <li class="text-white">
            ログイン中：{{ Auth::guard('admin')->user()->name ?? 'undefined' }}
        </li>
        <li class="text-white">
            <a href="{{ route('admin.logout') }}">
                ログアウト
            </a>
        </li>
    </ul> 

<x-slot name="header">
  <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Reservation Confirmation Form') }}
  </h2>
</x-slot>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-gray-100">
  <form action="{{ route('matching.store')}}" method="POST" class="max-w-3xl mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    @include('common.errors')
                <!----------------------------------------------------------------------->
                <!-- Wrapper for all school information -->
    <div class="school-information-wrapper">
      <!-- Lesson Information -->
      <div class="lesson-information mb-8">
        <h2 class="text-2xl font-bold mb-4">授業情報</h2>
        <table class="min-w-full border-collapse">
          <tbody>
            <tr>
              <th class="border px-4 py-2 text-left">授業名</th>
              <td class="border px-4 py-2">{{$reserve->lesson->lesson_name}}</td>
            </tr>
            <tr>
              <th class="border px-4 py-2 text-left">授業形式</th>
              <td class="border px-4 py-2">{{$reserve->lesson->lesson_type}}</td>
            
            </tr>
          </tbody>
        </table>
      </div>
  
      <!-- School Information -->
      <div class="school-information mb-8">
        <h2 class="text-2xl font-bold mb-4">学校情報</h2>
        <table class="min-w-full border-collapse">
          <tbody>
            <tr>
              <th class="border px-4 py-2 text-left">学校名</th>
              <td class="border px-4 py-2">{{$reserve->user->school->school_name}}小学校</td>
            </tr>
            <tr>
              <th class="border px-4 py-2 text-left">学校電話番号</th>
              <td class="border px-4 py-2">{{$reserve->user->school->tel_number}}</td>
            </tr>
            <tr>
              <th class="border px-4 py-2 text-left">メール</th>
              <td class="border px-4 py-2">{{$reserve->user->school->email}}</td>
            </tr>
            <tr>
              <th class="border px-4 py-2 text-left">担当教員名</th>
              <td class="border px-4 py-2">{{$reserve->user->name}}</td>
            </tr>
            <tr>
              <th class="border px-4 py-2 text-left">その他</th>
              <td class="border px-4 py-2">       
              <p class="whitespace-no-wrap">
                    希望教科:{{ $reserve->subject }}
                    </p>
                    <p class="whitespace-no-wrap">
                    学年:{{ $reserve->graduate }}{{ $reserve->number_student }}人
                    </p></td>
            </tr>
          </tbody>
        </table>
      </div><!-- School Information -->

       　　　　　 @php
                $formattedFirstDate = \Carbon\Carbon::parse($reserve->first_choice_date)->format('Y年m月d日');
                $formattedSecondDate = \Carbon\Carbon::parse($reserve->second_choice_date)->format('Y年m月d日');
                $formattedThirdDate = \Carbon\Carbon::parse($reserve->third_choice_date)->format('Y年m月d日');
                
                $formattedFirstTime = \Carbon\Carbon::parse($reserve->first_choice_start_time)->format('H:i') . ' - ' . \Carbon\Carbon::parse($reserve->first_choice_end_time)->format('H:i');
                $formattedSecondTime = \Carbon\Carbon::parse($reserve->second_choice_start_time)->format('H:i') . ' - ' . \Carbon\Carbon::parse($reserve->second_choice_end_time)->format('H:i');
                $formattedThirdTime = \Carbon\Carbon::parse($reserve->third_choice_start_time)->format('H:i') . ' - ' . \Carbon\Carbon::parse($reserve->third_choice_end_time)->format('H:i');
                        
                
                $formattedFirstOption = $formattedFirstDate . ' ' . $formattedFirstTime;
                $formattedSecondOption = $formattedSecondDate . ' ' . $formattedSecondTime;
                $formattedThirdOption = $formattedThirdDate . ' ' . $formattedThirdTime;
                @endphp
  <!-- Preferred Lesson Dates -->
  <div class="lesson-dates mb-8">
    <h2 class="text-2xl font-bold mb-4">授業実施日</h2>
    <table class="min-w-full border-collapse">
      <tbody>
        <tr>
          <th class="border px-4 py-2 text-left">希望されている授業日時</th>
          <td class="border px-4 py-2">
            <select name="matching_date_time">
              <option value="{{$reserve->first_choice_date . ' ' . $reserve->first_choice_start_time . ' - ' . $reserve->first_choice_end_time}}">{{$formattedFirstOption}}</option>
              <option value="{{$reserve->second_choice_date . ' ' . $reserve->second_choice_start_time . ' - ' . $reserve->second_choice_end_time}}">{{$formattedSecondOption}}</option>
              <option value="{{$reserve->third_choice_date . ' ' . $reserve->third_choice_start_time . ' - ' . $reserve->third_choice_end_time}}">{{$formattedThirdOption}}</option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
    
                
                 <!-- 情報 -->
   　　　　　　　　　<input type="hidden" name="lesson_user_reservations_id" value="{{ $reserve->id}}"/>
   　　　　　　　　　<!------------------------------------------------------------------->
   　　　
    <div class="flex flex-wrap -mx-3 mb-6">
      <!-- ... other form fields ... -->
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <!-- ... -->
      </div>
      <!-- ... other form fields ... -->
    </div>
    
    
    <div class="flex items-center justify-center mt-6">
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        情報確定
      </button>
    </div>
    
  <div class="text-right">
    <a href="https://app.aitemasu.me/add-event" target="_blank" >
        <button class="bg-green-200 hover:bg-green-400 focus:outline-none focus:ring-4 focus:ring-green-100 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">日程調整表の確認</button>
    </a>
  </div>
    
  </form>
</div>
</x-admin-app-layout>