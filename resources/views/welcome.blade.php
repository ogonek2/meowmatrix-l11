@extends('layouts.main.app')

@section('title')
    @if(app()->getLocale() === 'uk')
        Головна сторінка - MeowMatrix розробка веб сайтів та інтернет маркетинг
    @else
        Home - MeowMatrix Web Development & Internet Marketing
    @endif
@endsection

@section('description')
    @if(app()->getLocale() === 'uk')
        Професійна розробка веб-сайтів, мобільних додатків та інтернет-маркетинг з використанням сучасних технологій Vue.js та Laravel
    @else
        Professional web development, mobile apps and internet marketing using modern Vue.js and Laravel technologies
    @endif
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-code-dark overflow-hidden">
        <!-- Code editor style background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
            <div class="absolute top-20 left-20 w-32 h-32 bg-primary-neon/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-40 h-40 bg-accent-neon/10 rounded-full blur-3xl animate-pulse animation-delay-2000"></div>
            <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-secondary-neon/10 rounded-full blur-3xl animate-pulse animation-delay-4000"></div>
        </div>
        
        <!-- Floating shapes -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-32 left-32 w-16 h-16 border-2 border-primary-neon/50 transform rotate-45 animate-float shadow-neon"></div>
            <div class="absolute top-1/3 right-32 w-12 h-12 border-2 border-accent-neon/50 transform -rotate-12 animate-float animation-delay-2000 shadow-neon-teal"></div>
            <div class="absolute bottom-32 left-1/3 w-20 h-20 border-2 border-secondary-neon/50 transform rotate-45 animate-float animation-delay-4000 shadow-neon-red"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left: Content -->
                <div class="text-center lg:text-left">
                    <div class="mb-6">
                        <span class="inline-block px-4 py-2 bg-primary-neon/20 border border-primary-neon/30 rounded-full text-primary-neon text-sm font-lato mb-4">
                            🚀 Веб-розробка та маркетинг
                        </span>
                    </div>
                    
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-russo text-white mb-8 leading-tight">
                        Створюємо 
                        <span class="text-primary-neon neon-text-glow">сучасні</span> 
                        <br>веб-рішення для бізнесу
                    </h1>
                    
                    <p class="text-xl text-gray-300 mb-10 font-lato leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Ми розробляємо інноваційні веб-сайти та додатки, які допомагають бізнесу рости та розвиватися в цифровому світі.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-6 justify-center lg:justify-start">
                        <a href="#contact-form" id="open-contact-modal" class="group inline-flex items-center px-10 py-5 bg-primary-neon text-dark-950 font-russo text-lg rounded-xl hover:bg-white transition-all duration-300 transform hover:-translate-y-2 shadow-neon hover:shadow-neon-lg">
                            Обговорити проєкт
                            <i class="fas fa-arrow-right ml-3 transform group-hover:translate-x-2 transition-transform duration-300"></i>
                        </a>
                        <a href="#services" class="group inline-flex items-center px-10 py-5 border-2 border-white text-white font-russo text-lg rounded-xl hover:bg-white hover:text-dark-950 transition-all duration-300 hover:shadow-2xl">
                            Наші послуги
                            <i class="fas fa-chevron-down ml-3 transform group-hover:translate-y-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                    
                    <!-- Stats preview -->
                    <div class="flex justify-center lg:justify-start gap-8 mt-12">
                        <div class="text-center">
                            <div class="text-2xl font-russo text-primary-neon mb-1">150+</div>
                            <div class="text-sm text-gray-400">Проектів</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-russo text-accent-neon mb-1">100%</div>
                            <div class="text-sm text-gray-400">Задоволення</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-russo text-secondary-neon mb-1">7+</div>
                            <div class="text-sm text-gray-400">Років досвіду</div>
                        </div>
                    </div>
                </div>
                
                <!-- Right: Video/Image -->
                <div class="relative">
                    <div class="relative w-full h-96 bg-gradient-to-br from-dark-800 to-dark-900 rounded-3xl border-2 border-primary-neon/50 overflow-hidden group shadow-2xl">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary-neon/20 to-accent-neon/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-28 h-28 bg-gradient-to-br from-primary-neon to-accent-neon rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-neon">
                                <i class="fas fa-rocket text-4xl text-dark-950"></i>
                            </div>
                        </div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="bg-dark-800/90 backdrop-blur-sm rounded-xl p-4 border border-primary-neon/30">
                                <p class="text-white text-sm font-lato">🎬 Дивіться наші роботи</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating elements -->
                    <div class="absolute -top-4 -right-4 w-8 h-8 bg-primary-neon/30 rounded-full animate-float"></div>
                    <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-accent-neon/30 rounded-full animate-float animation-delay-2000"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="relative py-24 bg-code-light overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-primary-neon/20 border border-primary-neon/30 rounded-full text-primary-neon text-sm font-lato mb-4">
                    💼 Наші послуги
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-gray-800 mb-6">
                    Розробка сайтів
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto font-lato">
                    Ми створюємо сучасні веб-сайти та додатки, які не лише виглядають привабливо, але й ефективно працюють для вашого бізнесу.
                </p>
            </div>
            
            <!-- Service Switcher -->
            <div class="mb-12">
                <div class="flex justify-center space-x-2 mb-8">
                    <button class="service-tab active bg-primary-neon text-black px-8 py-4 rounded-xl font-russo transition-all duration-300 shadow-lg" data-service="web">Веб-розробка</button>
                    <button class="service-tab bg-white text-gray-800 border-2 border-gray-300 px-8 py-4 rounded-xl font-russo transition-all duration-300 hover:bg-primary-neon hover:text-black hover:border-primary-neon" data-service="mobile">Мобільні додатки</button>
                    <button class="service-tab bg-white text-gray-800 border-2 border-gray-300 px-8 py-4 rounded-xl font-russo transition-all duration-300 hover:bg-primary-neon hover:text-black hover:border-primary-neon" data-service="marketing">Маркетинг</button>
                </div>
                
                <!-- Service content -->
                <div class="service-content">
                    <div class="service-panel active" data-service="web">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="bg-white/80 p-8 rounded-2xl border border-primary-neon/20 hover:border-primary-neon/50 transition-all duration-300 group shadow-lg">
                                <div class="w-16 h-16 bg-primary-neon rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-code text-2xl text-dark-950"></i>
                                </div>
                                <h3 class="text-xl font-russo text-gray-800 mb-4">Frontend розробка</h3>
                                <p class="text-gray-600 font-lato">Vue.js, React, HTML5, CSS3, Tailwind CSS</p>
                            </div>
                            <div class="bg-white/80 p-8 rounded-2xl border border-accent-neon/20 hover:border-accent-neon/50 transition-all duration-300 group shadow-lg">
                                <div class="w-16 h-16 bg-accent-neon rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-server text-2xl text-dark-950"></i>
                                </div>
                                <h3 class="text-xl font-russo text-gray-800 mb-4">Backend розробка</h3>
                                <p class="text-gray-600 font-lato">Laravel, PHP, Node.js, MySQL, PostgreSQL</p>
                            </div>
                            <div class="bg-white/80 p-8 rounded-2xl border border-secondary-neon/20 hover:border-secondary-neon/50 transition-all duration-300 group shadow-lg">
                                <div class="w-16 h-16 bg-secondary-neon rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-mobile-alt text-2xl text-dark-950"></i>
                                </div>
                                <h3 class="text-xl font-russo text-gray-800 mb-4">Responsive Design</h3>
                                <p class="text-gray-600 font-lato">Адаптивний дизайн для всіх пристроїв</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="service-panel hidden" data-service="mobile">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="bg-white/80 p-8 rounded-2xl border border-primary-neon/20 hover:border-primary-neon/50 transition-all duration-300 group shadow-lg">
                                <div class="w-16 h-16 bg-primary-neon rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fab fa-android text-2xl text-dark-950"></i>
                                </div>
                                <h3 class="text-xl font-russo text-gray-800 mb-4">Android додатки</h3>
                                <p class="text-gray-600 font-lato">Нативна розробка для Android</p>
                            </div>
                            <div class="bg-white/80 p-8 rounded-2xl border border-accent-neon/20 hover:border-accent-neon/50 transition-all duration-300 group shadow-lg">
                                <div class="w-16 h-16 bg-accent-neon rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fab fa-apple text-2xl text-dark-950"></i>
                                </div>
                                <h3 class="text-xl font-russo text-gray-800 mb-4">iOS додатки</h3>
                                <p class="text-gray-600 font-lato">Нативна розробка для iOS</p>
                            </div>
                            <div class="bg-white/80 p-8 rounded-2xl border border-secondary-neon/20 hover:border-secondary-neon/50 transition-all duration-300 group shadow-lg">
                                <div class="w-16 h-16 bg-secondary-neon rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-sync text-2xl text-dark-950"></i>
                                </div>
                                <h3 class="text-xl font-russo text-gray-800 mb-4">Cross-platform</h3>
                                <p class="text-gray-600 font-lato">React Native, Flutter</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="service-panel hidden" data-service="marketing">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="bg-white/80 p-8 rounded-2xl border border-primary-neon/20 hover:border-primary-neon/50 transition-all duration-300 group shadow-lg">
                                <div class="w-16 h-16 bg-primary-neon rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-search text-2xl text-dark-950"></i>
                                </div>
                                <h3 class="text-xl font-russo text-gray-800 mb-4">SEO оптимізація</h3>
                                <p class="text-gray-600 font-lato">Просування в пошукових системах</p>
                            </div>
                            <div class="bg-white/80 p-8 rounded-2xl border border-accent-neon/20 hover:border-accent-neon/50 transition-all duration-300 group shadow-lg">
                                <div class="w-16 h-16 bg-accent-neon rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-chart-line text-2xl text-dark-950"></i>
                                </div>
                                <h3 class="text-xl font-russo text-gray-800 mb-4">Контекстна реклама</h3>
                                <p class="text-gray-600 font-lato">Google Ads, Facebook Ads</p>
                            </div>
                            <div class="bg-white/80 p-8 rounded-2xl border border-secondary-neon/20 hover:border-secondary-neon/50 transition-all duration-300 group shadow-lg">
                                <div class="w-16 h-16 bg-secondary-neon rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-share-alt text-2xl text-dark-950"></i>
                                </div>
                                <h3 class="text-xl font-russo text-gray-800 mb-4">SMM</h3>
                                <p class="text-gray-600 font-lato">Соціальні мережі та контент</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="relative py-24 bg-code-dark overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-block px-4 py-2 bg-accent-neon/20 border border-accent-neon/30 rounded-full text-accent-neon text-sm font-lato mb-4">
                        🏢 Про нас
                    </div>
                    <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6">
                        Наш досвід та статистика
                    </h2>
                    <p class="text-xl text-gray-300 mb-8 font-lato leading-relaxed">
                        Ми команда досвідчених розробників та маркетологів, які створюють цифрові рішення для успішного бізнесу.
                    </p>
                    
                    <!-- Stats Grid -->
                    <div class="grid grid-cols-2 gap-8">
                        <div class="text-center lg:text-left">
                            <div class="text-4xl font-russo text-primary-neon mb-2">150+</div>
                            <div class="text-gray-400 font-lato">Завершених проектів</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-4xl font-russo text-accent-neon mb-2">100+</div>
                            <div class="text-gray-400 font-lato">Задоволених клієнтів</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-4xl font-russo text-secondary-neon mb-2">7+</div>
                            <div class="text-gray-400 font-lato">Років досвіду</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-4xl font-russo text-primary-neon mb-2">24/7</div>
                            <div class="text-gray-400 font-lato">Підтримка</div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="bg-dark-800/50 rounded-3xl p-8 glass-effect border border-accent-neon/30">
                        <h3 class="text-2xl font-russo text-white mb-6">Наш підхід</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-primary-neon rounded-lg flex items-center justify-center">
                                    <i class="fas fa-lightbulb text-dark-950"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-russo">Аналіз та планування</h4>
                                    <p class="text-gray-300 text-sm font-lato">Детальне вивчення вашого бізнесу</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-accent-neon rounded-lg flex items-center justify-center">
                                    <i class="fas fa-palette text-dark-950"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-russo">Дизайн та UX</h4>
                                    <p class="text-gray-300 text-sm font-lato">Сучасний та зручний інтерфейс</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-secondary-neon rounded-lg flex items-center justify-center">
                                    <i class="fas fa-rocket text-dark-950"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-russo">Розробка та запуск</h4>
                                    <p class="text-gray-300 text-sm font-lato">Швидка та якісна реалізація</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section id="technologies" class="relative py-24 bg-code-light overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-secondary-neon/20 border border-secondary-neon/30 rounded-full text-secondary-neon text-sm font-lato mb-4">
                    ⚡ Технології
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-gray-800 mb-6">
                    Технології на яких ми працюємо
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto font-lato">
                    Використовуємо найсучасніші технології Vue.js та Laravel для створення високопродуктивних рішень
                </p>
            </div>
            
            <!-- Tech Stack -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="bg-white/80 p-8 rounded-2xl border border-primary-neon/20 hover:border-primary-neon/50 transition-all duration-300 group text-center shadow-lg">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary-neon to-accent-neon rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-vuejs text-2xl text-dark-950"></i>
                    </div>
                    <h3 class="text-lg font-russo text-gray-800 mb-2">Vue.js</h3>
                    <p class="text-gray-600 text-sm font-lato">Progressive Framework</p>
                </div>
                
                <div class="bg-white/80 p-8 rounded-2xl border border-accent-neon/20 hover:border-accent-neon/50 transition-all duration-300 group text-center shadow-lg">
                    <div class="w-16 h-16 bg-gradient-to-br from-accent-neon to-secondary-neon rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-laravel text-2xl text-dark-950"></i>
                    </div>
                    <h3 class="text-lg font-russo text-gray-800 mb-2">Laravel</h3>
                    <p class="text-gray-600 text-sm font-lato">PHP Framework</p>
                </div>
                
                <div class="bg-white/80 p-8 rounded-2xl border border-secondary-neon/20 hover:border-secondary-neon/50 transition-all duration-300 group text-center shadow-lg">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary-neon to-primary-neon rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-js-square text-2xl text-dark-950"></i>
                    </div>
                    <h3 class="text-lg font-russo text-gray-800 mb-2">JavaScript</h3>
                    <p class="text-gray-600 text-sm font-lato">ES6+ & TypeScript</p>
                </div>
                
                <div class="bg-dark-800/50 p-8 rounded-2xl glass-effect border border-primary-neon/20 hover:border-primary-neon/50 transition-all duration-300 group text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary-neon to-accent-neon rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-node-js text-2xl text-dark-950"></i>
                    </div>
                    <h3 class="text-lg font-russo text-gray-800 mb-2">Node.js</h3>
                    <p class="text-gray-300 text-sm font-lato">Server Runtime</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section id="clients" class="relative py-24 bg-code-dark overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-accent-neon/20 border border-accent-neon/30 rounded-full text-accent-neon text-sm font-lato mb-4">
                    🤝 Наші клієнти
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6">
                    Компанії які нам довіряють
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto font-lato">
                    Ми працюємо з різними бізнесами та створюємо успішні проекти
                </p>
            </div>
            
            <!-- Clients Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="bg-code-darker p-8 rounded-2xl border border-gray-700 hover:border-primary-neon transition-all duration-300 group text-center">
                    <div class="w-20 h-20 bg-gray-800 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-primary-neon/20 transition-colors duration-300">
                        <i class="fas fa-building text-3xl text-gray-400 group-hover:text-primary-neon transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-lg font-russo text-white mb-2">TechCorp</h3>
                    <p class="text-gray-400 text-sm font-lato">IT компанія</p>
                </div>
                
                <div class="bg-code-darker p-8 rounded-2xl border border-gray-700 hover:border-accent-neon transition-all duration-300 group text-center">
                    <div class="w-20 h-20 bg-gray-800 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-accent-neon/20 transition-colors duration-300">
                        <i class="fas fa-shopping-cart text-3xl text-gray-400 group-hover:text-accent-neon transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-lg font-russo text-white mb-2">ShopPlus</h3>
                    <p class="text-gray-400 text-sm font-lato">E-commerce</p>
                </div>
                
                <div class="bg-code-darker p-8 rounded-2xl border border-gray-700 hover:border-secondary-neon transition-all duration-300 group text-center">
                    <div class="w-20 h-20 bg-gray-800 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-secondary-neon/20 transition-colors duration-300">
                        <i class="fas fa-chart-line text-3xl text-gray-400 group-hover:text-secondary-neon transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-lg font-russo text-white mb-2">FinancePro</h3>
                    <p class="text-gray-400 text-sm font-lato">Фінанси</p>
                </div>
                
                <div class="bg-code-darker p-8 rounded-2xl border border-gray-700 hover:border-primary-neon transition-all duration-300 group text-center">
                    <div class="w-20 h-20 bg-gray-800 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-primary-neon/20 transition-colors duration-300">
                        <i class="fas fa-graduation-cap text-3xl text-gray-400 group-hover:text-primary-neon transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-lg font-russo text-white mb-2">EduTech</h3>
                    <p class="text-gray-400 text-sm font-lato">Освіта</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="relative py-24 bg-code-light overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-secondary-neon/20 border border-secondary-neon/30 rounded-full text-secondary-neon text-sm font-lato mb-4">
                    ⭐ Відгуки
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-gray-800 mb-6">
                    Що говорять наші клієнти
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto font-lato">
                    Відгуки від задоволених клієнтів про якість нашої роботи
                </p>
            </div>
            
            <!-- Reviews Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl border border-gray-200 hover:border-primary-neon transition-all duration-300 group shadow-lg hover:shadow-xl">
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
                        <div class="w-12 h-12 bg-primary-neon rounded-full flex items-center justify-center mr-4">
                            <span class="text-dark-950 font-russo text-lg">А</span>
                        </div>
                        <div>
                            <h4 class="font-russo text-gray-800">Анна Петренко</h4>
                            <p class="text-gray-500 text-sm font-lato">CEO, TechCorp</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-2xl border border-gray-200 hover:border-accent-neon transition-all duration-300 group shadow-lg hover:shadow-xl">
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
                        <div class="w-12 h-12 bg-accent-neon rounded-full flex items-center justify-center mr-4">
                            <span class="text-dark-950 font-russo text-lg">М</span>
                        </div>
                        <div>
                            <h4 class="font-russo text-gray-800">Михайло Коваль</h4>
                            <p class="text-gray-500 text-sm font-lato">Founder, ShopPlus</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-2xl border border-gray-200 hover:border-secondary-neon transition-all duration-300 group shadow-lg hover:shadow-xl">
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
                        <div class="w-12 h-12 bg-secondary-neon rounded-full flex items-center justify-center mr-4">
                            <span class="text-dark-950 font-russo text-lg">О</span>
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
    <section id="blog" class="relative py-24 bg-code-dark overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-primary-neon/20 border border-primary-neon/30 rounded-full text-primary-neon text-sm font-lato mb-4">
                    📰 Блог
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6">
                    Останні публікації
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto font-lato">
                    Корисні статті про веб-розробку, дизайн та маркетинг
                </p>
            </div>
            
            <!-- Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <article class="bg-code-darker p-6 rounded-2xl border border-gray-700 hover:border-primary-neon transition-all duration-300 group">
                    <div class="w-full h-48 bg-gray-800 rounded-xl mb-6 group-hover:bg-primary-neon/20 transition-colors duration-300 flex items-center justify-center">
                        <i class="fas fa-code text-4xl text-gray-400 group-hover:text-primary-neon transition-colors duration-300"></i>
                    </div>
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 bg-primary-neon/20 text-primary-neon text-xs font-lato rounded-full">Веб-розробка</span>
                    </div>
                    <h3 class="text-xl font-russo text-white mb-3 group-hover:text-primary-neon transition-colors duration-300">
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
                
                <article class="bg-code-darker p-6 rounded-2xl border border-gray-700 hover:border-accent-neon transition-all duration-300 group">
                    <div class="w-full h-48 bg-gray-800 rounded-xl mb-6 group-hover:bg-accent-neon/20 transition-colors duration-300 flex items-center justify-center">
                        <i class="fas fa-palette text-4xl text-gray-400 group-hover:text-accent-neon transition-colors duration-300"></i>
                    </div>
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 bg-accent-neon/20 text-accent-neon text-xs font-lato rounded-full">Дизайн</span>
                    </div>
                    <h3 class="text-xl font-russo text-white mb-3 group-hover:text-accent-neon transition-colors duration-300">
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
                
                <article class="bg-code-darker p-6 rounded-2xl border border-gray-700 hover:border-secondary-neon transition-all duration-300 group">
                    <div class="w-full h-48 bg-gray-800 rounded-xl mb-6 group-hover:bg-secondary-neon/20 transition-colors duration-300 flex items-center justify-center">
                        <i class="fas fa-chart-line text-4xl text-gray-400 group-hover:text-secondary-neon transition-colors duration-300"></i>
                    </div>
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 bg-secondary-neon/20 text-secondary-neon text-xs font-lato rounded-full">Маркетинг</span>
                    </div>
                    <h3 class="text-xl font-russo text-white mb-3 group-hover:text-secondary-neon transition-colors duration-300">
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
    <section id="faq" class="relative py-24 bg-code-light overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-secondary-neon/20 border border-secondary-neon/30 rounded-full text-secondary-neon text-sm font-lato mb-4">
                    ❓ FAQ
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-gray-800 mb-6">
                    Часті запитання
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto font-lato">
                    Відповіді на найпопулярніші питання наших клієнтів
                </p>
            </div>
            
            <!-- FAQ Accordion -->
            <div class="max-w-4xl mx-auto space-y-4">
                <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-300">
                        <span class="font-russo text-gray-800">Скільки часу займає розробка сайту?</span>
                        <i class="fas fa-plus text-primary-neon transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer px-6 pb-4 hidden">
                        <p class="text-gray-600 font-lato">
                            Час розробки залежить від складності проекту. Простий лендінг - 1-2 тижні, 
                            складний e-commerce сайт - 2-3 місяці. Ми завжди дотримуємося дедлайнів.
                        </p>
                    </div>
                </div>
                
                <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-300">
                        <span class="font-russo text-gray-800">Чи надаєте ви підтримку після запуску?</span>
                        <i class="fas fa-plus text-primary-neon transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer px-6 pb-4 hidden">
                        <p class="text-gray-600 font-lato">
                            Так, ми надаємо технічну підтримку та обслуговування сайту протягом 
                            всього терміну співпраці. Також можемо оновити контент та функціонал.
                        </p>
                    </div>
                </div>
                
                <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-300">
                        <span class="font-russo text-gray-800">Які технології ви використовуєте?</span>
                        <i class="fas fa-plus text-primary-neon transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer px-6 pb-4 hidden">
                        <p class="text-gray-600 font-lato">
                            Ми використовуємо сучасний стек: Vue.js, Laravel, Node.js, React. 
                            Вибір технології залежить від вимог проекту та побажань клієнта.
                        </p>
                    </div>
                </div>
                
                <div class="faq-item bg-white border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-question w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-300">
                        <span class="font-russo text-gray-800">Чи можна змінити дизайн під час розробки?</span>
                        <i class="fas fa-plus text-primary-neon transition-transform duration-300"></i>
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
    <section id="process" class="relative py-24 bg-code-dark overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-accent-neon/20 border border-accent-neon/30 rounded-full text-accent-neon text-sm font-lato mb-4">
                    ⚙️ Процес роботи
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6">
                    Як ми працюємо
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto font-lato">
                    Прозорий процес розробки від ідеї до запуску
                </p>
            </div>
            
            <!-- Process Steps -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="w-20 h-20 bg-primary-neon rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-lightbulb text-3xl text-dark-950"></i>
                    </div>
                    <h3 class="text-xl font-russo text-white mb-4">1. Аналіз</h3>
                    <p class="text-gray-300 font-lato">Вивчаємо ваш бізнес та вимоги</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-20 h-20 bg-accent-neon rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-palette text-3xl text-dark-950"></i>
                    </div>
                    <h3 class="text-xl font-russo text-white mb-4">2. Дизайн</h3>
                    <p class="text-gray-300 font-lato">Створюємо макети та прототипи</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-20 h-20 bg-secondary-neon rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-code text-3xl text-dark-950"></i>
                    </div>
                    <h3 class="text-xl font-russo text-white mb-4">3. Розробка</h3>
                    <p class="text-gray-300 font-lato">Програмуюємо функціонал</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-20 h-20 bg-primary-neon rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-rocket text-3xl text-dark-950"></i>
                    </div>
                    <h3 class="text-xl font-russo text-white mb-4">4. Запуск</h3>
                    <p class="text-gray-300 font-lato">Тестуємо та запускаємо проект</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="cta" class="relative py-24 bg-code-accent overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6">
                Готові розпочати співпрацю?
            </h2>
            <p class="text-xl text-gray-300 mb-10 max-w-3xl mx-auto font-lato">
                Зв'яжіться з нами та отримайте безкоштовну консультацію з вашого проекту
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="#contact-form" id="open-contact-modal" class="inline-flex items-center px-12 py-6 bg-primary-neon text-dark-950 font-russo text-xl rounded-xl hover:bg-white transition-all duration-300 transform hover:-translate-y-2 shadow-2xl">
                    Обговорити проєкт
                    <i class="fas fa-arrow-right ml-3"></i>
                </a>
                <a href="tel:+380501234567" class="inline-flex items-center px-12 py-6 border-2 border-white text-white font-russo text-xl rounded-xl hover:bg-white hover:text-dark-950 transition-all duration-300">
                    <i class="fas fa-phone mr-3"></i>
                    +38 (050) 123-45-67
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="relative py-24 bg-code-dark overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-2 bg-primary-neon/20 border border-primary-neon/30 rounded-full text-primary-neon text-sm font-lato mb-4">
                    📞 Контакти
                </div>
                <h2 class="text-4xl sm:text-5xl font-russo text-white mb-6">
                    Готові розпочати співпрацю?
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto font-lato mb-12">
                    Зв'яжіться з нами та отримайте безкоштовну консультацію з вашого проекту
                </p>
                
                <a href="#contact-form" id="open-contact-modal" class="inline-flex items-center px-12 py-6 bg-primary-neon text-dark-950 font-russo text-xl rounded-xl hover:bg-white transition-all duration-300 transform hover:-translate-y-2 shadow-2xl">
                    Обговорити проєкт
                    <i class="fas fa-arrow-right ml-3"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Modal -->
    <div id="contact-modal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden opacity-0 transition-opacity duration-300">
        <div class="bg-dark-800 rounded-3xl p-8 max-w-md w-full mx-4 transform scale-95 transition-all duration-300 border border-primary-neon/30">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-russo text-white">Зв'язатися з нами</h3>
                <button id="close-contact-modal" class="text-gray-400 hover:text-white">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <form>
                <div class="mb-4">
                    <label class="block text-white font-lato mb-2">Ім'я</label>
                    <input type="text" class="w-full px-4 py-3 bg-dark-900 border border-gray-600 rounded-lg text-white focus:border-primary-neon focus:outline-none">
                </div>
                
                <div class="mb-4">
                    <label class="block text-white font-lato mb-2">Email</label>
                    <input type="email" class="w-full px-4 py-3 bg-dark-900 border border-gray-600 rounded-lg text-white focus:border-primary-neon focus:outline-none">
                </div>
                
                <div class="mb-6">
                    <label class="block text-white font-lato mb-2">Повідомлення</label>
                    <textarea class="w-full px-4 py-3 bg-dark-900 border border-gray-600 rounded-lg text-white focus:border-primary-neon focus:outline-none h-32"></textarea>
                </div>
                
                <button type="submit" class="w-full px-6 py-3 bg-primary-neon text-dark-950 font-russo rounded-lg hover:bg-white transition-colors duration-300">
                    Відправити
                </button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Service switcher functionality
    function initServiceSwitcher() {
        const tabs = document.querySelectorAll('.service-tab');
        const panels = document.querySelectorAll('.service-panel');
        
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const service = tab.getAttribute('data-service');
                
                // Remove active class from all tabs
                tabs.forEach(t => {
                    t.classList.remove('active');
                });
                
                // Hide all panels
                panels.forEach(p => {
                    p.classList.add('hidden');
                    p.classList.remove('active');
                });
                
                // Add active class to clicked tab
                tab.classList.add('active');
                
                // Show corresponding panel
                const activePanel = document.querySelector(`.service-panel[data-service="${service}"]`);
                if (activePanel) {
                    activePanel.classList.remove('hidden');
                    activePanel.classList.add('active');
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
                        otherItem.querySelector('.faq-answer').classList.add('hidden');
                        otherItem.querySelector('.fa-plus').style.transform = 'rotate(0deg)';
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