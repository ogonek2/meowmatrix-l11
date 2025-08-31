@extends('layouts.main.app')

@section('title')
    @if (app()->getLocale() === 'uk')
        MeowMatrix - Інноваційна IT-компанія | Розробка власних бізнесів та форум
    @else
        MeowMatrix - Innovative IT Company | Business Development & Forum
    @endif
@endsection

@section('description')
    @if (app()->getLocale() === 'uk')
        MeowMatrix - це інноваційна IT-компанія, яка створює власні бізнеси, розробляє технології та веде активну спільноту розробників через наш форум
    @else
        MeowMatrix is an innovative IT company that creates its own businesses, develops technologies, and maintains an active developer community through our forum
    @endif
@endsection

@section('content')
    <!-- Cache Buster: {{ time() }} -->

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-black overflow-hidden">

        <!-- Enhanced Background Pattern -->
        <div class="absolute inset-0">
            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0"
                    style="background-image: linear-gradient(rgba(216, 250, 0, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(216, 250, 0, 0.1) 1px, transparent 1px); background-size: 50px 50px;">
                </div>
            </div>

            <!-- Floating Geometric Elements -->
            <div
                class="absolute top-20 left-20 w-24 h-24 border border-[#D8FA00] opacity-10 transform rotate-45 float-element">
            </div>
            <div
                class="absolute top-40 right-32 w-16 h-16 border border-[#229CA1] opacity-10 transform rotate-45 float-element">
            </div>
            <div class="absolute bottom-40 left-1/4 w-20 h-20 border border-[#C53630] opacity-10 rounded-full float-element">
            </div>
            <div
                class="absolute top-1/3 right-16 w-12 h-12 border border-[#D8FA00] opacity-10 transform rotate-45 float-element">
            </div>

            <!-- Diagonal Lines -->
            <div class="absolute top-0 left-0 w-full h-full opacity-5">
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#D8FA00] to-transparent">
                </div>
                <div
                    class="absolute top-1/4 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#229CA1] to-transparent">
                </div>
                <div
                    class="absolute top-1/2 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#C53630] to-transparent">
                </div>
                <div
                    class="absolute top-3/4 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#D8FA00] to-transparent">
                </div>
            </div>

            <!-- Corner Accents -->
            <div class="absolute top-0 left-0 w-40 h-40 border-l-2 border-t-2 border-[#D8FA00] opacity-20 parallax-slow">
            </div>
            <div
                class="absolute bottom-0 right-0 w-40 h-40 border-r-2 border-b-2 border-[#229CA1] opacity-20 parallax-slow">
            </div>

            <!-- Floating Dots -->
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-[#D8FA00] opacity-30 rounded-full animate-pulse"></div>
            <div class="absolute top-1/3 right-1/3 w-2 h-2 bg-[#229CA1] opacity-30 rounded-full animate-pulse"
                style="animation-delay: 1s;"></div>
            <div class="absolute bottom-1/3 left-1/3 w-2 h-2 bg-[#C53630] opacity-30 rounded-full animate-pulse"
                style="animation-delay: 2s;"></div>

            <!-- Subtle Glow Effects -->
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-[#D8FA00] opacity-5 rounded-full blur-3xl parallax-bg">
            </div>
            <div class="absolute top-1/4 right-1/4 w-64 h-64 bg-[#229CA1] opacity-5 rounded-full blur-3xl parallax-bg">
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center min-h-screen py-20">
                <!-- Left: Content -->
                <div class="lg:col-span-7 text-center lg:text-left stagger-container">
                    <!-- Brand Badge -->
                    <div
                        class="inline-flex items-center px-4 py-2 border-2 border-[#D8FA00] rounded-full mb-8 stagger-item hover-lift">
                        <div class="w-2 h-2 bg-[#D8FA00] rounded-full mr-3 animate-pulse"></div>
                        <span class="text-[#D8FA00] font-russo text-sm tracking-wide">ІННОВАЦІЙНА IT-КОМПАНІЯ</span>
                    </div>

                    <!-- Main Heading -->
                    <h1
                        class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-russo text-white mb-6 leading-none stagger-item text-reveal">
                        Створюємо
                        <br><span class="text-[#D8FA00]">майбутнє</span>
                        <br>IT-<span class="text-[#229CA1]">індустрії</span>
                    </h1>

                    <!-- Subtitle -->
                    <p
                        class="text-lg sm:text-xl text-gray-300 mb-8 font-lato leading-relaxed max-w-2xl mx-auto lg:mx-0 stagger-item text-reveal">
                        Ми не просто розробляємо технології — ми створюємо власні бізнеси, розвиваємо спільноту розробників 
                        та будуємо майбутнє IT-індустрії через інновації та співпрацю.
                    </p>

                    <!-- Key Features -->
                    <div class="flex flex-wrap gap-4 mb-10 justify-center lg:justify-start stagger-item">
                        <div class="flex items-center px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg hover-scale">
                            <i class="fas fa-building text-[#D8FA00] mr-2"></i>
                            <span class="text-gray-300 text-sm font-lato">Власні бізнеси</span>
                        </div>
                        <div class="flex items-center px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg hover-scale">
                            <i class="fas fa-users text-[#229CA1] mr-2"></i>
                            <span class="text-gray-300 text-sm font-lato">Спільнота форуму</span>
                        </div>
                        <div class="flex items-center px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg hover-scale">
                            <i class="fas fa-lightbulb text-[#C53630] mr-2"></i>
                            <span class="text-gray-300 text-sm font-lato">Інновації</span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 mb-12 justify-center lg:justify-start stagger-item">
                        <a href="#forum"
                            class="group inline-flex items-center justify-center px-8 py-4 bg-[#D8FA00] text-black font-russo text-base border-2 border-[#D8FA00] hover:bg-transparent hover:text-[#D8FA00] transition-all duration-300 rounded-lg btn-glow hover-lift">
                            <i class="fas fa-users mr-3"></i>
                            Приєднатися до форуму
                            <i
                                class="fas fa-arrow-right ml-3 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                        <a href="#businesses"
                            class="group inline-flex items-center justify-center px-8 py-4 border-2 border-[#229CA1] text-[#229CA1] font-russo text-base hover:bg-[#229CA1] hover:text-black transition-all duration-300 rounded-lg hover-lift">
                            <i class="fas fa-building mr-3"></i>
                            Наші бізнеси
                        </a>
                    </div>
                </div>

                <!-- Right: Logo and Stats -->
                <div class="lg:col-span-5 stagger-container">
                    <!-- Logo Container -->
                    <div class="relative mb-8 stagger-item fade-in-scale">
                        <div
                            class="bg-gray-900 border-2 border-[#D8FA00] w-full aspect-square max-w-md mx-auto rounded-2xl p-8 relative group overflow-hidden hover-scale">
                            <!-- Animated corners -->
                            <div class="absolute top-4 left-4 w-8 h-8 border-t-2 border-l-2 border-[#D8FA00] opacity-60">
                            </div>
                            <div class="absolute top-4 right-4 w-8 h-8 border-t-2 border-r-2 border-[#D8FA00] opacity-60">
                            </div>
                            <div class="absolute bottom-4 left-4 w-8 h-8 border-b-2 border-l-2 border-[#D8FA00] opacity-60">
                            </div>
                            <div
                                class="absolute bottom-4 right-4 w-8 h-8 border-b-2 border-r-2 border-[#D8FA00] opacity-60">
                            </div>

                            <!-- Center Logo -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div
                                    class="w-48 h-48 flex items-center justify-center group-hover:scale-105 transition-transform duration-500">
                                    <svg class="w-full h-full" viewBox="0 0 134 134" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1749_722)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M50.7148 49.7144H77.5719L84.1337 56.3005L74.4919 65.9074L83.7697 73.4726V83.2858H74.473V65.9263L57.3292 83.0079L50.7674 76.4222L68.2418 59.0111H50.7148V49.7144Z"
                                                fill="#D8FA00" />
                                            <path d="M24 38V24" stroke="white" stroke-width="2" />
                                            <path d="M23 24H38" stroke="white" stroke-width="2" />
                                            <path d="M96 24H111.001" stroke="white" stroke-width="2" />
                                            <path d="M110 25V39" stroke="white" stroke-width="2" />
                                            <path d="M38 111H24" stroke="white" stroke-width="2" />
                                            <path d="M24 112V97" stroke="white" stroke-width="2" />
                                            <path d="M96 111H110" stroke="white" stroke-width="2" />
                                            <path d="M110 112V97" stroke="white" stroke-width="2" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1749_722">
                                                <rect width="134" height="134" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>

                            <!-- Company Name -->
                            <div class="absolute bottom-6 left-6 right-6">
                                <div class="text-center">
                                    <div class="text-[#D8FA00] font-russo text-lg tracking-wider">MEOWMATRIX</div>
                                    <div class="text-gray-400 font-lato text-sm">BUSINESS & COMMUNITY</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-2 gap-4 max-w-md mx-auto stagger-item">
                        <div
                            class="text-center p-4 bg-gray-900 border border-[#D8FA00] rounded-lg hover:border-[#D8FA00] hover:bg-[#D8FA00]/5 transition-all duration-300 hover-lift card-float">
                            <div class="text-2xl font-russo text-[#D8FA00] mb-1 stat-number">12+</div>
                            <div class="text-xs text-gray-400 font-lato">Власних бізнесів</div>
                        </div>
                        <div
                            class="text-center p-4 bg-gray-900 border border-[#229CA1] rounded-lg hover:border-[#229CA1] hover:bg-[#229CA1]/5 transition-all duration-300 hover-lift card-float-delayed-1">
                            <div class="text-2xl font-russo text-[#229CA1] mb-1 stat-number">5000+</div>
                            <div class="text-xs text-gray-400 font-lato">Учасників форуму</div>
                        </div>
                        <div
                            class="text-center p-4 bg-gray-900 border border-[#C53630] rounded-lg hover:border-[#C53630] hover:bg-[#C53630]/5 transition-all duration-300 hover-lift card-float-delayed-2">
                            <div class="text-2xl font-russo text-[#C53630] mb-1 stat-number">25+</div>
                            <div class="text-xs text-gray-400 font-lato">Технологій розроблено</div>
                        </div>
                        <div
                            class="text-center p-4 bg-gray-900 border border-white rounded-lg hover:border-white hover:bg-white/5 transition-all duration-300 hover-lift card-float-delayed-3">
                            <div class="text-2xl font-russo text-white mb-1 stat-number">100%</div>
                            <div class="text-xs text-gray-400 font-lato">Інноваційний підхід</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-center fade-in-up"
                style="justify-content: center; align-items: center; display: flex; flex-direction: column; left: 0; right: 0;">
                <div class="text-gray-400 text-sm font-lato mb-2">Прокрутіть вниз</div>
                <div class="w-6 h-10 border-2 border-gray-600 rounded-full flex justify-center">
                    <div class="w-1 h-3 bg-[#D8FA00] rounded-full mt-2 animate-bounce"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Company Section -->
    <section id="about" class="relative py-24 bg-gray-900 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 opacity-5"
                style="background-image: linear-gradient(rgba(216, 250, 0, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(216, 250, 0, 3) 1px, transparent 1px); background-size: 40px 40px;">
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left: Content -->
                <div class="fade-in-left">
                    <div class="inline-block px-4 py-2 bg-[#D8FA00] border border-[#D8FA00] rounded-full text-black text-sm font-lato mb-6">
                        Про компанію
                    </div>
                    <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6">
                        MeowMatrix - це не просто IT-компанія
                    </h2>
                    <p class="text-xl text-gray-300 mb-8 font-lato leading-relaxed">
                        Ми - інноваційна команда, яка створює власні бізнеси, розробляє технології та будує спільноту розробників. 
                        Наша місія - перетворити ідеї в реальність та створити майбутнє IT-індустрії.
                    </p>
                    
                    <!-- Company Stats -->
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="text-center p-4 bg-gray-800 border border-[#D8FA00] rounded-lg">
                            <div class="text-3xl font-russo text-[#D8FA00] mb-2">2018</div>
                            <div class="text-sm text-gray-400">Рік заснування</div>
                        </div>
                        <div class="text-center p-4 bg-gray-800 border border-[#229CA1] rounded-lg">
                            <div class="text-3xl font-russo text-[#229CA1] mb-2">50+</div>
                            <div class="text-sm text-gray-400">Співробітників</div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="#businesses" class="inline-flex items-center px-6 py-3 bg-[#D8FA00] text-black font-russo rounded-lg hover:bg-white transition-all duration-300">
                            <i class="fas fa-building mr-2"></i>
                            Наші бізнеси
                        </a>
                        <a href="#team" class="inline-flex items-center px-6 py-3 border-2 border-[#229CA1] text-[#229CA1] font-russo rounded-lg hover:bg-[#229CA1] hover:text-black transition-all duration-300">
                            <i class="fas fa-users mr-2"></i>
                            Команда
                        </a>
                    </div>
                </div>

                <!-- Right: Interactive Company Timeline -->
                <div class="fade-in-right">
                    <div class="bg-gray-800 border border-[#D8FA00] rounded-2xl p-8">
                        <h3 class="text-2xl font-russo text-white mb-6 text-center">Шлях розвитку</h3>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-3 h-3 bg-[#D8FA00] rounded-full mt-2 flex-shrink-0"></div>
                                <div>
                                    <div class="text-[#D8FA00] font-russo">2018</div>
                                    <div class="text-gray-300">Заснування компанії</div>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-3 h-3 bg-[#229CA1] rounded-full mt-2 flex-shrink-0"></div>
                                <div>
                                    <div class="text-[#229CA1] font-russo">2020</div>
                                    <div class="text-gray-300">Перший власний бізнес</div>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-3 h-3 bg-[#C53630] rounded-full mt-2 flex-shrink-0"></div>
                                <div>
                                    <div class="text-[#C53630] font-russo">2022</div>
                                    <div class="text-gray-300">Запуск форуму розробників</div>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-3 h-3 bg-[#D8FA00] rounded-full mt-2 flex-shrink-0"></div>
                                <div>
                                    <div class="text-[#D8FA00] font-russo">2024</div>
                                    <div class="text-gray-300">Експансія на міжнародні ринки</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="relative py-24 bg-white overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40"
            xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23D8FA00"
            fill-opacity="0.05"%3E%3Ccircle cx="20" cy="20" r="1" /%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]
            opacity-30"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up">
                <div
                    class="inline-block px-4 py-2 bg-black border border-black rounded-full text-white text-sm font-lato mb-4">
                    Наші бізнеси
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-gray-800 mb-6 text-reveal">
                    Розвиваємо власні проекти
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto font-lato text-reveal">
                    Ми створюємо <span class="text-[#000000] font-semibold">власні бізнеси</span>,
                    <span class="text-[#229CA1] font-semibold">розробляємо технології</span> та
                    <span class="text-[#C53630] font-semibold">будуємо спільноту</span> розробників.
                </p>
            </div>

            <!-- NEW Business Switcher -->
            <div class="mb-16">
                <div class="flex flex-wrap justify-center gap-4">
                    <button
                        class="new-service-btn new-service-btn-active"
                        data-service="tech">
                        <i class="fas fa-microchip mr-2"></i>
                        Технології
                    </button>
                    <button
                        class="new-service-btn"
                        data-service="business">
                        <i class="fas fa-building mr-2"></i>
                        Бізнеси
                    </button>
                    <button
                        class="new-service-btn"
                        data-service="forum">
                        <i class="fas fa-users mr-2"></i>
                        Форум
                    </button>
                    <button
                        class="new-service-btn"
                        data-service="innovation">
                        <i class="fas fa-lightbulb mr-2"></i>
                        Інновації
                    </button>
                    <button
                        class="new-service-btn"
                        data-service="community">
                        <i class="fas fa-handshake mr-2"></i>
                        Спільнота
                    </button>
                </div>
            </div>

            <!-- NEW Service Content -->
            <div class="new-service-content" id="web-content">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white border-2 border-yellow-400 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-code text-2xl text-black"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">Frontend розробка</h3>
                        <p class="text-gray-600 font-lato">Vue.js, React, HTML5, CSS3, Tailwind CSS</p>
                    </div>
                    <div class="bg-white border-2 border-teal-500 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-16 h-16 bg-teal-500 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-server text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">Backend розробка</h3>
                        <p class="text-gray-600 font-lato">Laravel, PHP, Node.js, MySQL, PostgreSQL</p>
                    </div>
                    <div class="bg-white border-2 border-red-500 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-16 h-16 bg-red-500 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-mobile-alt text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">Responsive Design</h3>
                        <p class="text-gray-600 font-lato">Адаптивний дизайн для всіх пристроїв</p>
                    </div>
                </div>
            </div>

            <div class="new-service-content hidden" id="mobile-content">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white border-2 border-blue-500 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-16 h-16 bg-blue-500 rounded-lg flex items-center justify-center mb-6">
                            <i class="fab fa-android text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">Android додатки</h3>
                        <p class="text-gray-600 font-lato">Нативна розробка для Android</p>
                    </div>
                    <div class="bg-white border-2 border-gray-800 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-16 h-16 bg-gray-800 rounded-lg flex items-center justify-center mb-6">
                            <i class="fab fa-apple text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">iOS додатки</h3>
                        <p class="text-gray-600 font-lato">Нативна розробка для iOS</p>
                    </div>
                    <div class="bg-white border-2 border-green-500 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-16 h-16 bg-green-500 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-sync text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">Cross-platform</h3>
                        <p class="text-gray-600 font-lato">React Native, Flutter</p>
                    </div>
                </div>
            </div>

            <div class="new-service-content hidden" id="marketing-content">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white border-2 border-red-600 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-16 h-16 bg-red-600 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-search text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">SEO просування</h3>
                        <p class="text-gray-600 font-lato mb-4">Комплексна оптимізація сайту для пошукових систем</p>
                        <ul class="text-gray-500 text-sm font-lato space-y-1">
                            <li>• Технічний аудит</li>
                            <li>• Семантичне ядро</li>
                            <li>• Контент-маркетинг</li>
                        </ul>
                    </div>
                    <div class="bg-white border-2 border-purple-500 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-16 h-16 bg-purple-500 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-bullhorn text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">Контекстна реклама</h3>
                        <p class="text-gray-600 font-lato mb-4">Ефективна реклама в Google Ads та Facebook</p>
                        <ul class="text-gray-500 text-sm font-lato space-y-1">
                            <li>• Налаштування кампаній</li>
                            <li>• A/B тестування</li>
                            <li>• Аналітика та звіти</li>
                        </ul>
                    </div>
                    <div class="bg-white border-2 border-blue-500 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-16 h-16 bg-blue-500 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-share-alt text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">SMM просування</h3>
                        <p class="text-gray-600 font-lato mb-4">Розвиток бренду в соціальних мережах</p>
                        <ul class="text-gray-500 text-sm font-lato space-y-1">
                            <li>• Стратегія контенту</li>
                            <li>• Ведення сторінок</li>
                            <li>• Таргетована реклама</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="new-service-content hidden" id="ecommerce-content">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white border-2 border-orange-500 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-16 h-16 bg-orange-500 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-store text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">Інтернет-магазини</h3>
                        <p class="text-gray-600 font-lato mb-4">Повнофункціональні e-commerce рішення</p>
                        <ul class="text-gray-500 text-sm font-lato space-y-1">
                            <li>• Каталог товарів</li>
                            <li>• Система оплати</li>
                            <li>• Управління замовленнями</li>
                        </ul>
                    </div>
                    <div class="bg-white border-2 border-pink-500 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-16 h-16 bg-pink-500 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-credit-card text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">Платіжні системи</h3>
                        <p class="text-gray-600 font-lato mb-4">Інтеграція різних способів оплати</p>
                        <ul class="text-gray-500 text-sm font-lato space-y-1">
                            <li>• LiqPay, Wayforpay</li>
                            <li>• Stripe, PayPal</li>
                            <li>• Криптовалюти</li>
                        </ul>
                    </div>
                    <div class="bg-white border-2 border-indigo-500 p-8 group transition-all duration-300 rounded-lg">
                        <div
                            class="w-16 h-16 bg-indigo-500 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-chart-bar text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">Аналітика продажів</h3>
                        <p class="text-gray-600 font-lato mb-4">Детальна аналітика та звітність</p>
                        <ul class="text-gray-500 text-sm font-lato space-y-1">
                            <li>• Google Analytics</li>
                            <li>• CRM інтеграція</li>
                            <li>• Звіти по продажах</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="new-service-content hidden" id="consulting-content">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white border-2 border-green-600 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-16 h-16 bg-green-600 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-search-dollar text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">IT-аудит</h3>
                        <p class="text-gray-600 font-lato mb-4">Комплексний аналіз вашої IT-інфраструктури</p>
                        <ul class="text-gray-500 text-sm font-lato space-y-1">
                            <li>• Аудит безпеки</li>
                            <li>• Оптимізація продуктивності</li>
                            <li>• Рекомендації по покращенню</li>
                        </ul>
                    </div>
                    <div class="bg-white border-2 border-cyan-500 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-16 h-16 bg-cyan-500 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-route text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">IT-стратегія</h3>
                        <p class="text-gray-600 font-lato mb-4">Розробка довгострокової IT-стратегії</p>
                        <ul class="text-gray-500 text-sm font-lato space-y-1">
                            <li>• Цифрова трансформація</li>
                            <li>• Вибір технологій</li>
                            <li>• Планування розвитку</li>
                        </ul>
                    </div>
                    <div class="bg-white border-2 border-amber-500 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="w-16 h-16 bg-amber-500 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-users-cog text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-russo text-gray-800 mb-4">Навчання команди</h3>
                        <p class="text-gray-600 font-lato mb-4">Підвищення кваліфікації ваших співробітників</p>
                        <ul class="text-gray-500 text-sm font-lato space-y-1">
                            <li>• Курси по технологіях</li>
                            <li>• Воркшопи та семінари</li>
                            <li>• Менторинг</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Businesses Section -->
    <section id="businesses" class="relative py-24 bg-gray-900 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 opacity-5"
                style="background-image: linear-gradient(rgba(216, 250, 0, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(216, 250, 0, 3) 1px, transparent 1px); background-size: 40px 40px;">
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up">
                <div class="inline-block px-4 py-2 bg-[#D8FA00] border border-[#D8FA00] rounded-full text-black text-sm font-lato mb-4">
                    Наші бізнеси
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6 text-reveal">
                    Створюємо власні проекти
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto font-lato text-reveal">
                    Ми не просто розробляємо для клієнтів - ми створюємо власні бізнеси та технології
                </p>
            </div>

            <!-- Business Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Business 1: Tech Solutions -->
                <div class="bg-gray-800 border-2 border-[#D8FA00] rounded-2xl p-8 hover:border-[#229CA1] transition-all duration-300 hover-lift">
                    <div class="w-16 h-16 bg-[#D8FA00] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-microchip text-2xl text-black"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-4">TechMatrix Solutions</h3>
                    <p class="text-gray-300 mb-6">Розробка корпоративних IT-рішень та систем автоматизації</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[#D8FA00] font-russo">2019-2024</span>
                        <a href="#" class="text-[#229CA1] hover:text-[#D8FA00] transition-colors">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>

                <!-- Business 2: E-commerce Platform -->
                <div class="bg-gray-800 border-2 border-[#229CA1] rounded-2xl p-8 hover:border-[#D8FA00] transition-all duration-300 hover-lift">
                    <div class="w-16 h-16 bg-[#229CA1] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-shopping-cart text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-4">ShopMatrix</h3>
                    <p class="text-gray-300 mb-6">Інноваційна платформа для e-commerce та маркетплейсів</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[#229CA1] font-russo">2020-2024</span>
                        <a href="#" class="text-[#D8FA00] hover:text-[#229CA1] transition-colors">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>

                <!-- Business 3: AI Platform -->
                <div class="bg-gray-800 border-2 border-[#C53630] rounded-2xl p-8 hover:border-[#D8FA00] transition-all duration-300 hover-lift">
                    <div class="w-16 h-16 bg-[#C53630] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-brain text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-4">AIMatrix</h3>
                    <p class="text-gray-300 mb-6">Штучний інтелект для бізнесу та автоматизації процесів</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[#C53630] font-russo">2022-2024</span>
                        <a href="#" class="text-[#D8FA00] hover:text-[#C53630] transition-colors">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>

                <!-- Business 4: Mobile Apps -->
                <div class="bg-gray-800 border-2 border-[#D8FA00] rounded-2xl p-8 hover:border-[#229CA1] transition-all duration-300 hover-lift">
                    <div class="w-16 h-16 bg-[#D8FA00] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-2xl text-black"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-4">AppMatrix</h3>
                    <p class="text-gray-300 mb-6">Розробка мобільних додатків та cross-platform рішень</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[#D8FA00] font-russo">2021-2024</span>
                        <a href="#" class="text-[#229CA1] hover:text-[#D8FA00] transition-colors">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>

                <!-- Business 5: Cloud Services -->
                <div class="bg-gray-800 border-2 border-[#229CA1] rounded-2xl p-8 hover:border-[#D8FA00] transition-all duration-300 hover-lift">
                    <div class="w-16 h-16 bg-[#229CA1] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-cloud text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-4">CloudMatrix</h3>
                    <p class="text-gray-300 mb-6">Хмарні сервіси та інфраструктурні рішення</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[#229CA1] font-russo">2023-2024</span>
                        <a href="#" class="text-[#D8FA00] hover:text-[#229CA1] transition-colors">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>

                <!-- Business 6: Blockchain -->
                <div class="bg-gray-800 border-2 border-[#C53630] rounded-2xl p-8 hover:border-[#D8FA00] transition-all duration-300 hover-lift">
                    <div class="w-16 h-16 bg-[#C53630] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-link text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-4">ChainMatrix</h3>
                    <p class="text-gray-300 mb-6">Блокчейн технології та децентралізовані рішення</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[#C53630] font-russo">2023-2024</span>
                        <a href="#" class="text-[#D8FA00] hover:text-[#C53630] transition-colors">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="relative py-24 bg-gray-800 overflow-hidden">
        <!-- Enhanced Background Pattern -->
        <div class="absolute inset-0">
            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-5"
                style="background-image: linear-gradient(rgba(216, 250, 0, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(216, 250, 0, 0.3) 1px, transparent 1px); background-size: 40px 40px;">
            </div>

            <!-- Floating Elements -->
            <div class="absolute top-20 left-10 w-32 h-32 border border-[#D8FA00] opacity-10 rounded-full"></div>
            <div class="absolute top-40 right-20 w-24 h-24 border border-[#229CA1] opacity-10 rounded-full"></div>
            <div class="absolute bottom-32 left-1/4 w-16 h-16 border border-[#C53630] opacity-10 rounded-full"></div>

            <!-- Diagonal Lines -->
            <div class="absolute top-0 left-0 w-full h-full opacity-5">
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#D8FA00] to-transparent">
                </div>
                <div
                    class="absolute top-1/4 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#229CA1] to-transparent">
                </div>
                <div
                    class="absolute top-1/2 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#C53630] to-transparent">
                </div>
                <div
                    class="absolute top-3/4 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#D8FA00] to-transparent">
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in-left">
                    <div
                        class="inline-block px-4 py-2 bg-teal-500/20 border border-teal-500/30 rounded-full text-teal-500 text-sm font-lato mb-4">
                        Про нас
                    </div>
                    <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6 text-reveal">
                        Наш досвід та статистика
                    </h2>
                    <p class="text-xl text-gray-300 mb-8 font-lato leading-relaxed text-reveal">
                        Ми команда досвідчених розробників та маркетологів, які створюють цифрові рішення для успішного
                        бізнесу.
                    </p>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-2 gap-8 stagger-container">
                        <div
                            class="text-center lg:text-left p-4 border border-yellow-400/30 rounded-lg stagger-item hover-lift">
                            <div class="text-4xl font-russo text-yellow-400 mb-2 stat-number">150+</div>
                            <div class="text-gray-400 font-lato">Завершених проектів</div>
                        </div>
                        <div
                            class="text-center lg:text-left p-4 border border-teal-500/30 rounded-lg stagger-item hover-lift">
                            <div class="text-4xl font-russo text-teal-500 mb-2 stat-number">100+</div>
                            <div class="text-gray-400 font-lato">Задоволених клієнтів</div>
                        </div>
                        <div
                            class="text-center lg:text-left p-4 border border-red-500/30 rounded-lg stagger-item hover-lift">
                            <div class="text-4xl font-russo text-red-500 mb-2 stat-number">7+</div>
                            <div class="text-gray-400 font-lato">Років досвіду</div>
                        </div>
                        <div
                            class="text-center lg:text-left p-4 border border-yellow-400/30 rounded-lg stagger-item hover-lift">
                            <div class="text-4xl font-russo text-yellow-400 mb-2 stat-number">24/7</div>
                            <div class="text-gray-400 font-lato">Підтримка</div>
                        </div>
                    </div>
                </div>

                <div class="relative fade-in-right">
                    <div class="bg-gray-800 border-2 border-yellow-400 p-8 rounded-lg hover-scale">
                        <h3 class="text-2xl font-russo text-white mb-6">Наш підхід</h3>
                        <div class="space-y-4 stagger-container">
                            <div class="flex items-center space-x-4 stagger-item hover-lift">
                                <div class="w-12 h-12 bg-yellow-400 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-lightbulb text-black"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-russo">Аналіз та планування</h4>
                                    <p class="text-gray-300 text-sm font-lato">Детальне вивчення вашого бізнесу</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4 stagger-item hover-lift">
                                <div class="w-12 h-12 bg-teal-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-palette text-white"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-russo">Дизайн та UX</h4>
                                    <p class="text-gray-300 text-sm font-lato">Сучасний та зручний інтерфейс</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4 stagger-item hover-lift">
                                <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-rocket text-white"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-russo">Розробка та запуск</h4>
                                    <p class="text-gray-300 text-sm font-lato">Швидка та якісна реалізація</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional content blocks -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8 stagger-container">
                        <div class="bg-gray-800 border-2 border-yellow-400 p-6 rounded-lg stagger-item hover-lift">
                            <div class="w-16 h-16 bg-yellow-400/20 rounded-lg flex items-center justify-center mb-4">
                                <i class="fas fa-users text-2xl text-yellow-400"></i>
                            </div>
                            <h4 class="text-white font-russo mb-2">Команда експертів</h4>
                            <p class="text-gray-300 text-sm font-lato">Досвідчені розробники та дизайнери</p>
                        </div>
                        <div class="bg-gray-800 border-2 border-teal-500 p-6 rounded-lg stagger-item hover-lift">
                            <div class="w-16 h-16 bg-teal-500/20 rounded-lg flex items-center justify-center mb-4">
                                <i class="fas fa-shield-alt text-2xl text-teal-500"></i>
                            </div>
                            <h4 class="text-white font-russo mb-2">Якість та надійність</h4>
                            <p class="text-gray-300 text-sm font-lato">Гарантія якості кожного проекту</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Developer Forum Section -->
    <section id="forum" class="relative py-24 bg-gray-800 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 opacity-5"
                style="background-image: linear-gradient(rgba(216, 250, 0, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(216, 250, 0, 3) 1px, transparent 1px); background-size: 40px 40px;">
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up">
                <div class="inline-block px-4 py-2 bg-[#D8FA00] border border-[#D8FA00] rounded-full text-black text-sm font-lato mb-4">
                    Спільнота розробників
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6 text-reveal">
                    Приєднуйтесь до нашого форуму
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto font-lato text-reveal">
                    Обмінюйтесь досвідом, знаходьте партнерів та розвивайтеся разом з нами
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left: Forum Features -->
                <div class="fade-in-left">
                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-[#D8FA00] rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-users text-xl text-black"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-russo text-white mb-2">Активна спільнота</h3>
                                <p class="text-gray-300">5000+ розробників з усього світу</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-[#229CA1] rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-code text-xl text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-russo text-white mb-2">Технічні обговорення</h3>
                                <p class="text-gray-300">Обговорення нових технологій та рішень</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-[#C53630] rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-handshake text-xl text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-russo text-white mb-2">Нетворкінг</h3>
                                <p class="text-gray-300">Знаходьте партнерів та нові можливості</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-[#D8FA00] rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-graduation-cap text-xl text-black"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-russo text-white mb-2">Навчання</h3>
                                <p class="text-gray-300">Курси, воркшопи та менторинг</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="/forum" class="inline-flex items-center px-8 py-4 bg-[#D8FA00] text-black font-russo rounded-lg hover:bg-white transition-all duration-300">
                            <i class="fas fa-arrow-right mr-3"></i>
                            Перейти на форум
                        </a>
                    </div>
                </div>

                <!-- Right: Interactive Forum Preview -->
                <div class="fade-in-right">
                    <div class="bg-gray-900 border border-[#D8FA00] rounded-2xl p-8">
                        <h3 class="text-2xl font-russo text-white mb-6 text-center">Останні обговорення</h3>
                        
                        <!-- Forum Topics -->
                        <div class="space-y-4">
                            <div class="p-4 bg-gray-800 rounded-lg border-l-4 border-[#D8FA00]">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="text-[#D8FA00] font-russo">Vue.js 3 Composition API</h4>
                                    <span class="text-xs text-gray-400">2 години тому</span>
                                </div>
                                <p class="text-gray-300 text-sm mb-2">Обговорення нових можливостей Vue.js 3</p>
                                <div class="flex items-center space-x-4 text-xs text-gray-400">
                                    <span><i class="fas fa-comments mr-1"></i> 15 відповідей</span>
                                    <span><i class="fas fa-eye mr-1"></i> 127 переглядів</span>
                                </div>
                            </div>

                            <div class="p-4 bg-gray-800 rounded-lg border-l-4 border-[#229CA1]">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="text-[#229CA1] font-russo">Laravel 11 нові функції</h4>
                                    <span class="text-xs text-gray-400">5 годин тому</span>
                                </div>
                                <p class="text-gray-300 text-sm mb-2">Огляд нових можливостей Laravel 11</p>
                                <div class="flex items-center space-x-4 text-xs text-gray-400">
                                    <span><i class="fas fa-comments mr-1"></i> 8 відповідей</span>
                                    <span><i class="fas fa-eye mr-1"></i> 89 переглядів</span>
                                </div>
                            </div>

                            <div class="p-4 bg-gray-800 rounded-lg border-l-4 border-[#C53630]">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="text-[#C53630] font-russo">AI в веб-розробці</h4>
                                    <span class="text-xs text-gray-400">1 день тому</span>
                                </div>
                                <p class="text-gray-300 text-sm mb-2">Як штучний інтелект змінює розробку</p>
                                <div class="flex items-center space-x-4 text-xs text-gray-400">
                                    <span><i class="fas fa-comments mr-1"></i> 23 відповіді</span>
                                    <span><i class="fas fa-eye mr-1"></i> 234 перегляди</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 text-center">
                            <a href="/forum" class="text-[#D8FA00] hover:text-white transition-colors">
                                Переглянути всі теми <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section id="technologies" class="relative py-24 bg-white overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="45" height="45" viewBox="0 0 45 45"
            xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23D8FA00"
            fill-opacity="0.05"%3E%3Ccircle cx="22.5" cy="22.5" r="1" /%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]
            opacity-30"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up">
                <div
                    class="inline-block px-4 py-2 bg-secondary-neon/20 border border-secondary-neon/30 rounded-full text-secondary-neon text-sm font-lato mb-4">
                    Технології
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-gray-800 mb-6 text-reveal">
                    Технології на яких ми працюємо
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto font-lato text-reveal">
                    Використовуємо найсучасніші технології Vue.js та Laravel для створення високопродуктивних рішень
                </p>
            </div>

            <!-- Tech Stack -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 stagger-container">
                <div
                    class="bg-white border-2 border-yellow-400 p-8 group text-center shadow-lg hover:shadow-2xl transition-all duration-300 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-vuejs text-2xl text-black"></i>
                    </div>
                    <h3 class="text-lg font-russo text-gray-800 mb-2">Vue.js</h3>
                    <p class="text-gray-600 text-sm font-lato mb-4">Progressive Framework</p>
                    <p class="text-gray-500 text-xs font-lato">Сучасний JavaScript фреймворк для створення інтерактивних
                        інтерфейсів</p>
                </div>

                <div
                    class="bg-white border-2 border-teal-500 p-8 group text-center shadow-lg hover:shadow-2xl transition-all duration-300 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-16 h-16 bg-teal-500 rounded-lg flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-laravel text-2xl text-white"></i>
                    </div>
                    <h3 class="text-lg font-russo text-gray-800 mb-2">Laravel</h3>
                    <p class="text-gray-600 text-sm font-lato mb-4">PHP Framework</p>
                    <p class="text-gray-500 text-xs font-lato">Потужний фреймворк для швидкої розробки веб-додатків</p>
                </div>

                <div
                    class="bg-white border-2 border-red-500 p-8 group text-center shadow-lg hover:shadow-2xl transition-all duration-300 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-16 h-16 bg-red-500 rounded-lg flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-js-square text-2xl text-white"></i>
                    </div>
                    <h3 class="text-lg font-russo text-gray-800 mb-2">JavaScript</h3>
                    <p class="text-gray-600 text-sm font-lato mb-4">ES6+ & TypeScript</p>
                    <p class="text-gray-500 text-xs font-lato">Сучасний JavaScript з підтримкою TypeScript для типізації
                    </p>
                </div>

                <div
                    class="bg-white border-2 border-yellow-400 p-8 group text-center shadow-lg hover:shadow-2xl transition-all duration-300 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-node-js text-2xl text-black"></i>
                    </div>
                    <h3 class="text-lg font-russo text-gray-800 mb-2">Node.js</h3>
                    <p class="text-gray-600 text-sm font-lato mb-4">Server Runtime</p>
                    <p class="text-gray-500 text-xs font-lato">Серверна платформа для розробки масштабованих додатків</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section id="clients" class="relative py-24 bg-black overflow-hidden">
        <!-- Enhanced Background Pattern -->
        <div class="absolute inset-0">
            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-5"
                style="background-image: linear-gradient(rgba(216, 250, 0, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(216, 250, 0, 0.3) 1px, transparent 1px); background-size: 60px 60px;">
            </div>

            <!-- Floating Geometric Shapes -->
            <div class="absolute top-16 left-16 w-20 h-20 border border-[#D8FA00] opacity-10 transform rotate-45"></div>
            <div class="absolute top-32 right-24 w-16 h-16 border border-[#229CA1] opacity-10 transform rotate-45"></div>
            <div class="absolute bottom-20 left-1/3 w-12 h-12 border border-[#C53630] opacity-10 transform rotate-45">
            </div>
            <div class="absolute top-1/2 right-16 w-24 h-24 border border-[#D8FA00] opacity-10 rounded-full"></div>

            <!-- Diagonal Lines -->
            <div class="absolute top-0 left-0 w-full h-full opacity-5">
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#D8FA00] to-transparent">
                </div>
                <div
                    class="absolute top-1/3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#229CA1] to-transparent">
                </div>
                <div
                    class="absolute top-2/3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#C53630] to-transparent">
                </div>
            </div>

            <!-- Corner Accents -->
            <div class="absolute top-0 left-0 w-32 h-32 border-l-2 border-t-2 border-[#D8FA00] opacity-20"></div>
            <div class="absolute bottom-0 right-0 w-32 h-32 border-r-2 border-b-2 border-[#229CA1] opacity-20"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up">
                <div
                    class="inline-block px-4 py-2 bg-accent-neon/20 border border-accent-neon/30 rounded-full text-accent-neon text-sm font-lato mb-4">
                    Наші клієнти
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6 text-reveal">
                    Компанії які нам довіряють
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto font-lato text-reveal">
                    Ми працюємо з різними бізнесами та створюємо успішні проекти
                </p>
            </div>

            <!-- Clients Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 stagger-container">
                <div
                    class="bg-gray-800 border-2 border-yellow-400 p-8 group text-center transition-all duration-300 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-20 h-20 bg-gray-700 rounded-lg flex items-center justify-center mb-4 mx-auto group-hover:bg-yellow-400/20 transition-colors duration-300">
                        <i
                            class="fas fa-building text-3xl text-gray-400 group-hover:text-yellow-400 transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-lg font-russo text-white mb-2">TechCorp</h3>
                    <p class="text-gray-400 text-sm font-lato mb-3">IT компанія</p>
                    <a href="#"
                        class="text-yellow-400 hover:text-white text-sm font-lato transition-colors duration-300">Переглянути
                        сайт →</a>
                </div>

                <div
                    class="bg-gray-800 border-2 border-teal-500 p-8 group text-center transition-all duration-300 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-20 h-20 bg-gray-700 rounded-lg flex items-center justify-center mb-4 mx-auto group-hover:bg-teal-500/20 transition-colors duration-300">
                        <i
                            class="fas fa-shopping-cart text-3xl text-gray-400 group-hover:text-teal-500 transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-lg font-russo text-white mb-2">ShopPlus</h3>
                    <p class="text-gray-400 text-sm font-lato mb-3">E-commerce</p>
                    <a href="#"
                        class="text-teal-500 hover:text-white text-sm font-lato transition-colors duration-300">Переглянути
                        сайт →</a>
                </div>

                <div
                    class="bg-gray-800 border-2 border-red-500 p-8 group text-center hover:shadow-2xl transition-all duration-300 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-20 h-20 bg-gray-700 rounded-lg flex items-center justify-center mb-4 mx-auto group-hover:bg-red-500/20 transition-colors duration-300">
                        <i
                            class="fas fa-chart-line text-3xl text-gray-400 group-hover:text-red-500 transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-lg font-russo text-white mb-2">FinancePro</h3>
                    <p class="text-gray-400 text-sm font-lato mb-3">Фінанси</p>
                    <a href="#"
                        class="text-red-500 hover:text-white text-sm font-lato transition-colors duration-300">Переглянути
                        сайт →</a>
                </div>

                <div
                    class="bg-gray-800 border-2 border-yellow-400 p-8 group text-center hover:shadow-2xl transition-all duration-300 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-20 h-20 bg-gray-700 rounded-lg flex items-center justify-center mb-4 mx-auto group-hover:bg-yellow-400/20 transition-colors duration-300">
                        <i
                            class="fas fa-graduation-cap text-3xl text-gray-400 group-hover:text-yellow-400 transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-lg font-russo text-white mb-2">EduTech</h3>
                    <p class="text-gray-400 text-sm font-lato mb-3">Освіта</p>
                    <a href="#"
                        class="text-yellow-400 hover:text-white text-sm font-lato transition-colors duration-300">Переглянути
                        сайт →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="relative py-24 bg-white overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="30" height="30" viewBox="0 0 30 30"
            xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23D8FA00"
            fill-opacity="0.05"%3E%3Ccircle cx="15" cy="15" r="1" /%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]
            opacity-30"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up">
                <div
                    class="inline-block px-4 py-2 bg-secondary-neon/20 border border-secondary-neon/30 rounded-full text-secondary-neon text-sm font-lato mb-4">
                    Відгуки
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-gray-800 mb-6 text-reveal">
                    Що говорять наші клієнти
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto font-lato text-reveal">
                    Відгуки від задоволених клієнтів про якість нашої роботи
                </p>
            </div>

            <!-- Reviews Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 stagger-container">
                <div
                    class="bg-white border-2 border-yellow-400 p-8 hover:border-yellow-600 transition-all duration-300 group rounded-lg stagger-item hover-lift">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 font-lato italic">
                        "Відмінна робота! Сайт виглядає сучасно та функціонально. Команда професійна та відповідальна."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-yellow-400 rounded-lg flex items-center justify-center mr-4">
                            <span class="text-black font-russo text-lg">А</span>
                        </div>
                        <div>
                            <h4 class="font-russo text-gray-800">Анна Петренко</h4>
                            <p class="text-gray-500 text-sm font-lato">CEO, TechCorp</p>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white border-2 border-teal-500 p-8 hover:border-teal-600 transition-all duration-300 group rounded-lg stagger-item hover-lift">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 font-lato italic">
                        "Проект здано вчасно, якість на висоті. Рекомендую всім, хто хоче сучасний сайт."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-teal-500 rounded-lg flex items-center justify-center mr-4">
                            <span class="text-white font-russo text-lg">М</span>
                        </div>
                        <div>
                            <h4 class="font-russo text-gray-800">Михайло Коваль</h4>
                            <p class="text-gray-500 text-sm font-lato">Founder, ShopPlus</p>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white border-2 border-red-500 p-8 hover:border-red-600 transition-all duration-300 group rounded-lg stagger-item hover-lift">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 font-lato italic">
                        "Професійний підхід, швидка реалізація. Результат перевершив очікування!"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center mr-4">
                            <span class="text-white font-russo text-lg">О</span>
                        </div>
                        <div>
                            <h4 class="font-russo text-gray-800">Олена Сидоренко</h4>
                            <p class="text-gray-500 text-sm font-lato">Marketing Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="relative py-24 bg-black overflow-hidden">
        <!-- Enhanced Background Pattern -->
        <div class="absolute inset-0">
            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-5"
                style="background-image: linear-gradient(rgba(216, 250, 0, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(216, 250, 0, 0.3) 1px, transparent 1px); background-size: 70px 70px;">
            </div>

            <!-- Floating Elements -->
            <div class="absolute top-24 left-24 w-28 h-28 border border-[#D8FA00] opacity-10 transform rotate-45"></div>
            <div class="absolute top-48 right-28 w-20 h-20 border border-[#229CA1] opacity-10 transform rotate-45"></div>
            <div class="absolute bottom-28 left-1/3 w-16 h-16 border border-[#C53630] opacity-10 rounded-full"></div>
            <div class="absolute top-1/2 right-20 w-24 h-24 border border-[#D8FA00] opacity-10 transform rotate-45"></div>

            <!-- Diagonal Lines -->
            <div class="absolute top-0 left-0 w-full h-full opacity-5">
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#D8FA00] to-transparent">
                </div>
                <div
                    class="absolute top-1/3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#229CA1] to-transparent">
                </div>
                <div
                    class="absolute top-2/3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#C53630] to-transparent">
                </div>
            </div>

            <!-- Corner Accents -->
            <div class="absolute top-0 left-0 w-36 h-36 border-l-2 border-t-2 border-[#D8FA00] opacity-15"></div>
            <div class="absolute bottom-0 right-0 w-36 h-36 border-r-2 border-b-2 border-[#229CA1] opacity-15"></div>

            <!-- Floating Dots -->
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-[#D8FA00] opacity-25 rounded-full animate-pulse"></div>
            <div class="absolute top-1/3 right-1/3 w-2 h-2 bg-[#229CA1] opacity-25 rounded-full animate-pulse"
                style="animation-delay: 1.5s;"></div>
            <div class="absolute bottom-1/3 left-1/3 w-2 h-2 bg-[#C53630] opacity-25 rounded-full animate-pulse"
                style="animation-delay: 3s;"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div
                    class="inline-block px-4 py-2 bg-primary-neon/20 border border-primary-neon/30 rounded-full text-primary-neon text-sm font-lato mb-4">
                    Блог
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6">
                    Останні публікації
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto font-lato">
                    Корисні статті про веб-розробку, дизайн та маркетинг
                </p>
            </div>

            <!-- Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 stagger-container">
                <article
                    class="bg-gray-800 border-2 border-yellow-400 p-6 group transition-all duration-300 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-full h-48 bg-gray-700 rounded-lg mb-6 group-hover:bg-yellow-400/20 transition-colors duration-300 flex items-center justify-center">
                        <i
                            class="fas fa-code text-4xl text-gray-400 group-hover:text-yellow-400 transition-colors duration-300"></i>
                    </div>
                    <div class="mb-4">
                        <span
                            class="inline-block px-3 py-1 bg-yellow-400/20 text-yellow-400 text-xs font-lato rounded-full">Веб-розробка</span>
                    </div>
                    <h3
                        class="text-xl font-russo text-white mb-3 group-hover:text-yellow-400 transition-colors duration-300">
                        Тренди веб-розробки 2024
                    </h3>
                    <p class="text-gray-400 text-sm font-lato mb-4">
                        Огляд найновіших технологій та підходів у веб-розробці...
                    </p>
                    <div class="flex items-center text-gray-500 text-sm font-lato">
                        <i class="fas fa-calendar mr-2"></i>
                        <span>15 грудня 2024</span>
                    </div>
                </article>

                <article
                    class="bg-gray-800 border-2 border-teal-500 p-6 group transition-all duration-300 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-full h-48 bg-gray-700 rounded-lg mb-6 group-hover:bg-teal-500/20 transition-colors duration-300 flex items-center justify-center">
                        <i
                            class="fas fa-palette text-4xl text-gray-400 group-hover:text-teal-500 transition-colors duration-300"></i>
                    </div>
                    <div class="mb-4">
                        <span
                            class="inline-block px-3 py-1 bg-teal-500/20 text-teal-500 text-xs font-lato rounded-full">Дизайн</span>
                    </div>
                    <h3
                        class="text-xl font-russo text-white mb-3 group-hover:text-teal-500 transition-colors duration-300">
                        UI/UX дизайн для мобільних додатків
                    </h3>
                    <p class="text-gray-400 text-sm font-lato mb-4">
                        Принципи створення зручних та красивих мобільних інтерфейсів...
                    </p>
                    <div class="flex items-center text-gray-500 text-sm font-lato">
                        <i class="fas fa-calendar mr-2"></i>
                        <span>12 грудня 2024</span>
                    </div>
                </article>

                <article
                    class="bg-gray-800 border-2 border-red-500 p-6 group transition-all duration-300 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-full h-48 bg-gray-700 rounded-lg mb-6 group-hover:bg-red-500/20 transition-colors duration-300 flex items-center justify-center">
                        <i
                            class="fas fa-chart-line text-4xl text-gray-400 group-hover:text-red-500 transition-colors duration-300"></i>
                    </div>
                    <div class="mb-4">
                        <span
                            class="inline-block px-3 py-1 bg-red-500/20 text-red-500 text-xs font-lato rounded-full">Маркетинг</span>
                    </div>
                    <h3 class="text-xl font-russo text-white mb-3 group-hover:text-red-500 transition-colors duration-300">
                        SEO стратегії для e-commerce
                    </h3>
                    <p class="text-gray-400 text-sm font-lato mb-4">
                        Ефективні методи просування інтернет-магазинів...
                    </p>
                    <div class="flex items-center text-gray-500 text-sm font-lato">
                        <i class="fas fa-calendar mr-2"></i>
                        <span>10 грудня 2024</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="relative py-24 bg-white overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="35" height="35" viewBox="0 0 35 35"
            xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23D8FA00"
            fill-opacity="0.05"%3E%3Ccircle cx="17.5" cy="17.5" r="1" /%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]
            opacity-30"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up">
                <div
                    class="inline-block px-4 py-2 bg-red-500/20 border border-red-500/30 rounded-full text-red-500 text-sm font-lato mb-4">
                    FAQ
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-gray-800 mb-6 text-reveal">
                    Часті запитання
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto font-lato text-reveal">
                    Відповіді на найпопулярніші питання наших клієнтів
                </p>
            </div>

            <!-- FAQ Accordion -->
            <div class="max-w-4xl mx-auto space-y-4 stagger-container">
                <div
                    class="faq-item bg-white border-2 border-yellow-400 overflow-hidden rounded-lg shadow-lg stagger-item hover-lift">
                    <button
                        class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-yellow-50 transition-colors duration-300">
                        <span class="font-russo text-gray-800">Скільки часу займає розробка сайту?</span>
                        <i class="fas fa-plus text-yellow-400 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer px-6 pb-4 hidden">
                        <p class="text-gray-600 font-lato">
                            Час розробки залежить від складності проекту. Простий лендінг - 1-2 тижні,
                            складний e-commerce сайт - 2-3 місяці. Ми завжди дотримуємося дедлайнів.
                        </p>
                    </div>
                </div>

                <div
                    class="faq-item bg-white border-2 border-teal-500 overflow-hidden rounded-lg shadow-lg stagger-item hover-lift">
                    <button
                        class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-teal-50 transition-colors duration-300">
                        <span class="font-russo text-gray-800">Чи надаєте ви підтримку після запуску?</span>
                        <i class="fas fa-plus text-teal-500 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer px-6 pb-4 hidden">
                        <p class="text-gray-600 font-lato">
                            Так, ми надаємо технічну підтримку та обслуговування сайту протягом
                            всього терміну співпраці. Також можемо оновити контент та функціонал.
                        </p>
                    </div>
                </div>

                <div
                    class="faq-item bg-white border-2 border-red-500 overflow-hidden rounded-lg shadow-lg stagger-item hover-lift">
                    <button
                        class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-red-50 transition-colors duration-300">
                        <span class="font-russo text-gray-800">Які технології ви використовуєте?</span>
                        <i class="fas fa-plus text-red-500 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer px-6 pb-4 hidden">
                        <p class="text-gray-600 font-lato">
                            Ми використовуємо сучасний стек: Vue.js, Laravel, Node.js, React.
                            Вибір технології залежить від вимог проекту та побажань клієнта.
                        </p>
                    </div>
                </div>

                <div
                    class="faq-item bg-white border-2 border-yellow-400 overflow-hidden rounded-lg shadow-lg stagger-item hover-lift">
                    <button
                        class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-yellow-50 transition-colors duration-300">
                        <span class="font-russo text-gray-800">Чи можна змінити дизайн під час розробки?</span>
                        <i class="fas fa-plus text-yellow-400 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer px-6 pb-4 hidden">
                        <p class="text-gray-600 font-lato">
                            Так, ми завжди готові до змін та доопрацювань. Проте рекомендуємо
                            обговорювати всі деталі на початковому етапі для економії часу.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="relative py-24 bg-gray-900 overflow-hidden">
        <!-- Enhanced Background Pattern -->
        <div class="absolute inset-0">
            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-5"
                style="background-image: linear-gradient(rgba(216, 250, 0, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(216, 250, 0, 0.3) 1px, transparent 1px); background-size: 55px 55px;">
            </div>

            <!-- Floating Elements -->
            <div class="absolute top-16 left-16 w-32 h-32 border border-[#D8FA00] opacity-10 transform rotate-45"></div>
            <div class="absolute top-36 right-20 w-24 h-24 border border-[#229CA1] opacity-10 transform rotate-45"></div>
            <div class="absolute bottom-24 left-1/4 w-20 h-20 border border-[#C53630] opacity-10 rounded-full"></div>
            <div class="absolute top-1/2 right-16 w-16 h-16 border border-[#D8FA00] opacity-10 transform rotate-45"></div>

            <!-- Diagonal Lines -->
            <div class="absolute top-0 left-0 w-full h-full opacity-5">
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#D8FA00] to-transparent">
                </div>
                <div
                    class="absolute top-1/3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#229CA1] to-transparent">
                </div>
                <div
                    class="absolute top-2/3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#C53630] to-transparent">
                </div>
            </div>

            <!-- Corner Accents -->
            <div class="absolute top-0 left-0 w-44 h-44 border-l-2 border-t-2 border-[#D8FA00] opacity-15"></div>
            <div class="absolute bottom-0 right-0 w-44 h-44 border-r-2 border-b-2 border-[#229CA1] opacity-15"></div>

            <!-- Floating Dots -->
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-[#D8FA00] opacity-20 rounded-full animate-pulse"></div>
            <div class="absolute top-1/3 right-1/3 w-2 h-2 bg-[#229CA1] opacity-20 rounded-full animate-pulse"
                style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/3 left-1/3 w-2 h-2 bg-[#C53630] opacity-20 rounded-full animate-pulse"
                style="animation-delay: 4s;"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up">
                <div
                    class="inline-block px-4 py-2 bg-accent-neon/20 border border-accent-neon/30 rounded-full text-accent-neon text-sm font-lato mb-4">
                    Процес роботи
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6 text-reveal">
                    Як ми працюємо
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto font-lato text-reveal">
                    Прозорий процес розробки від ідеї до запуску
                </p>
            </div>

            <!-- Process Steps -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 stagger-container">
                <div class="text-center group p-6 border border-yellow-400/30 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-20 h-20 bg-yellow-400 rounded-lg flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-lightbulb text-3xl text-black"></i>
                    </div>
                    <h3 class="text-xl font-russo text-white mb-4">1. Аналіз</h3>
                    <p class="text-gray-300 font-lato mb-3">Вивчаємо ваш бізнес та вимоги</p>
                    <ul class="text-gray-400 text-sm font-lato text-left space-y-1">
                        <li>• Бізнес-аналіз</li>
                        <li>• Технічне завдання</li>
                    </ul>
                </div>

                <div class="text-center group p-6 border border-teal-500/30 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-20 h-20 bg-teal-500 rounded-lg flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-palette text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-russo text-white mb-4">2. Дизайн</h3>
                    <p class="text-gray-300 font-lato mb-3">Створюємо макети та прототипи</p>
                    <ul class="text-gray-400 text-sm font-lato text-left space-y-1">
                        <li>• UI/UX дизайн</li>
                        <li>• Адаптивність</li>
                    </ul>
                </div>

                <div class="text-center group p-6 border border-red-500/30 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-20 h-20 bg-red-500 rounded-lg flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-code text-3xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-russo text-white mb-4">3. Розробка</h3>
                    <p class="text-gray-300 font-lato mb-3">Програмуюємо функціонал</p>
                    <ul class="text-gray-400 text-sm font-lato text-left space-y-1">
                        <li>• Frontend розробка</li>
                        <li>• Backend розробка</li>
                        <li>• Тестування</li>
                    </ul>
                </div>

                <div class="text-center group p-6 border border-yellow-400/30 rounded-lg stagger-item hover-lift">
                    <div
                        class="w-20 h-20 bg-yellow-400 rounded-lg flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-rocket text-3xl text-black"></i>
                    </div>
                    <h3 class="text-xl font-russo text-white mb-4">4. Запуск</h3>
                    <p class="text-gray-300 font-lato mb-3">Тестуємо та запускаємо проект</p>
                    <ul class="text-gray-400 text-sm font-lato text-left space-y-1">
                        <li>• Фінальне тестування</li>
                        <li>• Розгортання</li>
                        <li>• Підтримка</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="cta" class="relative py-24 bg-gray-900 overflow-hidden">
        <!-- Enhanced Background Pattern -->
        <div class="absolute inset-0">
            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-5"
                style="background-image: linear-gradient(rgba(216, 250, 0, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(216, 250, 0, 0.3) 1px, transparent 1px); background-size: 65px 65px;">
            </div>

            <!-- Floating Elements -->
            <div class="absolute top-16 left-16 w-40 h-40 border border-[#D8FA00] opacity-10 transform rotate-45"></div>
            <div class="absolute top-40 right-20 w-32 h-32 border border-[#229CA1] opacity-10 transform rotate-45"></div>
            <div class="absolute bottom-20 left-1/4 w-28 h-28 border border-[#C53630] opacity-10 rounded-full"></div>
            <div class="absolute top-1/2 right-16 w-24 h-24 border border-[#D8FA00] opacity-10 transform rotate-45"></div>

            <!-- Diagonal Lines -->
            <div class="absolute top-0 left-0 w-full h-full opacity-5">
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#D8FA00] to-transparent">
                </div>
                <div
                    class="absolute top-1/3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#229CA1] to-transparent">
                </div>
                <div
                    class="absolute top-2/3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#C53630] to-transparent">
                </div>
            </div>

            <!-- Corner Accents -->
            <div class="absolute top-0 left-0 w-52 h-52 border-l-2 border-t-2 border-[#D8FA00] opacity-15"></div>
            <div class="absolute bottom-0 right-0 w-52 h-52 border-r-2 border-b-2 border-[#229CA1] opacity-15"></div>

            <!-- Floating Dots -->
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-[#D8FA00] opacity-25 rounded-full animate-pulse"></div>
            <div class="absolute top-1/3 right-1/3 w-2 h-2 bg-[#229CA1] opacity-25 rounded-full animate-pulse"
                style="animation-delay: 1.5s;"></div>
            <div class="absolute bottom-1/3 left-1/3 w-2 h-2 bg-[#C53630] opacity-25 rounded-full animate-pulse"
                style="animation-delay: 3s;"></div>

            <!-- Subtle Glow Effects -->
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-[#D8FA00] opacity-3 rounded-full blur-3xl">
            </div>
            <div class="absolute top-1/4 right-1/4 w-48 h-48 bg-[#229CA1] opacity-3 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6 text-reveal">
                Готові розпочати співпрацю?
            </h2>
            <p class="text-xl text-gray-300 mb-10 max-w-3xl mx-auto font-lato text-reveal">
                Зв'яжіться з нами та отримайте безкоштовну консультацію з вашого проекту
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-12 stagger-container">
                <a href="#contact-form" id="open-contact-modal"
                    class="inline-flex items-center px-12 py-6 bg-yellow-400 text-black font-russo text-xl border-2 border-yellow-400 hover:bg-white hover:border-white transition-all duration-300 transform hover:-translate-y-2 rounded-lg btn-glow hover-lift stagger-item">
                    Обговорити проєкт
                    <i class="fas fa-arrow-right ml-3"></i>
                </a>
                <a href="tel:+380501234567"
                    class="inline-flex items-center px-12 py-6 border-2 border-white text-white font-russo text-xl hover:bg-white hover:text-black transition-all duration-300 rounded-lg hover-lift stagger-item">
                    +38 (050) 123-45-67
                </a>
            </div>

            <!-- Quick Contact Form -->
            <div class="max-w-2xl mx-auto fade-in-up">
                <div class="bg-gray-800 border-2 border-yellow-400 p-8 rounded-lg shadow-2xl hover-scale">
                    <h3 class="text-2xl font-russo text-white mb-6 text-center">Швидка консультація</h3>
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" placeholder="Ваше ім'я"
                                class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-yellow-400 focus:outline-none focus-ring">
                            <input type="email" placeholder="Email"
                                class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-yellow-400 focus:outline-none focus-ring">
                        </div>
                        <textarea placeholder="Опишіть ваш проект"
                            class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-yellow-400 focus:outline-none focus-ring h-24"></textarea>
                        <button type="submit"
                            class="w-full px-6 py-3 bg-teal-500 text-white font-russo rounded-lg hover:bg-teal-400 transition-colors duration-300 btn-glow">
                            Отримати консультацію
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="relative py-24 bg-black overflow-hidden">
        <!-- Enhanced Background Pattern -->
        <div class="absolute inset-0">
            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-5"
                style="background-image: linear-gradient(rgba(216, 250, 0, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(216, 250, 0, 0.3) 1px, transparent 1px); background-size: 45px 45px;">
            </div>

            <!-- Floating Elements -->
            <div class="absolute top-20 left-20 w-36 h-36 border border-[#D8FA00] opacity-10 transform rotate-45"></div>
            <div class="absolute top-44 right-24 w-28 h-28 border border-[#229CA1] opacity-10 transform rotate-45"></div>
            <div class="absolute bottom-32 left-1/3 w-24 h-24 border border-[#C53630] opacity-10 rounded-full"></div>
            <div class="absolute top-1/2 right-20 w-20 h-20 border border-[#D8FA00] opacity-10 transform rotate-45"></div>

            <!-- Diagonal Lines -->
            <div class="absolute top-0 left-0 w-full h-full opacity-5">
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#D8FA00] to-transparent">
                </div>
                <div
                    class="absolute top-1/3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#229CA1] to-transparent">
                </div>
                <div
                    class="absolute top-2/3 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#C53630] to-transparent">
                </div>
            </div>

            <!-- Corner Accents -->
            <div class="absolute top-0 left-0 w-48 h-48 border-l-2 border-t-2 border-[#D8FA00] opacity-15"></div>
            <div class="absolute bottom-0 right-0 w-48 h-48 border-r-2 border-b-2 border-[#229CA1] opacity-15"></div>

            <!-- Floating Dots -->
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-[#D8FA00] opacity-30 rounded-full animate-pulse"></div>
            <div class="absolute top-1/3 right-1/3 w-2 h-2 bg-[#229CA1] opacity-30 rounded-full animate-pulse"
                style="animation-delay: 2.5s;"></div>
            <div class="absolute bottom-1/3 left-1/3 w-2 h-2 bg-[#C53630] opacity-30 rounded-full animate-pulse"
                style="animation-delay: 5s;"></div>

            <!-- Subtle Glow Effects -->
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-[#D8FA00] opacity-3 rounded-full blur-3xl">
            </div>
            <div class="absolute top-1/4 right-1/4 w-56 h-56 bg-[#229CA1] opacity-3 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up">
                <div
                    class="inline-block px-4 py-2 bg-yellow-400/20 border border-yellow-400/30 rounded-full text-yellow-400 text-sm font-lato mb-4">
                    Контакти
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6 text-reveal">
                    Готові розпочати співпрацю?
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto font-lato mb-12 text-reveal">
                    Зв'яжіться з нами та отримайте безкоштовну консультацію з вашого проекту
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12 stagger-container">
                    <div class="bg-gray-800 border-2 border-yellow-400 p-8 rounded-lg stagger-item hover-lift">
                        <h3 class="text-2xl font-russo text-white mb-6">Контактна інформація</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4 hover-scale">
                                <div class="w-12 h-12 bg-yellow-400/20 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-phone text-xl text-yellow-400"></i>
                                </div>
                                <div>
                                    <p class="text-gray-300 font-lato">+38 (050) 123-45-67</p>
                                    <p class="text-gray-400 text-sm font-lato">Пн-Пт 9:00-18:00</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4 hover-scale">
                                <div class="w-12 h-12 bg-teal-500/20 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-envelope text-xl text-teal-500"></i>
                                </div>
                                <div>
                                    <p class="text-gray-300 font-lato">info@meowmatrix.com</p>
                                    <p class="text-gray-400 text-sm font-lato">Відповідаємо протягом дня</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4 hover-scale">
                                <div class="w-12 h-12 bg-red-500/20 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-xl text-red-500"></i>
                                </div>
                                <div>
                                    <p class="text-gray-300 font-lato">Київ, Україна</p>
                                    <p class="text-gray-400 text-sm font-lato">Дистанційна співпраця</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-800 border-2 border-teal-500 p-8 rounded-lg stagger-item hover-lift">
                        <h3 class="text-2xl font-russo text-white mb-6">Соціальні мережі</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <a href="#"
                                class="flex items-center space-x-3 p-4 bg-gray-700 rounded-lg hover:bg-yellow-400/20 transition-colors duration-300 group hover-scale">
                                <i class="fab fa-telegram text-2xl text-yellow-400 group-hover:text-white"></i>
                                <span class="text-gray-300 group-hover:text-white">Telegram</span>
                            </a>
                            <a href="#"
                                class="flex items-center space-x-3 p-4 bg-gray-700 rounded-lg hover:bg-teal-500/20 transition-colors duration-300 group hover-scale">
                                <i class="fab fa-instagram text-2xl text-teal-500 group-hover:text-white"></i>
                                <span class="text-gray-300 group-hover:text-white">Instagram</span>
                            </a>
                            <a href="#"
                                class="flex items-center space-x-3 p-4 bg-gray-700 rounded-lg hover:bg-red-500/20 transition-colors duration-300 group hover-scale">
                                <i class="fab fa-linkedin text-2xl text-red-500 group-hover:text-white"></i>
                                <span class="text-gray-300 group-hover:text-white">LinkedIn</span>
                            </a>
                            <a href="#"
                                class="flex items-center space-x-3 p-4 bg-gray-700 rounded-lg hover:bg-yellow-400/20 transition-colors duration-300 group hover-scale">
                                <i class="fab fa-github text-2xl text-yellow-400 group-hover:text-white"></i>
                                <span class="text-gray-300 group-hover:text-white">GitHub</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="text-center fade-in-up">
                    <a href="#contact-form" id="open-contact-modal"
                        class="inline-flex items-center px-12 py-6 bg-yellow-400 text-black font-russo text-xl border-2 border-yellow-400 hover:bg-white hover:border-white transition-all duration-300 transform hover:-translate-y-2 rounded-lg btn-glow hover-lift">
                        Обговорити проєкт
                        <i class="fas fa-arrow-right ml-3"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Modal -->
    <div id="contact-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-gray-900 border-2 border-[#D8FA00] rounded-lg p-8 max-w-md w-full fade-in-scale">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-russo text-white">Зв'язатися з нами</h3>
                <button class="modal-close text-gray-400 hover:text-white transition-colors duration-300 hover-scale">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <form class="space-y-4">
                <div class="mb-4">
                    <label class="block text-white font-lato mb-2">Ім'я</label>
                    <input type="text"
                        class="w-full px-4 py-3 bg-dark-900 border border-gray-600 rounded-lg text-white focus:border-primary-neon focus:outline-none focus-ring">
                </div>

                <div class="mb-4">
                    <label class="block text-white font-lato mb-2">Email</label>
                    <input type="email"
                        class="w-full px-4 py-3 bg-dark-900 border border-gray-600 rounded-lg text-white focus:border-primary-neon focus:outline-none focus-ring">
                </div>

                <div class="mb-6">
                    <label class="block text-white font-lato mb-2">Повідомлення</label>
                    <textarea
                        class="w-full px-4 py-3 bg-dark-900 border border-gray-600 rounded-lg text-white focus:border-primary-neon focus:outline-none focus-ring h-32"></textarea>
                </div>

                <button type="submit"
                    class="w-full px-6 py-3 bg-primary-neon text-dark-950 font-russo rounded-lg hover:bg-white transition-colors duration-300 btn-glow hover-lift">
                    Відправити
                </button>
            </form>
        </div>
    </div>
@endsection

    @push('styles')
    <style>
        /* NEW Service Switcher Styles */
        .new-service-btn {
            padding: 12px 24px;
            border-radius: 8px;
            font-family: 'Russo One', sans-serif;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            cursor: pointer;
            background-color: #f3f4f6;
            color: #374151;
        }
        
        .new-service-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .new-service-btn-active {
            background-color: #D8FA00 !important;
            color: #000000 !important;
            border-color: #D8FA00;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(216, 250, 0, 0.3);
        }
        
        .new-service-content {
            transition: all 0.3s ease;
            opacity: 1;
            visibility: visible;
        }
        
        .new-service-content.hidden {
            display: none !important;
            opacity: 0 !important;
            visibility: hidden !important;
        }
        
        .new-service-content:not(.hidden) {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }
        
        /* Animation for content appearance */
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .new-service-content:not(.hidden) {
            animation: slideInUp 0.4s ease-out;
        }
    </style>
    @endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // NEW Service switcher functionality
            function initServiceSwitcher() {
                const serviceBtns = document.querySelectorAll('.new-service-btn');
                const contentPanels = document.querySelectorAll('.new-service-content');
                
                console.log('Initializing NEW service switcher...');
                console.log('Service buttons found:', serviceBtns.length);
                console.log('Content panels found:', contentPanels.length);

                // Set initial state - show web development by default
                const firstBtn = document.querySelector('.new-service-btn[data-service="web"]');
                const firstPanel = document.getElementById('web-content');
                
                if (firstBtn && firstPanel) {
                    firstBtn.classList.add('new-service-btn-active');
                    firstPanel.classList.remove('hidden');
                    console.log('First panel (web) initialized and visible');
                }

                serviceBtns.forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        const service = btn.getAttribute('data-service');
                        console.log('Switching to service:', service);

                        // Remove active class from all buttons
                        serviceBtns.forEach(b => {
                            b.classList.remove('new-service-btn-active');
                        });

                        // Hide all content panels
                        contentPanels.forEach(panel => {
                            panel.classList.add('hidden');
                        });

                        // Add active class to clicked button
                        btn.classList.add('new-service-btn-active');

                        // Show corresponding content panel
                        const targetPanel = document.getElementById(`${service}-content`);
                        if (targetPanel) {
                            console.log('Found target panel:', targetPanel);
                            targetPanel.classList.remove('hidden');
                            
                            // Force reflow to ensure visibility
                            targetPanel.offsetHeight;
                            
                            console.log('Panel should now be visible:', targetPanel.classList.toString());
                        } else {
                            console.error('Panel not found for service:', service);
                        }
                    });
                });
            }

            // Contact modal functionality
            function initContactModal() {
                const openBtn = document.getElementById('open-contact-modal');
                const closeBtn = document.getElementById('close-contact-modal');
                const modal = document.getElementById('contact-modal');

                if (openBtn && modal) {
                    openBtn.addEventListener('click', (e) => {
                        e.preventDefault();
                        modal.classList.remove('hidden');
                        setTimeout(() => {
                            modal.classList.remove('opacity-0');
                            modal.querySelector('.bg-dark-800').style.transform = 'scale(1)';
                        }, 10);
                    });
                }

                if (closeBtn && modal) {
                    closeBtn.addEventListener('click', () => {
                        modal.classList.add('opacity-0');
                        modal.querySelector('.bg-dark-800').style.transform = 'scale(0.95)';
                        setTimeout(() => {
                            modal.classList.add('hidden');
                        }, 300);
                    });
                }

                // Close on outside click
                if (modal) {
                    modal.addEventListener('click', (e) => {
                        if (e.target === modal) {
                            closeBtn.click();
                        }
                    });
                }
            }

            // FAQ accordion functionality
            function initFAQAccordion() {
                const faqItems = document.querySelectorAll('.faq-item');

                faqItems.forEach(item => {
                    const question = item.querySelector('.faq-question');
                    const answer = item.querySelector('.faq-answer');
                    const icon = item.querySelector('.fa-plus');

                    question.addEventListener('click', () => {
                        const isOpen = answer.classList.contains('hidden');

                        // Close all other items
                        faqItems.forEach(otherItem => {
                            if (otherItem !== item) {
                                otherItem.querySelector('.faq-answer').classList.add(
                                    'hidden');
                                otherItem.querySelector('.fa-plus').style.transform =
                                    'rotate(0deg)';
                            }
                        });

                        // Toggle current item
                        if (isOpen) {
                            answer.classList.remove('hidden');
                            icon.style.transform = 'rotate(45deg)';
                        } else {
                            answer.classList.add('hidden');
                            icon.style.transform = 'rotate(0deg)';
                        }
                    });
                });
            }

            // Initialize all functions
            initServiceSwitcher();
            initContactModal();
            initFAQAccordion();
        });
    </script>
@endpush
