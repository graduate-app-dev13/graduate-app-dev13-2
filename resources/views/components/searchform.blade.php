<div class="bg-white max-w-300 max-w-screen-xl mx-auto h-auto overflow-hidden shadow-sm sm:rounded-lg">

  
   <h2 class="text-xl font-bold mt-4 text-center">授　業　検　索</h2>

  <div class="py-12">
    <div class="w-full max-w-3xl mx-auto p-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
      <div class="bg-white max-w-300 mx-auto h-auto overflow-hidden shadow-sm sm:rounded-lg items-center">
        <div class="p-6 bg-white border-gray-200 max-w-3xl min-w-min ">
          @include('common.errors')
          <form class="mb-2" action="{{ route('search.index') }}" method="GET">
            @csrf

            <div class="flex flex-col mb-4 h-12">
            <x-input-label for="grade" :value="__('学年')" />
                <select id="grade" class="block mt-1 w-full" name="grade">
                    <option value="" {{ request('grade') == '' ? 'selected' : '' }}>---</option>
                    <option value="one" {{ request('grade') == 'one' ? 'selected' : '' }}>１年生</option>
                    <option value="two" {{ request('grade') == 'two' ? 'selected' : '' }}>２年生</option>
                    <option value="three" {{ request('grade') == 'three' ? 'selected' : '' }}>３年生</option>
                    <option value="four" {{ request('grade') == 'four' ? 'selected' : '' }}>４年生</option>
                    <option value="five" {{ request('grade') == 'five' ? 'selected' : '' }}>５年生</option>
                    <option value="six" {{ request('grade') == 'six' ? 'selected' : '' }}>６年生</option>
                    <option value="seven" {{ request('grade') == 'seven' ? 'selected' : '' }}>特別支援学級</option>
                </select>
             </div>

            <div class="flex flex-col mb-4 h-12">
              <x-input-label for="subject" :value="__('教科')" />
                <select id="subject" class="block mt-1 w-full" name="subject">
                    <option value="" {{ request('subject') == '' ? 'selected' : '' }}>---</option>
                    <option value="japanease" {{ request('subject') == 'japanease' ? 'selected' : '' }}>国語</option>
                    <option value="math" {{ request('subject') == 'math' ? 'selected' : '' }}>算数</option>
                    <option value="society" {{ request('subject') == 'society' ? 'selected' : '' }}>社会</option>
                    <option value="science" {{ request('subject') == 'science' ? 'selected' : '' }}>理科</option>
                    <option value="english" {{ request('subject') == 'english' ? 'selected' : '' }}>外国語</option>
                    <option value="music" {{ request('subject') == 'music' ? 'selected' : '' }}>音楽</option>
                    <option value="art_and_crafts" {{ request('subject') == 'art_and_crafts' ? 'selected' : '' }}>図工</option>
                    <option value="home_economics" {{ request('subject') == 'home_economics' ? 'selected' : '' }}>家庭科</option>
                    <option value="physical_education" {{ request('subject') == 'physical_education' ? 'selected' : '' }}>体育</option>
                    <option value="life_skills" {{ request('subject') == 'life_skills' ? 'selected' : '' }}>生活科</option>
                    <option value="ethics" {{ request('subject') == 'ethics' ? 'selected' : '' }}>道徳</option>
                    <option value="integrated_studies" {{ request('subject') == 'integrated_studies' ? 'selected' : '' }}>総合</option>
                    <option value="special_activities" {{ request('subject') == 'special_activities' ? 'selected' : '' }}>特別活動</option>
                    <option value="club_activities" {{ request('subject') == 'club_activities' ? 'selected' : '' }}>クラブ活動</option>
                </select>
            </div>
            
        <div class="flex flex-col mb-4 h-12">
        <x-input-label for="grade" :value="__('○○教育')" />
            <select id="education" class="block mt-1 w-full" name="education">
                <option value="" {{ request('education') == '' ? 'selected' : '' }}>---</option>
                <option value="sdgs_edu" {{ request('education') == 'sdgs_edu' ? 'selected' : '' }}>SDGs教育</option>
                <option value="info_edu" {{ request('education') == 'info_edu' ? 'selected' : '' }}>情報教育</option>
                <option value="ict_edu" {{ request('education') == 'ict_edu' ? 'selected' : '' }}>ICT教育</option>
                <option value="copyright_edu" {{ request('education') == 'copyright_edu' ? 'selected' : '' }}>著作権教育</option>
                <option value="net_literacy_edu" {{ request('education') == 'net_literacy_edu' ? 'selected' : '' }}>ネットリテラシー教育</option>
                <option value="net_moral_edu" {{ request('education') == 'net_moral_edu' ? 'selected' : '' }}>ネットモラル教育</option>
                <option value="programming_edu" {{ request('education') == 'programming_edu' ? 'selected' : '' }}>プログラミング教育</option>
                <option value="career_edu" {{ request('education') == 'career_edu' ? 'selected' : '' }}>キャリア教育</option>
                <option value="entrepreneurship_edu" {{ request('education') == 'entrepreneurship_edu' ? 'selected' : '' }}>起業家精神教育</option>
                <option value="financial_edu" {{ request('education') == 'financial_edu' ? 'selected' : '' }}>金融教育</option>
                <option value="food_edu" {{ request('education') == 'food_edu' ? 'selected' : '' }}>食育</option>
                <option value="health_edu" {{ request('education') == 'health_edu' ? 'selected' : '' }}>健康教育</option>
                <option value="disaster_edu" {{ request('education') == 'disaster_edu' ? 'selected' : '' }}>防災教育</option>
                <option value="lgbt_edu" {{ request('education') == 'lgbt_edu' ? 'selected' : '' }}>LGBT教育</option>
                <option value="gender_diversity_edu" {{ request('education') == 'gender_diversity_edu' ? 'selected' : '' }}>「性の多様性」教育</option>
                <option value="sexual_violence_edu" {{ request('education') == 'sexual_violence_edu' ? 'selected' : '' }}>性暴力に関する教育</option>
                <option value="sexuality_edu" {{ request('education') == 'sexuality_edu' ? 'selected' : '' }}>性教育</option>
                <option value="cancer_edu" {{ request('education') == 'cancer_edu' ? 'selected' : '' }}>癌教育</option>
                <option value="foreign_language_edu" {{ request('education') == 'foreign_language_edu' ? 'selected' : '' }}>外国語教育</option>
                <option value="international_understanding_edu" {{ request('education') == 'international_understanding_edu' ? 'selected' : '' }}>国際理解教育</option>
                <option value="volunteer_edu" {{ request('education') == 'volunteer_edu' ? 'selected' : '' }}>ボランティア教育</option>
                <option value="multicultural_coexistence_edu" {{ request('education') == 'multicultural_coexistence_edu' ? 'selected' : '' }}>多文化共生教育</option>
                <option value="peace_edu" {{ request('education') == 'peace_edu' ? 'selected' : '' }}>平和教育</option>
                <option value="consumer_edu" {{ request('education') == 'consumer_edu' ? 'selected' : '' }}>消費者教育</option>
                <option value="local_edu" {{ request('education') == 'local_edu' ? 'selected' : '' }}>郷土教育</option>
                <option value="human_rights_edu" {{ request('education') == 'human_rights_edu' ? 'selected' : '' }}>人権教育</option>
                <option value="sovereign_edu" {{ request('education') == 'sovereign_edu' ? 'selected' : '' }}>主権者教育</option>
                <option value="school_link_edu" {{ request('education') == 'school_link_edu' ? 'selected' : '' }}>小中連携教育</option>
                <option value="art_edu" {{ request('education') == 'art_edu' ? 'selected' : '' }}>芸術教育</option>
                <option value="special_support_edu" {{ request('education') == 'special_support_edu' ? 'selected' : '' }}>特別支援教育</option>
                <option value="universal_design_edu" {{ request('education') == 'universal_design_edu' ? 'selected' : '' }}>ユニバーサルデザイン教育</option>
                <option value="inclusive_edu" {{ request('education') == 'inclusive_edu' ? 'selected' : '' }}>インクルーシブ教育</option>
                <option value="environment_edu" {{ request('education') == 'environment_edu' ? 'selected' : '' }}>環境教育</option>
                <option value="safety_edu" {{ request('education') == 'safety_edu' ? 'selected' : '' }}>安全教育</option>
                <option value="traffic_safety_edu" {{ request('education') == 'traffic_safety_edu' ? 'selected' : '' }}>交通安全教育</option>
                <option value="nature_experience_edu" {{ request('education') == 'nature_experience_edu' ? 'selected' : '' }}>自然体験教育</option>
                <option value="welfare_edu" {{ request('education') == 'welfare_edu' ? 'selected' : ''}}>福祉教育</option>
                <option value="normative_consciousness_edu" {{ request('education') == 'normative_consciousness_edu' ? 'selected' : ''}}>規範意識教育</option>
                <option value="moral_edu" {{ request('education') == 'moral_edu' ? 'selected' : ''}}>道徳教育</option>
                <option value="mind_edu" {{ request('education') == 'mind_edu' ? 'selected' : ''}}>心の教育</option>
                <option value="museum_edu" {{ request('education') == 'museum_edu' ? 'selected' : ''}}>博物館教育</option>
                <option value="animal_protection_edu" {{ request('education') == 'animal_protection_edu' ? 'selected' : ''}}>動物愛護教育</option>
                <option value="library_use_edu" {{ request('education') == 'library_use_edu' ? 'selected' : ''}}>図書館活用教育</option>
                <option value="nie_edu" {{ request('education') == 'nie_edu' ? 'selected' : ''}}>ＮＩＥ教育</option>
                <option value="posting_edu" {{ request('education') == 'posting_edu' ? 'selected' : ''}}>掲示教育</option>
            </select>
        </div>
        
        {{-- <!-- Component: Icon accordion　こだわり条件 -->
        <section class="w-full divide-y rounded divide-slate-200">
          <details class="p-4 group">
            <summary class="[&::-webkit-details-marker]:hidden relative flex gap-4 pr-8 font-medium list-none cursor-pointer text-slate-700 focus-visible:outline-none group-hover:text-slate-800">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-emerald-500  shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-labelledby="title-ac05 desc-ac05">
                <title id="title-ac05">Leading icon</title>
                <desc id="desc-ac05">Icon that describes the summary</desc>
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 002.25 2.25h13.5A2.25 2.25 0 0021 18V8.25m-18 0V6a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6zM7.5 6h.008v.008H7.5V6zm2.25 0h.008v.008H9.75V6z" />
              </svg>
             こだわり条件
              <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-0 w-4 h-4 transition duration-300 top-1 stroke-slate-700 shrink-0 group-open:rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-labelledby="title-ac06 desc-ac06">
                <title id="title-ac06">Open icon</title>
                <desc id="desc-ac06">icon that represents the state of the summary</desc>
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
              </svg>
            </summary>
            
            <!-- Component: Primary basic checkbox -->
        <div class="relative flex flex-wrap items-center">
          授業形式
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01"/>
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            オンライン
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        
        
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01" />
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            対面
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        </div> --}}
        
        <!---------------------------------------------------------------------------------------------------->
            {{-- <!-- Component: Primary basic checkbox -->
        <div class="relative flex flex-wrap items-center">
          　費用　
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01"/>
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            有料
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        
        
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01" />
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            無料
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        </div> --}}
        <!---------------------------------------------------------------------------------------------------->
            {{-- <!-- Component: Primary basic checkbox -->
        <div class="relative flex flex-wrap items-center">
        　時期　
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01"/>
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            ４月
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01" />
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            ５月
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01" />
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            ６月
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01" />
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            ７月
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01" />
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            ８月
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01" />
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            ９月
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01" />
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            １０月　
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01" />
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            １１月
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01" />
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            １２月
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01" />
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            １月
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01" />
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            ２月
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        
          <input class="w-4 h-4 transition-colors bg-white border-2 rounded appearance-none cursor-pointer focus-visible:outline-none peer border-slate-500 checked:border-emerald-500 checked:bg-yellow-300 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="checkbox" id="id-c01" />
          <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="id-c01">
            ３月
          </label>
          
          <svg class="absolute left-0 w-4 h-4 transition-all duration-300 -rotate-90 opacity-0 pointer-events-none top-1 fill-white stroke-white peer-checked:rotate-0 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" aria-labelledby="title-1 description-1" role="graphics-symbol">
            <title id="title-1">Check mark icon</title>
            <desc id="description-1">
              Check mark icon to indicate whether the radio input is checked
              or not.
            </desc>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8116 5.17568C12.9322 5.2882 13 5.44079 13 5.5999C13 5.759 12.9322 5.91159 12.8116 6.02412L7.66416 10.8243C7.5435 10.9368 7.37987 11 7.20925 11C7.03864 11 6.87501 10.9368 6.75435 10.8243L4.18062 8.42422C4.06341 8.31105 3.99856 8.15948 4.00002 8.00216C4.00149 7.84483 4.06916 7.69434 4.18846 7.58309C4.30775 7.47184 4.46913 7.40874 4.63784 7.40737C4.80655 7.406 4.96908 7.46648 5.09043 7.57578L7.20925 9.55167L11.9018 5.17568C12.0225 5.06319 12.1861 5 12.3567 5C12.5273 5 12.691 5.06319 12.8116 5.17568Z" />
          </svg>
        
        <!-- End Primary basic checkbox -->
          </details>
        </section>
        <!-- End Icon accordion --> --}}

            <div class="flex justify-end mt-4">
              <x-primary-button class="ml-3 mt-4">{{ __('授業検索') }}</x-primary-button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>