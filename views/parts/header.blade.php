<header class="header bg-white py-4 text-gray-950">
    <div class="container mx-auto flex items-center">
        <!-- Логотип -->
        <a href="/" class="logo flex flex-col items-start justify-center">
            <span class="font-black uppercase">Я&ТЫ</span>
            <span class="-mt-1 text-[8px] uppercase text-pink-600">
                Студия флористики
            </span>
        </a>
        <!-- Контакты -->
        <div class="ml-auto mr-12 hidden flex-col gap-1 text-xs md:flex">
            <div class="flex items-center gap-2">
                <span class="flex items-center gap-1">
                    <i data-feather="home" width="12px"></i>
                    <span>Адрес:</span>
                </span>
                <span>
                    @if (evo()->getConfig('client_address') != '')
                        {{ evo()->getConfig('client_address') }}
                    @endif
                </span>
            </div>
            <div class="-mt-2 flex items-center gap-1">
                <i data-feather="phone-call" width="12px"></i>
                <a href="tel://+79999999999">Тел:. +7 (999) 999-99-99</a>
            </div>
        </div>

        <!-- Блок с иконкой карзины и избранного -->
        <div class="ml-auto mr-12 flex items-center gap-4 md:ml-0">
            {!! evo()->runSnippet('Cart', [
                'instance' => 'wishlist',
                'theme' => '',
                'ownerTPL' => '@B_FILE:wishlist/header/owner',
                'noneTPL' => '@B_FILE:/wishlist/header/none',
                'templatePath' => 'views/',
            ]) !!}

            {!! evo()->runSnippet('Cart', [
                'instance' => 'products',
                'theme' => '',
                'ownerTPL' => '@B_FILE:cart/header/owner',
                'noneTPL' => '@B_FILE:/cart/header/none',
                'templatePath' => 'views/',
            ]) !!}

        </div>
        <!-- Мобильная навигация -->
        <!-- Бургер кнопка -->
        <a href="#menu" class="cursor-pointer md:ml-0">
            <i data-feather="menu" width="24px"></i>
        </a>

        <!-- Навигация -->
        <nav id="mmenu">
            <ul>
                @foreach ($main_menu as $item)
                    @if (isset($item['children']))
                        @include('parts.menu.multiple-item', ['el' => $item])
                    @else
                        <li>
                            <a href="{{ $item['url'] }}">{{ $item['pagetitle'] }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
</header>
