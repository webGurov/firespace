@php
    use App\Models\Setting;

    $siteName = Setting::latest()->first()->name;
@endphp

<header aria-label="Шапка сайта" class="mt-[16px] absolute top-0 right-0 left-0" id="header">
    <x-container>
        <div class="flex items-center justify-between max-w-full px-3 py-6">
            {{-- logo --}}
            <div aria-label="Логотип" class="shrink-0">
                <a aria-label="На главную" href="{{ route('page.home') }}" class="text-white text-[40px] font-bold">
                    <!-- <img src="{{ asset('images/logo.svg') }}"
                        alt="Логотип сайта {{ config('app.name') }}" class=""> -->
                    {{ $siteName ?? env('APP_NAME') }}
                </a>
            </div>
            {{-- end logo --}}

            {{-- search --}}
            <input aria-label="Поиск" type="text" placeholder="Искать..." class="py-[20px] px-[20px] w-[755px] h-[56px] text-16px text-white bg-white/10 outline-none rounded-full">
            {{-- end search --}}

            {{-- buttons --}}
            <div aria-label="Кнопки" class="flex gap-[16px]">
                <a aria-label="Корзина" href="#" class="relative w-[56px] h-[56px] bg-[#F7752A] rounded-full flex justify-center items-center before:absolute before:content-['10'] before:bottom-[-4px] before:right-[-4px] before:h-[24px] before:w-[24px] before:rounded-full before:border-2 before:border-[#F7752A] before:text-[#F7752A] before:font-bold before:bg-white before:flex before:justify-center before:items-center before:text-[12px]">
                    <img src="{{ asset('images/icons/cart.svg') }}" alt="Корзина">
                </a>
                <a aria-label="Корзина" href="#" class="relative w-[56px] h-[56px] bg-[#F7752A] rounded-full flex justify-center items-center before:absolute before:content-['10'] before:bottom-[-4px] before:right-[-4px] before:h-[24px] before:w-[24px] before:rounded-full before:border-2 before:border-[#F7752A] before:text-[#F7752A] before:font-bold before:bg-white before:flex before:justify-center before:items-center before:text-[12px]">
                    <img src="{{ asset('images/icons/cart.svg') }}" alt="Корзина">
                </a>
                <a aria-label="Корзина" href="#" class="relative w-[56px] h-[56px] bg-[#F7752A] rounded-full flex justify-center items-center before:absolute before:content-['10'] before:bottom-[-4px] before:right-[-4px] before:h-[24px] before:w-[24px] before:rounded-full before:border-2 before:border-[#F7752A] before:text-[#F7752A] before:font-bold before:bg-white before:flex before:justify-center before:items-center before:text-[12px]">
                    <img src="{{ asset('images/icons/cart.svg') }}" alt="Корзина">
                </a>
            </div>
            {{-- end buttons --}}
        </div>
        {{-- navigation --}}
        <nav aria-label="Навигация" class="mt-[16px} flex items-center justify-between">
            <a aria-label="Каталог" href="#" class="inline-flex gap-[12px] px-[40px] py-[18px] rounded-full bg-[#F7752A] text-white font-bold">
                КАТАЛОГ 
                <img src="{{ asset('images/icons/catalog.svg')}}" alt=""></span>
            </a>
            <menu aria-label="menu" class="flex gap-[30px]">
                <li><a href="#" class="text-white">Дымоходы</a></li>
                <li><a href="#" class="text-white">Монтаж</a></li>
                <li><a href="#" class="text-white">Портфолио</a></li>
                <li><a href="#" class="text-white">Доставка и оплата</a></li>
                <li><a href="#" class="text-white">Отзывы</a></li>
                <li><a href="#" class="text-white">Контакты</a></li>
            </menu>
            {{-- авторизация/регистрация --}}
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-white font-bold">Личный кабинет</a>
                @else
                    <a href="{{ route('login') }}" class="text-white font-bold">Войти</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-white font-bold">Зарегистрироваться</a>
                    @endif
                @endauth
            @endif
            <a aria-label="Номер телефона" href="#" class="text-[#F7752A] font-bold">+7 (812) 924-66-61</a>
        </nav>
        {{-- end navigation --}}
    </x-container>
</header>
