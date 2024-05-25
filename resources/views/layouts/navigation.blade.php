<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 items-center hidden space-x-8 sm:-my-px  sm:flex">
                <img class="rounded-t-xl h-10 w-auto" src="{{ asset('images/susan_spot_teacher.png') }}" alt="Image Description">
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('top')" :active="request()->routeIs('dashboard')">
                        {{ __('TOP') }}
                    </x-nav-link>
                </div>
                @if(Auth::check())
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('watchlater.index')" :active="request()->routeIs('dashboard')">
                        {{ __('あとでみる') }}
                    </x-nav-link>
                </div>

                <!-- Navigation Links 履歴 -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('reserve.userreserve')" :active="request()->routeIs('dashboard')">
                        {{Auth::user()->name}}{{ __('words.teacher') }} {{ __('words.history') }}
                    </x-nav-link>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('reserve.schoolreserve')" :active="request()->routeIs('dashboard')">
                       {{Auth::user()->school_name}} {{ __('words.school') }}{{ __('words.history') }}
                    </x-nav-link>
                </div>
                @endif

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('search.index')" :active="request()->routeIs('search.input')">
                       {{ __('授業検索') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    @if(Auth::check())
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        </button>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('ユーザー情報') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('ログアウト') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>

                    @else
                    <x-slot name="trigger">
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div class="px-4">
                                    <div class="font-medium text-base text-gray-800">{{ __('ログイン') }}</div>
                                </div>
                            </button>
                        </a>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                    </x-slot>
                    </div>
                    
                    <x-slot name="content" >
                        <x-dropdown-link>
                            {{ __('なし') }}
                        </x-dropdown-link>
                    </x-slot>
                    @endif
                    </div>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('top')" :active="request()->routeIs('dashboard')">
                {{ __('TOP') }}
            </x-responsive-nav-link>
        </div>
            @if(Auth::check())
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('watchlater.index')" :active="request()->routeIs('dashboard')">
                {{ __('あとでみる') }}
            </x-responsive-nav-link>
        </div>
        {{-- ユーザー履歴 --}}
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('reserve.userreserve')"  :active="request()->routeIs('dashboard')">
                {{Auth::user()->name}}{{ __('words.teacher') }} {{ __('words.history') }}
            </x-responsive-nav-link>
        </div>
        {{-- 学校履歴 --}}
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('reserve.schoolreserve')" :active="request()->routeIs('dashboard')">
                 {{Auth::user()->school_name}} {{ __('words.school') }}{{ __('words.history') }}
            </x-responsive-nav-link>
        </div>
          @endif
        
        <div class="pt-2 pb-3 space-y-1">
        <x-responsive-nav-link :href="route('search.index')" :active="request()->routeIs('search.input')">
               {{ __('授業検索') }}
        </x-responsive-nav-link>
       </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    @if(Auth::check())
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                         <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('プロフィール') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('ログアウト') }}
                    </x-responsive-nav-link>
                </form>
            </div>
                     @else
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('ログイン') }}</a>
                            {{-- <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a> --}}
                        </div>
                     @endif
                </div>

            {{-- <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('プロフィール') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('ログアウト') }}
                    </x-responsive-nav-link>
                </form>
            </div> --}}
        </div>
    </div>
</nav>