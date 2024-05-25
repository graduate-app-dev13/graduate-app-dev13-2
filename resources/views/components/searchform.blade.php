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
            <x-input-label for="grade" :value="__('words.grade')" />
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
              <x-input-label for="subject" :value="__('words.subject')" />
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
        

            <div class="flex justify-end mt-4">
              <x-primary-button class="ml-3 mt-4">
                <i class="fa-solid fa-magnifying-glass"></i>{{ __('授業検索') }}
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>