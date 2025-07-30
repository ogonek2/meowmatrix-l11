<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/fixed.css') }}" rel="stylesheet">
    <link href="{{ mix('css/content.css') }}" rel="stylesheet">
    <link href="{{ mix('css/windows.css') }}" rel="stylesheet">
    <link href="{{ mix('css/elements.css') }}" rel="stylesheet">
    <link href="{{ mix('css/nav-bar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="shortcut icon" href="{{ asset('storage/source/logo/img/LOGO-in-8.png') }}" type="image/x-icon">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/marqueejs@1.0.0/dist/marquee.min.js"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

    @yield('seo')

    @yield('styles')
</head>

<body>
    <div id="app">
        @include('includes.fixed_elements.preloader')
        <div class="page-container" id="pageContent">
            @include('includes.fixed_elements.nav')
            <div class="content">
                @yield('content')
            </div>
            @include('includes.fixed_elements.footer')
        </div>
        <div class="page-container_over-screen" id="over_screen_bar">
            <div class="over_screen_bar-content">
                @yield('content')
            </div>
        </div>
    </div>
    <script async>
        window.addEventListener('load', function () {
            const preloader = document.getElementById('preloader');
            const pageContent = document.getElementById('pageContent');
    
            if (preloader) {
                preloader.style.display = 'none';
            }
    
            if (pageContent) {
                pageContent.style.display = 'block';
            }
        });
    </script>
    @yield('scripts')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.umd.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#on_over_screen_bar', function() {
                $(this).toggleClass('active')
                $('#over_screen_bar').toggleClass('show')
                $('#pageContent').toggleClass('scroll_over_screen')
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#open-social-media-menu', function() {
                $(this).toggleClass('active')
                $('#sl_panel').toggleClass('hide show');
            })
        })
    </script>
    <script>
        $(document).on('click', '.close-win', function() {
            $(this).parent().hide('slide', function() {
                setTimeout(() => {
                    $(this).parent()
                        .hide(); // Теперь `this` внутри setTimeout ссылается на .parent()
                }, 100);
            });
        })
    </script>
    
    <script>
        $(document).ready(function() {
            $(".element").waypoint(function() {
                $(this.element).css('transform', 'translateX(0)'); // Применяем трансформ только к самому элементу
            }, {
                offset: "75%"  // Запуск при достижении 75% блока
            });
        });
    </script>
    <script>
        $(".faq-box").waypoint(function() {
            // Начинаем анимацию только тогда, когда блок faq-box видим
            $('.accord-item-obj').each(function(index) {
                // Каждый элемент сдвигаем с задержкой, увеличивая её с каждым шагом
                var element = this; // Ссылаемся на текущий элемент
                setTimeout(function(){
                    $(element).css('transform', 'translateX(0)').css('transition', 'transform 0.5s ease');
                }, index * 250); // Увеличиваем задержку для каждого элемента (например, 150мс)
            });
        }, {
            offset: "75%" // Когда блок faq-box на 75% видим
        });
    </script>
</body>

</html>
