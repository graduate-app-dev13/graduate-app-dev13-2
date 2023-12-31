<!--resource/view/search/index.blade.php-->
<x-app-layout>
  
    <div>
       @include('components.searchform')
    </div>

    <div class="bg-white max-w-300 max-w-screen-xl mx-auto h-auto overflow-hidden shadow-sm sm:rounded-lg py-5">
      @if($lessons->isEmpty()) 
        <p class="text-center text-gray-500 mt-8">検索条件に一致する授業がありません。</p>
        
      @else
        <div class="grid grid-cols-4 gap-6 md:grid-cols-8 lg:grid-cols-12 mx-auto">
          @foreach($lessons as $lesson)
            <!-- Component: Blog card with action button -->
            <div class="col-span-4 lg:col-span-3 overflow-hidden bg-white rounded shadow-md text-slate-500 shadow-slate-200 hover:bg-slate-200 transition duration-150 ease-in-out">
              <!-- Image -->
              <figure>
                <!--<img src="{{ asset( $lesson->image )}}" alt="Lesson Image" class="aspect-ratio-4/3 w-full" />-->
                <img src="{{ asset( $lesson->image )}}"  class="aspect-video w-full"/>
              </figure>
              <!-- Image -->
              
              <!-- Body-->
              <div class="p-6">
                
                <header class="flex gap-4 mb-4">
                  <!--<a href="#" class="relative inline-flex items-center justify-center w-12 h-12 text-white rounded-full">-->
                  <!--  <img src="https://i.pravatar.cc/48?img=25" alt="user name" title="user name" width="48" height="48" class="max-w-full rounded-full" />-->
                  <!--</a>-->
             
                  <div class="flex flex-col h-16 overflow-hidden">
                    <h2 class="text-lg font-medium text-slate-700">{{ $lesson->lesson_name }}</h2>
                  </div>
                </header>
                
                <!--学年　教科　教育-->
                <div>
                    <!--学年-->
                    <!--<p class="text-sm text-slate-400"></p>-->
                    <p class="mt-4 bg-amber-50 text-lg">学年</p>
                    <p class="mt-4">
                      <!--DBの内容に合わせて表示する内容が変わる-->
                      @if($lesson->one) <span>1年生 </span>@endif
                      @if($lesson->two) <span>2年生 </span>@endif
                      @if($lesson->three) <span>3年生 </span>@endif
                      @if($lesson->four) <span>4年生 </span>@endif
                      @if($lesson->five) <span>5年生 </span>@endif
                      @if($lesson->six) <span>6年生 </span>@endif
                      @if($lesson->seven) <span>特別支援 </span>@endif
                    </p>
                    <!--教科-->
                    <p class="mt-4 bg-amber-50 text-lg">教科</p>
                    <p class="mt-4">
                      <!--DBの内容に合わせて表示する内容が変わる-->
                      @if($lesson->japanease) <span>国語 </span>@endif
                      @if($lesson->math) <span>算数 </span>@endif
                      @if($lesson->society) <span>社会 </span>@endif
                      @if($lesson->science) <span>理科 </span>@endif
                      @if($lesson->english) <span>外国語 </span>@endif
                      @if($lesson->music) <span>音楽 </span>@endif
                      @if($lesson->art_and_crafts) <span>図工 </span>@endif
                      @if($lesson->home_economics) <span>家庭科 </span>@endif
                      @if($lesson->physical_education) <span>体育 </span>@endif
                      @if($lesson->life_skills) <span>生活 </span>@endif
                      @if($lesson->ethics) <span>道徳 </span>@endif
                      @if($lesson->integrated_studies) <span>総合 </span>@endif
                      @if($lesson->special_activities) <span>特別活動 </span>@endif
                      @if($lesson->club_activities) <span>クラブ活動 </span>@endif
                    </p>
                    
                    <!--教育-->
                    <p class="mt-4 bg-amber-50 text-lg">教育</p>
                    <p class="mt-4">
                      <!--DBの内容に合わせて表示する内容が変わる-->
                      @php
                      $displayed = false;
                      @endphp
                      
                      @if($lesson->sdgs_edu) <span class="label">SDGs教育</span>　@php $displayed = true; @endphp  @endif
                      @if($lesson->info_edu) <span class="label">情報教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->ict_edu) <span class="label">ICT教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->copyright_edu) <span class="label">著作権教育</span> @php $displayed = true; @endphp @endif
                      @if($lesson->net_literacy_edu) <span class="label">ネットリテラシー教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->net_moral_edu) <span class="label">ネットモラル教育</span> @php $displayed = true; @endphp @endif
                      @if($lesson->programming_edu) <span class="label">プログラミング教育</span> @php $displayed = true; @endphp @endif
                      @if($lesson->career_edu) <span class="label">キャリア教育</span> @php $displayed = true; @endphp @endif
                      @if($lesson->entrepreneurship_edu) <span class="label">起業家精神教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->financial_edu) <span class="label">金融教育</span> @php $displayed = true; @endphp @endif
                      @if($lesson->food_edu) <span class="label">食育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->health_edu) <span class="label">健康教育</span> @php $displayed = true; @endphp @endif
                      @if($lesson->disaster_edu) <span class="label">防災教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->lgbt_edu) <span class="label">LGBT教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->gender_diversity_edu) <span class="label">性の多様性教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->sexual_violence_edu) <span class="label">性暴力に関する教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->sexuality_edu) <span class="label">性教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->cancer_edu) <span class="label">癌教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->foreign_language_edu) <span class="label">外国語教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->international_understanding_edu) <span class="label">国際理解教育</span> @php $displayed = true; @endphp @endif
                      @if($lesson->volunteer_edu) <span class="label">ボランティア教育</span> @php $displayed = true; @endphp @endif
                      @if($lesson->multicultural_coexistence_edu) <span class="label">多文化共生教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->peace_edu) <span class="label">平和教育</span> @php $displayed = true; @endphp @endif
                      @if($lesson->consumer_edu) <span class="label">消費者教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->local_edu) <span class="label">郷土教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->human_rights_edu) <span class="label">人権教育</span> @php $displayed = true; @endphp @endif
                      @if($lesson->sovereign_edu) <span class="label">主権者教育</span> @php $displayed = true; @endphp @endif
                      @if($lesson->school_link_edu) <span class="label">小中連携教育</span>@php $displayed = true; @endphp @endif
                      @if($lesson->art_edu) <span class="label">芸術教育</span>@php $displayed = true; @endphp 　@endif
                      @if($lesson->special_support_edu) <span class="label">特別支援教育</span>　@php $displayed = true; @endphp @endif
                      @if($lesson->universal_design_edu) <span class="label">ユニバーサルデザイン教育</span>@php $displayed = true; @endphp @endif
                      @if($lesson->inclusive_edu) <span class="label">インクルーシブ教育</span>@php $displayed = true; @endphp 　@endif
                      @if($lesson->environment_edu) <span class="label">環境教育</span>@php $displayed = true; @endphp  @endif
                      @if($lesson->safety_edu) <span class="label">安全教育</span>@php $displayed = true; @endphp @endif
                      @if($lesson->traffic_safety_edu) <span class="label">交通安全教育</span>@php $displayed = true; @endphp @endif
                      @if($lesson->nature_experience_edu) <span class="label">自然体験教育</span>@php $displayed = true; @endphp @endif
                      @if($lesson->welfare_edu) <span class="label">福祉教育</span>@php $displayed = true; @endphp @endif
                      @if($lesson->normative_consciousness_edu) <span class="label">規範意識教育</span>@php $displayed = true; @endphp @endif
                      @if($lesson->moral_edu) <span class="label">道徳教育</span>@php $displayed = true; @endphp @endif
                      @if($lesson->mind_edu) <span class="label">心の教育</span>@php $displayed = true; @endphp @endif
                      @if($lesson->museum_edu) <span class="label">博物館教育</span>@php $displayed = true; @endphp @endif
                      @if($lesson->animal_protection_edu) <span class="label">動物愛護教育</span>@php $displayed = true; @endphp @endif
                      @if($lesson->library_use_edu) <span class="label">図書館活用教育</span>@php $displayed = true; @endphp @endif
                      @if($lesson->nie_edu) <span class="label">ＮＩＥ教育</span>@php $displayed = true; @endphp @endif
                      @if($lesson->posting_edu) <span class="label">掲示教育</span>@php $displayed = true; @endphp @endif
                      
                      @if(!$displayed)
                    <span class="label">なし</span>
                    @endif
                    
                  <!--<a href="{{ route('search.show', $lesson->id) }}" class="mt-2 inline-block bg-yellow-200 text-gray-700 px-4 py-2 rounded hover:bg-yellow-200 transition duration-300 ease-in-out">授業詳細</a>-->
                </div>
                <!--学年　教科　教育-->
              </div>
              <!-- Body-->
              
              <!-- Action base sized link button -->
              <div class="flex justify-end gap-2 p-2 pt-0">
                <a href="{{ route('search.show', $lesson->id) }}" >
                <button class="inline-flex items-center justify-center h-10 gap-2 px-5 text-sm font-medium tracking-wide transition duration-300 rounded justify-self-center whitespace-nowrap text-emerald-500 hover:bg-emerald-100 hover:text-emerald-600 focus:bg-emerald-200 focus:text-emerald-700 focus-visible:outline-none disabled:cursor-not-allowed disabled:text-emerald-300 disabled:shadow-none disabled:hover:bg-transparent">
                  <span>詳　細</span>
                </button>
                </a>
              </div>
              <!-- Action base sized link button -->
              
            </div>
            <!-- End Blog card with action button -->
            @endforeach
        </div>
        <!--<div class="grid grid-cols-4 gap-6 md:grid-cols-8 lg:grid-cols-12 mx-auto">-->
        @endif
  </div>
  <!--<div class="bg-white max-w-300 max-w-screen-xl mx-auto h-auto overflow-hidden shadow-sm sm:rounded-lg">-->
</x-app-layout>