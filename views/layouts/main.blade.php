<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <!-- <link rel="icon" type="image/svg+xml" href="/vite.svg" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ evo()->getConfig('site_name') }} | {{ $documentObject['pagetitle'] }}</title>
    <script type="module" crossorigin src="/theme/assets/main.js"></script>
    <link rel="stylesheet" crossorigin href="/theme/assets/main.css">
</head>

<body class="bg-white">
    <!-- Wrapper для Mmenu -->
    <div id="page" class="flex min-h-screen flex-col">
        <!-- Шапка -->
        @include('parts.header')



        @yield('content')



        <!-- Bottom bar -->
        @include('parts.bottom-bar')

        <!-- Подвал -->
        @include('parts.footer')

        <!-- Модалка запроса обратного звонка -->
        @include('parts.modals.callback')

        <!-- Корзина с товарами -->
        <section id="cart-wrapper" class="fixed -right-full top-0 z-50 h-screen w-full bg-[rgba(0,0,0,.5)]">
            <div id="cart"
                class="absolute -right-full top-0 min-h-screen w-4/5 bg-white p-2 shadow shadow-black transition-all md:w-2/6">
                <div class="flex items-end justify-between border-b py-2">
                    <span id="cart-close cursor-pointer"> Закрыть </span>
                    <span class="text-xl font-light uppercase">Корзина</span>
                </div>
                <div>
                    {!! evo()->runSnippet('Cart', [
                        'instance' => 'products',
                        'theme' => '',
                        'ownerTPL' => '@B_FILE:cart/modal/owner',
                        'tpl' => '@B_FILE:cart/modal/row',
                        'noneTPL' => '@B_FILE:cart/modal/none',
                        'templatePath' => 'views/',
                        'tvList' => 'image',
                    ]) !!}
                </div>
            </div>
        </section>
    </div>
</body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        for (var j = 0; j < document.scripts.length; j++) {
            if (document.scripts[j].src === r) {
                return;
            }
        }
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
            k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(99115720, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/99115720" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->

</html>
