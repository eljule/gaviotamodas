{{-- estilos puestos en un nuevo archivo css nav.css --}}
<nav class="sticky top-0 bg-gray-700" x-data="dropdown()">
    <div class="container flex items-center h-16 ">
        <a
            x-on:click="show()"
            class="flex flex-col items-center justify-center h-full px-4 font-semibold text-white bg-white bg-opacity-25 cursor-pointer">
            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span>Categorias</span>
        </a>
        @livewire('search' )
        <div class="relative mx-6">
            @auth
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                            <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            @else
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <i class="text-3xl text-white cursor-pointer fas fa-user-circle"></i>
                    </x-slot>
                    <x-slot name="content">
                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>
                    </x-slot>
                </x-jet-dropdown>
            @endauth
        </div>
        @livewire('dropdown-cart')
    </div>
    <div id="navigation-menu"
        x-show="open"
        :class="{'block': open, 'hidden': !open}"
        class="absolute hidden w-full bg-gray-700 bg-opacity-25">
        <div class="container h-full">
            <div
                x-on:click.away="close()"
                class="relative grid h-full grid-cols-4">
                <ul class="bg-white">
                    @foreach ($categories as $category)
                        <li class="text-gray-500 navigation-link hover:bg-red-300 hover:text-white">
                            <a href="" class="flex items-center px-4 py-2 text-sm">
                                <span class="flex justify-center w-9">
                                    {!!$category->icon!!}
                                </span>
                                {{$category->name}}
                            </a>
                            <div class="absolute top-0 right-0 hidden w-3/4 h-full bg-gray-100 navigation-menu">
                                <x-navigation-subcategories :category="$category"/>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="col-span-3 bg-gray-100">
                   <x-navigation-subcategories :category="$categories->first()"/>
                </div>
            </div>
        </div>
    </div>
</nav>

