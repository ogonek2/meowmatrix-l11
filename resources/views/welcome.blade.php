@extends('layouts.main.app')

@section('title')
    Головна сторінка - MeowMatrix розробка веб сайтів, та інтернет маркетинг \ Найкраще рішення для вашого бізнесу
@endsection

@section('content')
    <div class="box content-element header-box">
        <div class="header-elements">
            <div class="element">
                <div class="title">
                    <div class="box-c">
                        <span>
                            Створюємо сучасні
                        </span>
                    </div>
                    <div class="box-c">
                        <span>веб-рішення</span>
                        <div class="logo-title">
                            <img loading="lazy" src="{{ asset('storage/source/logo/btn-logo.svg') }}" alt="MeowMatrix">
                        </div>
                        <span>для бізнесу</span>
                    </div>
                </div>
                <div class="key-list">
                    <div class="items-key">
                        <div class="item">
                            <p>Мобільні додатки</p>
                        </div>
                        <div class="item">
                            <p>CRM</p>
                        </div>
                        <div class="item">
                            <p>B2B/B2C платформи</p>
                        </div>
                        <div class="item">
                            <p>Веб сайти</p>
                        </div>
                        <div class="item">
                            <p>Інтернет-магазини</p>
                        </div>
                        <div class="item">
                            <p>Сайти-візитки</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-footer">
            <img loading="lazy" src="{{ asset('storage/source/background/MEOW.svg') }}" alt="meow">
        </div>
    </div>
    <div class="box-container-column no-reverse">
        <div class="box content-element about-box">
            <div class="content-el">
                <div class="element demo-left-static">
                    <div class="text-container cursor-focus">
                        <p>
                            Ваш бізнес заслуговує на сайт, який не просто виглядає круто, а й працює на вас 24/7.
                            Ми надаємо сервіси, які продають, залучають клієнтів і виділяють вас серед конкурентів.
                        </p>
                        <br>
                        <div class="btn btn-style-black-type">
                            <span>Консультація</span>
                        </div>
                    </div>
                </div>
                <div class="block-numeric">
                    <span>01</span>
                </div>
            </div>
        </div>
        <div class="box content-element services-box">
            <div class="content-el">
                <div class="block-numeric">
                    <span>02</span>
                </div>
                <div class="slide-head">
                    <h1 class="service-title">САЙТ</h1>
                </div>
                <div class="element demo-right-static">
                    <div class="block-content">
                        <div class="container">
                            <div class="slider-items">
                                <div class="content-slide" data-title="САЙТ">
                                    <div class="box-item-slide">
                                        <div class="text-content">
                                            <h1 class="head-t-class-style">
                                                РОЗРОБКА САЙТІВ
                                            </h1>
                                            <p>
                                                Сайт – це той, хто знає, як показати ваш бізнес із найкращого боку. Він може
                                                відповідати
                                                на запитання, показувати ваші продукти чи послуги, і навіть створювати
                                                відчуття,
                                                що
                                                клієнт вже вас знає. Що може бути краще?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-slide" data-title="ДИЗАЙН">
                                    <div class="box-item-slide">
                                        <div class="text-content">
                                            <h1 class="head-t-class-style">
                                                ВЕБ ДИЗАЙН
                                            </h1>
                                            <p>
                                                Сайт – це той, хто знає, як показати ваш бізнес із найкращого боку. Він може
                                                відповідати
                                                на запитання, показувати ваші продукти чи послуги, і навіть створювати
                                                відчуття,
                                                що
                                                клієнт вже вас знає. Що може бути краще?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-slide" data-title="GOOGLE">
                                    <div class="box-item-slide">
                                        <div class="text-content">
                                            <h1 class="head-t-class-style">
                                                Google ADS
                                            </h1>
                                            <p>
                                                Сайт – це той, хто знає, як показати ваш бізнес із найкращого боку. Він може
                                                відповідати
                                                на запитання, показувати ваші продукти чи послуги, і навіть створювати
                                                відчуття,
                                                що
                                                клієнт вже вас знає. Що може бути краще?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-slide" data-title="ПОШУКОВА ОПТИМІЗАЦІЯ">
                                    <div class="box-item-slide">
                                        <div class="text-content">
                                            <h1 class="head-t-class-style">
                                                Налаштування SEO
                                            </h1>
                                            <p>
                                                Сайт – це той, хто знає, як показати ваш бізнес із найкращого боку. Він може
                                                відповідати
                                                на запитання, показувати ваші продукти чи послуги, і навіть створювати
                                                відчуття,
                                                що
                                                клієнт вже вас знає. Що може бути краще?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-slide" data-title="СОЦІАЛЬНІ МЕРЕЖІ">
                                    <div class="box-item-slide">
                                        <div class="text-content">
                                            <h1 class="head-t-class-style">
                                                SMM - Менеджмент
                                            </h1>
                                            <p>
                                                Сайт – це той, хто знає, як показати ваш бізнес із найкращого боку. Він може
                                                відповідати
                                                на запитання, показувати ваші продукти чи послуги, і навіть створювати
                                                відчуття,
                                                що
                                                клієнт вже вас знає. Що може бути краще?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-slide" data-title="ГРАФІЧНИЙ ДИЗАЙН">
                                    <div class="box-item-slide">
                                        <div class="text-content">
                                            <h1 class="head-t-class-style">
                                                Графічний дизайн
                                            </h1>
                                            <p>
                                                Сайт – це той, хто знає, як показати ваш бізнес із найкращого боку. Він може
                                                відповідати
                                                на запитання, показувати ваші продукти чи послуги, і навіть створювати
                                                відчуття,
                                                що
                                                клієнт вже вас знає. Що може бути краще?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-footer">
                                <div class="btn btn-style-black-type">
                                    <span>Усі сервіси</span>
                                </div>
                                <div class="buttons-paginator">
                                    <div class="btn-pag prev prev-service">
                                        <svg width="26" height="32" viewBox="0 0 26 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.9548 0.860495L0.933935 12.8813L1.34665 13.294L1.04252 13.2991L0.964848 19.2986L9.10892 19.1636L8.40845 26.8687L12.6511 31.1114L16.8937 26.8688L9.18727 19.1623L24.9616 18.9008L25.0392 12.9013L9.1356 13.1649L17.1974 5.10314L12.9548 0.860495Z"
                                                fill="#C4352F" />
                                        </svg>
                                    </div>
                                    <div class="btn-pag next next-service">
                                        <svg width="26" height="32" viewBox="0 0 26 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.0452 0.860495L25.0661 12.8813L24.6534 13.294L24.9575 13.2991L25.0352 19.2986L16.8911 19.1636L17.5915 26.8687L13.3489 31.1114L9.10627 26.8688L16.8127 19.1623L1.03845 18.9008L0.960775 12.9013L16.8644 13.1649L8.80261 5.10314L13.0452 0.860495Z"
                                                fill="#C4352F" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box content-element perpectives-box">
        <div class="content-el">
            <div class="element">
                <div class="text-container">
                    <span>
                        Наш підхід
                    </span>
                    <p>
                        Аналізуємо ваш бізнес, цільову аудиторію
                        та потреби. Розробляємо швидкі, зручні та оптимізовані сайти, що приносять реальні результати.
                    </p>
                </div>
            </div>
            <div class="element">
                <div class="objects">
                    <div class="object">
                        <span class="numeric" data-target="100">0</span>
                        <p>Гарантія</p>
                    </div>
                    <div class="object">
                        <span class="numeric" data-target="30">0</span>
                        <p>Задоволених клієнтів</p>
                    </div>
                    <div class="object">
                        <span class="numeric" data-target="7">0</span>
                        <p>Років досвіду</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box-container-column reverse gap-position">
        <div class="box content-element stack-box">
            <div class="content-el">
                <div class="block-numeric">
                    <span>03</span>
                </div>
                <div class="element demo-right-static">
                    <div class="block-content">
                        <div class="container">
                            <div class="text-container">
                                <h1 class="head-t-class-style">Технології</h1>
                            </div>
                            <div class="objects">
                                <div class="object cursor-focus">
                                    <div class="icon">
                                        <svg width="196" height="192" viewBox="0 0 196 192" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <rect width="196" height="192" fill="url(#pattern0_1368_298)" />
                                            <defs>
                                                <pattern id="pattern0_1368_298" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#image0_1368_298"
                                                        transform="matrix(0.0025 0 0 0.00255208 0 -0.0104167)" />
                                                </pattern>
                                                <image id="image0_1368_298" width="400" height="400"
                                                    preserveAspectRatio="none"
                                                    xlink:href="data:image/png;base64,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" />
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="text">
                                        <h1 class="vue-stack">VUE.js</h1>
                                        <p>
                                            Ми обрали Vue.js за його гнучкість, простоту інтеграції та багаті можливості для
                                            розширення.
                                            Це ідеальний вибір для проєктів будь-якої складності.
                                        </p>
                                    </div>
                                </div>
                                <div class="object cursor-focus">
                                    <div class="icon">
                                        <svg width="197" height="192" viewBox="0 0 197 192" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <rect width="197" height="192" fill="url(#pattern0_1368_304)" />
                                            <defs>
                                                <pattern id="pattern0_1368_304" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#image0_1368_304"
                                                        transform="matrix(0.000605263 0 0 0.000621622 -0.401316 -0.121622)" />
                                                </pattern>
                                                <image id="image0_1368_304" width="3000" height="2000"
                                                    preserveAspectRatio="none"
                                                    xlink:href="data:image/png;base64,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" />
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="text">
                                        <h1 class="laravel-stack">LARAVEL</h1>
                                        <p>
                                            Завдяки глибокому знанню Laravel і любові до цього інструмента, ми впевнені, що
                                            зможемо втілити ваші проєкти на найвищому рівні.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box content-element clients-box">
            <div class="content-el">
                <div class="element demo-left-static">
                    <div class="block-content">
                        <div class="container">
                            <div class="text-container">
                                <h1 class="head-t-class-style">НАШІ КЛІЄНТИ</h1>
                            </div>
                            <div class="content-element-container">
                                <div class="objects client-slides-items">
                                    <div class="object client-slide">
                                        <div class="sw-client">
                                            <div class="positions-banner sources_banners_pt_present_slide swiper mySwiperClient">
                                                <div class="images swiper-wrapper">
                                                    <img loading="lazy" class="source_post swiper-slide"
                                                        src="{{ asset('storage/source/portfolio/varenychka/image 251.png') }}"
                                                        alt="Вареничка">
                                                    <img loading="lazy" class="source_post swiper-slide"
                                                        src="{{ asset('storage/source/portfolio/varenychka/image 252.png') }}"
                                                        alt="Вареничка">
                                                    <img loading="lazy" class="source_post swiper-slide"
                                                        src="{{ asset('storage/source/portfolio/varenychka/image 253.png') }}"
                                                        alt="Вареничка">
                                                    <img loading="lazy" class="source_post swiper-slide"
                                                        src="{{ asset('storage/source/portfolio/varenychka/image 254.png') }}"
                                                        alt="Вареничка">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="information">
                                            <h1 class="head-t-class">
                                                eCommerce-платформа для доставки напівфабрикатів
                                            </h1>
                                            <div class="key-list">
                                                <div class="items-key">
                                                    <div class="item">
                                                        <p>Дизайн</p>
                                                    </div>
                                                    <div class="item">
                                                        <p>Розробка</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer-block-slide">
                                                <div class="buttons-paginator">
                                                    <div class="btn-pag prev prev-client">
                                                        <svg width="26" height="32" viewBox="0 0 26 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M12.9548 0.860495L0.933935 12.8813L1.34665 13.294L1.04252 13.2991L0.964848 19.2986L9.10892 19.1636L8.40845 26.8687L12.6511 31.1114L16.8937 26.8688L9.18727 19.1623L24.9616 18.9008L25.0392 12.9013L9.1356 13.1649L17.1974 5.10314L12.9548 0.860495Z"
                                                                fill="#C4352F" />
                                                        </svg>
                                                    </div>
                                                    <div class="btn-pag next-client">
                                                        <svg width="26" height="32" viewBox="0 0 26 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M13.0452 0.860495L25.0661 12.8813L24.6534 13.294L24.9575 13.2991L25.0352 19.2986L16.8911 19.1636L17.5915 26.8687L13.3489 31.1114L9.10627 26.8688L16.8127 19.1623L1.03845 18.9008L0.960775 12.9013L16.8644 13.1649L8.80261 5.10314L13.0452 0.860495Z"
                                                                fill="#C4352F" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="object client-slide">
                                        <div class="sw-client">
                                            <div class="positions-banner sources_banners_pt_present_slide swiper mySwiperClient">
                                                <div class="images swiper-wrapper">
                                                    <img loading="lazy" class="source_post swiper-slide"
                                                        src="{{ asset('storage/source/portfolio/enot24/1.png') }}"
                                                        alt="Энот24">
                                                    <img loading="lazy" class="source_post swiper-slide"
                                                        src="{{ asset('storage/source/portfolio/enot24/2.png') }}"
                                                        alt="Энот24">
                                                    <img loading="lazy" class="source_post swiper-slide"
                                                        src="{{ asset('storage/source/portfolio/enot24/3.png') }}"
                                                        alt="Энот24">
                                                    <img loading="lazy" class="source_post swiper-slide"
                                                        src="{{ asset('storage/source/portfolio/enot24/4.png') }}"
                                                        alt="Энот24">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="information">
                                            <h1 class="head-t-class">
                                                eCommerce-платформа мережі хімчисток у Києві
                                            </h1>
                                            <div class="key-list">
                                                <div class="items-key">
                                                    <div class="item">
                                                        <p>Дизайн</p>
                                                    </div>
                                                    <div class="item">
                                                        <p>Розробка</p>
                                                    </div>
                                                    <div class="item">
                                                        <p>Ведення \ Підтримка</p>
                                                    </div>
                                                    <div class="item">
                                                        <p>Ведення \ Підтримка</p>
                                                    </div>
                                                     <div class="item">
                                                        <p>Ведення \ Підтримка</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer-block-slide">
                                                <div class="buttons-paginator">
                                                    <div class="btn-pag prev prev-client">
                                                        <svg width="26" height="32" viewBox="0 0 26 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M12.9548 0.860495L0.933935 12.8813L1.34665 13.294L1.04252 13.2991L0.964848 19.2986L9.10892 19.1636L8.40845 26.8687L12.6511 31.1114L16.8937 26.8688L9.18727 19.1623L24.9616 18.9008L25.0392 12.9013L9.1356 13.1649L17.1974 5.10314L12.9548 0.860495Z"
                                                                fill="#C4352F" />
                                                        </svg>
                                                    </div>
                                                    <div class="btn-pag next-client">
                                                        <svg width="26" height="32" viewBox="0 0 26 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M13.0452 0.860495L25.0661 12.8813L24.6534 13.294L24.9575 13.2991L25.0352 19.2986L16.8911 19.1636L17.5915 26.8687L13.3489 31.1114L9.10627 26.8688L16.8127 19.1623L1.03845 18.9008L0.960775 12.9013L16.8644 13.1649L8.80261 5.10314L13.0452 0.860495Z"
                                                                fill="#C4352F" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="element-texty">
                    <marquee behavior="scroll" direction="right" scrollamount="20">
                        <span>MEOWMATRIX</span>
                        <span>MEOWMATRIX</span>
                        <span>MEOWMATRIX</span>
                        <span>MEOWMATRIX</span>
                        <span>MEOWMATRIX</span>
                        <span>MEOWMATRIX</span>
                        <span>MEOWMATRIX</span>
                        <span>MEOWMATRIX</span>
                        <span>MEOWMATRIX</span>
                        <span>MEOWMATRIX</span>
                    </marquee>
                </div>
                <div class="block-numeric">
                    <span>04</span>
                </div>
            </div>
        </div>
    </div>
    <div class="box-container-column reverse gap-position">
        <div class="box content-element reviews-box">
            <div class="content-el">
                <div class="block-numeric">
                    <span>05</span>
                </div>
                <div class="element demo-right-static">
                    <div class="block-content">
                        <div class="container">
                            <div class="content-element-container">
                                <div class="text-container">
                                    <h1 class="head-t-class-style">ВІДГУКИ</h1>
                                </div>
                                <div class="objects reviews-slides-items mySwiperReviews">
                                    <div class="swiper-wrapper">
                                        <div class="object swiper-slide">
                                            <div class="text-content">
                                                <div class="head-point">
                                                    <span class="star">★★★★★</span>
                                                </div>
                                                <p>
                                                    Дорогие разработчики сайта, хочу выразить вам искреннюю благодарность за ваш труд и усердие в создании моего блога. Спасибо за ваше стремление улучшать и совершенствовать этот ресурс. Ваш труд действительно оценим, и я со своей стороны сделаю все, чтобы он приносил пользу для людей со всего мира. Еще раз, большое спасибо за ваше усердие и вклад.
                                                </p>
                                            </div>
                                            <div class="author">
                                                <div class="avatar">
                                                    <dotlottie-player src="https://lottie.host/8844132b-c5eb-4ef8-9410-bbfb90bf1e03/2yc0bpefhg.lottie" background="transparent" speed="1" style="width: 100%; height: 100%" direction="1" playMode="normal" loop autoplay></dotlottie-player>
                                                </div>
                                                <div class="name-author">
                                                    <p>
                                                        Владимир Оконь
                                                    </p>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="object swiper-slide">
                                            <div class="text-content">
                                                <div class="head-point">
                                                    <span class="star">★★★★★</span>
                                                </div>
                                                <p>
                                                    Всем добрый день. Заказал сайт натяжных потолков. Что я хочу сказать. Сайт мне понравился. Были кое какие разногласия по поводу предоплаты, но это всё из- за отношения в обществе и частого кидалого на деньги, и нужно понять автора, что он тратит свое время и кучу сил на создание сайта, по этому ему нужна гарантия. В общем и целом всё сделали быстро и качественно всём рекомендую!)
                                            </div>
                                            <div class="author">
                                                <div class="avatar">
                                                    <dotlottie-player src="https://lottie.host/8844132b-c5eb-4ef8-9410-bbfb90bf1e03/2yc0bpefhg.lottie" background="transparent" speed="1" style="width: 100%; height: 100%" direction="1" playMode="normal" loop autoplay></dotlottie-player>
                                                </div>
                                                <div class="name-author">
                                                    <p>Максим</p>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="object swiper-slide">
                                            <div class="text-content">
                                                <div class="head-point">
                                                    <span class="star">★★★★★</span>
                                                </div>
                                                <p>
                                                    Добрий ранок! Заказав будівельний сайт. Зробили в стислий термін, гарний інтерфейс. Я задоволений. РЕКОМЕНДУЮ.
                                                </p>
                                            </div>
                                            <div class="author">
                                                <div class="avatar">
                                                    <dotlottie-player src="https://lottie.host/8844132b-c5eb-4ef8-9410-bbfb90bf1e03/2yc0bpefhg.lottie" background="transparent" speed="1" style="width: 100%; height: 100%" direction="1" playMode="normal" loop autoplay></dotlottie-player>
                                                </div>
                                                <div class="name-author">
                                                    <p>Юрій</p>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="object swiper-slide">
                                            <div class="text-content">
                                                <div class="head-point">
                                                    <span class="star">★★★★★</span>
                                                </div>
                                                <p>Заказал одно страничный сайт в meow matrix. Ребята адекватные. Отнеслись очень хорошо. Сделали хороший сайт. Всем рекомендую обращайтесь</p>
                                            </div>
                                            <div class="author">
                                                <div class="avatar">
                                                    <dotlottie-player src="https://lottie.host/8844132b-c5eb-4ef8-9410-bbfb90bf1e03/2yc0bpefhg.lottie" background="transparent" speed="1" style="width: 100%; height: 100%" direction="1" playMode="normal" loop autoplay></dotlottie-player>
                                                </div>
                                                <div class="name-author">
                                                    <p>Костянтин</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="btn btn-style-type-2">
                                    <span>Обговорити проєкт</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box content-element parthner-box">
            <div class="content-el">
                <div class="element demo-left-static">
                    <div class="block-content">
                        <div class="container">
                            <div class="content-element-container">
                                <div class="text-container">
                                    <h1 class="head-t-class-style">
                                        10% від кожної<br>співпраці на зсу
                                    </h1>
                                </div>
                                <div class="items-content-container">
                                    <div class="banner-p">
                                        <div class="photo">
                                            <img loading="lazy" src="{{ asset('storage/source/materials/ivan_pitelyak.jpg') }}" alt="Іван Пітеляк">
                                        </div>
                                        <div class="name">
                                            <p>
                                                Директор фонду Іван Пітеляк
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-p">
                                        <div class="text">
                                            <p>
                                                Ми донатимо 10% на ЗСУ з кожної співпраці.<br>
                                                Таким чином ви також маєте змогу долучитися до допомоги.
                                            </p>
                                        </div>
                                        <div class="btn btn-style-black-type">
                                            <span>Сайт фонду</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-numeric">
                    <span>06</span>
                </div>
            </div>
        </div>
    </div>
    <div class="box-container-column reverse gap-position">
        <div class="box content-element news-box">
            <div class="content-el">
                <div class="element demo-right-static">
                    <div class="block-content">
                        <div class="container">
                            <div class="content-element-container">
                                <div class="text-container">
                                    <h1 class="head-t-class-style">
                                        ПУБЛІКАЦІЇ
                                    </h1>
                                </div>
                                <div class="objects swiper mySwiperNews">
                                    <div class="news-elements swiper-wrapper">
                                        <div class="object swiper-slide">
                                            <div class="banner">
                                                <img loading="lazy" src="https://habrastorage.org/getpro/habr/upload_files/ad0/198/fc5/ad0198fc550fb1373768476f7fde0197.png" alt="Пост 1">
                                            </div>
                                            <div class="text-content">
                                                <time datetime="Березень 09, 2025">Березень 09, 2025</time>
                                                <p>
                                                    Laravel - Більше про інструмент, на якому ми створюємо ваші проєкти
                                                </p>
                                            </div>
                                        </div>
                                        <div class="object swiper-slide">
                                            <div class="banner">
                                                <img loading="lazy" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQN6SxQ1lQpsDyjOXwE8epYMpQNuciC6pnxZm4rCS8Ep1yjEB9wKia5cHHtxqOQ1E0WRVY&usqp=CAU" alt="Пост 2">
                                            </div>
                                            <div class="text-content">
                                                <time datetime="Березень 09, 2025">Березень 09, 2025</time>
                                                <p>
                                                    Стратегія, за якою ми робимо ваш проєкт. -
                                                    Інтенсивний план просування вашого продукту
                                                </p>
                                            </div>
                                        </div>
                                        <div class="object swiper-slide">
                                            <div class="banner">
                                                <img loading="lazy" src="https://androidinsider.ru/wp-content/uploads/2021/12/app_2021_check_list-750x504.png" alt="Пост 3">
                                            </div>
                                            <div class="text-content">
                                                <time datetime="Березень 09, 2025">Березень 09, 2025</time>
                                                <p>
                                                    Чому додаток це корисно. Нащо його створювати, коли і для як це зробити
                                                </p>
                                            </div>
                                        </div>
                                        <div class="object swiper-slide">
                                            <div class="banner">
                                                <img loading="lazy" src="https://project-seo.net/wp-content/uploads/2019/12/seo.jpg" alt="Пост 4">
                                            </div>
                                            <div class="text-content">
                                                <time datetime="Березень 09, 2025">Березень 09, 2025</time>
                                                <p>
                                                    Кожний крое.. Кожна сторінка. - Все це дорога до успішного СЕО. Кожен день додається щось нове! Інтенсивно просуваючи свій продукт
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box content-element faq-box">
            <div class="content-el">
                <div class="element demo-left-static">
                    <div class="block-content">
                        <div class="container">
                            <div class="content-element-container">
                                <div class="text-container">
                                    <h1 class="head-t-class-style">
                                        НАЙЧАСТІШІ ЗАПИТАННЯ
                                    </h1>
                                </div>
                                <div class="objects">
                                    <div class="object accord-item-obj">
                                        <div class="head">
                                            <p class="head">Скільки часу займає створення веб-сайту?</p>
                                            <div class="control-elem">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <p class="text">
                                            Час створення веб-сайту залежить від його складності та вимог. Прості сайти можуть бути розроблені за кілька тижнів, у той час як складніші проекти можуть зайняти кілька місяців. Ми прагнемо дотримуватись термінів і тримаємо вас в курсі прогресу роботи.
                                        </p>
                                    </div>
                                    <div class="object accord-item-obj">
                                        <div class="head">
                                            <p class="head">Скільки часу займає створення веб-сайту?</p>
                                            <div class="control-elem">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <p class="text">
                                            Час створення веб-сайту залежить від його складності та вимог. Прості сайти можуть бути розроблені за кілька тижнів, у той час як складніші проекти можуть зайняти кілька місяців. Ми прагнемо дотримуватись термінів і тримаємо вас в курсі прогресу роботи.
                                        </p>
                                    </div>
                                    <div class="object accord-item-obj">
                                        <div class="head">
                                            <p class="head">Скільки часу займає створення веб-сайту?</p>
                                            <div class="control-elem">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <p class="text">
                                            Час створення веб-сайту залежить від його складності та вимог. Прості сайти можуть бути розроблені за кілька тижнів, у той час як складніші проекти можуть зайняти кілька місяців. Ми прагнемо дотримуватись термінів і тримаємо вас в курсі прогресу роботи.
                                        </p>
                                    </div>
                                    <div class="object accord-item-obj">
                                        <div class="head">
                                            <p class="head">Скільки часу займає створення веб-сайту?</p>
                                            <div class="control-elem">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <p class="text">
                                            Час створення веб-сайту залежить від його складності та вимог. Прості сайти можуть бути розроблені за кілька тижнів, у той час як складніші проекти можуть зайняти кілька місяців. Ми прагнемо дотримуватись термінів і тримаємо вас в курсі прогресу роботи.
                                        </p>
                                    </div>
                                    <div class="object accord-item-obj">
                                        <div class="head">
                                            <p class="head">Скільки часу займає створення веб-сайту?</p>
                                            <div class="control-elem">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <p class="text">
                                            Час створення веб-сайту залежить від його складності та вимог. Прості сайти можуть бути розроблені за кілька тижнів, у той час як складніші проекти можуть зайняти кілька місяців. Ми прагнемо дотримуватись термінів і тримаємо вас в курсі прогресу роботи.
                                        </p>
                                    </div>
                                    <div class="object accord-item-obj">
                                        <div class="head">
                                            <p class="head">Скільки часу займає створення веб-сайту?</p>
                                            <div class="control-elem">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <p class="text">
                                            Час створення веб-сайту залежить від його складності та вимог. Прості сайти можуть бути розроблені за кілька тижнів, у той час як складніші проекти можуть зайняти кілька місяців. Ми прагнемо дотримуватись термінів і тримаємо вас в курсі прогресу роботи.
                                        </p>
                                    </div>
                                    <div class="object accord-item-obj">
                                        <div class="head">
                                            <p class="head">Скільки часу займає створення веб-сайту?</p>
                                            <div class="control-elem">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <p class="text">
                                            Час створення веб-сайту залежить від його складності та вимог. Прості сайти можуть бути розроблені за кілька тижнів, у той час як складніші проекти можуть зайняти кілька місяців. Ми прагнемо дотримуватись термінів і тримаємо вас в курсі прогресу роботи.
                                        </p>
                                    </div>
                                    <div class="object accord-item-obj">
                                        <div class="head">
                                            <p class="head">Скільки часу займає створення веб-сайту?</p>
                                            <div class="control-elem">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <p class="text">
                                            Час створення веб-сайту залежить від його складності та вимог. Прості сайти можуть бути розроблені за кілька тижнів, у той час як складніші проекти можуть зайняти кілька місяців. Ми прагнемо дотримуватись термінів і тримаємо вас в курсі прогресу роботи.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Services slide --}}
    <script>
        $(document).ready(function() {
            let currentIndex = 0;
            const totalSlides = $('.content-slide').length;

            function updateSlideWidth() {
                return $('.content-slide').width(); // Получаем ширину одного слайда динамически
            }

            function showSlide(index) {
                const slideWidth = updateSlideWidth(); // Обновляем ширину слайда при каждом вызове
                const $currentSlide = $('.content-slide').eq(currentIndex);
                const nextSlideTitle = $('.content-slide').eq(index).data('title');
                const $nextSlide = $('.content-slide').eq(index);

                $currentSlide.removeClass('active');

                // Сдвигаем текущий слайд вправо
                $currentSlide.css('transform', 'translateX(20%)');

                // Ждём завершения анимации сдвига
                setTimeout(() => {
                    // Возвращаем текущий слайд на место
                    $currentSlide.css('transform', 'translateX(0)');

                    // Переходим к следующему слайду
                    const offset = -index * slideWidth;

                    // Обновляем слайдер (сдвигаем все слайды)
                    $('.slider-items').css('left', offset + 'px');

                    // После завершения анимации, переключаем индекс
                    currentIndex = index;

                    $nextSlide.addClass('active');

                    // Анимируем изменение текста в h1
                    $('.service-title').css({
                        'transform': 'translateX(-100%)',
                        'opacity': '0'
                    });

                    // После завершения анимации обновляем текст и возвращаем его обратно
                    setTimeout(() => {
                        $('.service-title').text(nextSlideTitle).css({
                            'transform': 'translateX(0)',
                            'opacity': '1'
                        });
                    }, 500); // Задержка для анимации текста
                }, 200); // Время для сдвига вправо
            }

            $('.next-service').click(function() {
                const nextIndex = (currentIndex + 1) % totalSlides;
                showSlide(nextIndex);
            });

            $('.prev-service').click(function() {
                const prevIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                showSlide(prevIndex);
            });

            // Обновляем ширину слайдов при изменении размера окна
            $(window).resize(function() {
                showSlide(currentIndex);
            });

            showSlide(currentIndex); // Показ первого слайда при загрузке
        });
    </script>
    {{-- Client Slide IMG loading="lazy" --}}
    <script>
        $(document).ready(function() {
            let currentIndex = 0;
            const totalSlides = $('.client-slide').length;

            function updateSlideWidth() {
                return $('.client-slides-items').width(); // Получаем ширину одного слайда динамически
            }

            function showSlide(index) {
                const slideWidth = updateSlideWidth(); // Обновляем ширину слайда при каждом вызове
                const $currentSlide = $('.client-slide').eq(currentIndex);
                const $nextSlide = $('.client-slide').eq(index);

                $currentSlide.removeClass('active');

                currentIndex = index;
                // Ждём завершения анимации сдвига
                $nextSlide.addClass('active');
            }

            $('.next-client').click(function() {
                const nextIndex = (currentIndex + 1) % totalSlides;
                showSlide(nextIndex);
            });

            $('.prev-client').click(function() {
                const prevIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                showSlide(prevIndex);
            });

            // Обновляем ширину слайдов при изменении размера окна
            $(window).resize(function() {
                showSlide(currentIndex);
            });

            showSlide(currentIndex); // Показ первого слайда при загрузке
        });
    </script>

    {{-- Perspectives waypoint --}}
    <script>
        $(document).ready(function() {
            var waypointTriggered = false; // Флаг, чтобы анимация срабатывала только 1 раз

            $(".perpectives-box").waypoint(function() {
                if (!waypointTriggered) {
                    waypointTriggered = true;
                    $(".numeric").each(function() {
                        var target = $(this).data("target");
                        var counter = new countUp.CountUp(this, target, {
                            duration: 2,
                            separator: " "
                        });
                        if (!counter.error) counter.start();
                    });
                }
            }, {
                offset: "75%"
            }); // Запуск при появлении 75% блока на экране
            // $(".services-box").waypoint(function() {
            //     $('.services-ads').show()
            //     setTimeout(function(){
            //         $('.services-ads').children('.content-window').show('slide')
            //     }, 200)
            // }, {
            //     offset: "75%"
            // }); // Запуск при появлении 75% блока на экране
        });
    </script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiperClient", {
            slidesPerView: 1,
            spaceBetween: 50,
            autoplay: {
                delay: 1000,  // интервал между слайдами в миллисекундах
            },
            pagination: {
                clickable: true,
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiperReviews", {
            slidesPerView: 1,
            spaceBetween: 30,
            autoplay: {
                delay: 5000,  // интервал между слайдами в миллисекундах
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiperNews", {
            slidesPerView: "auto",
            spaceBetween: 50,
            autoplay: {
                delay: 5000,  // интервал между слайдами в миллисекундах
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    
    {{-- FAQ --}}
    <script>
        $(document).on('click', '.accord-item-obj', function() {
            $(this).toggleClass('active')
        })
    </script>
@endsection
