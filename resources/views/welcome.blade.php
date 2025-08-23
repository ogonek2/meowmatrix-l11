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
        Професійна розробка веб-сайтів, мобільних додатків та інтернет-маркетинг для вашого бізнесу
    @else
        Professional web development, mobile apps and internet marketing for your business
    @endif
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-dark-950 overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <!-- Grid Pattern -->
            <div class="absolute inset-0 grid-pattern"></div>
            
            <!-- Floating Elements -->
            <div class="absolute top-20 left-20 w-72 h-72 bg-primary-neon/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-secondary-neon/10 rounded-full blur-3xl animate-pulse animation-delay-2000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-accent-neon/10 rounded-full blur-3xl animate-pulse animation-delay-4000"></div>
            
            <!-- Moving Lines -->
            <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary-neon to-transparent animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-full h-px bg-gradient-to-r from-transparent via-accent-neon to-transparent animate-pulse animation-delay-2000"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-6xl mx-auto">
                <!-- Main Title -->
                <h1 class="text-6xl sm:text-7xl lg:text-8xl xl:text-9xl font-russo mb-8 leading-tight">
                    <span class="block bg-gradient-to-r from-primary-neon via-accent-neon to-secondary-neon bg-clip-text text-transparent">
                        {{ __('app.hero_title') }}
                    </span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-2xl sm:text-3xl lg:text-4xl text-gray-300 mb-16 max-w-5xl mx-auto leading-relaxed font-lato font-light">
                    {{ __('app.hero_subtitle') }}
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-8 justify-center items-center mb-20">
                    <a href="#contact" class="group relative inline-flex items-center px-10 py-5 bg-gradient-to-r from-primary-neon to-accent-neon text-dark-950 font-russo text-xl rounded-3xl hover:from-secondary-neon hover:to-primary-neon transition-all duration-300 shadow-neon hover:shadow-neon-lg transform hover:-translate-y-2 overflow-hidden">
                        <span class="relative z-10">{{ __('app.hero_cta') }}</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-secondary-neon to-primary-neon opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <i class="fas fa-rocket ml-4 relative z-10 text-2xl"></i>
                    </a>
                    
                    <a href="#services" class="group inline-flex items-center px-10 py-5 border-2 border-primary-neon/50 text-primary-neon font-russo text-xl rounded-3xl hover:bg-primary-neon hover:text-dark-950 transition-all duration-300 hover:border-primary-neon hover:shadow-neon hover:shadow-neon-lg">
                        {{ __('app.btn_learn_more') }}
                        <i class="fas fa-arrow-right ml-4 group-hover:translate-x-1 transition-transform duration-300 text-2xl"></i>
                    </a>
                </div>
                
                <!-- Stats Preview -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 max-w-5xl mx-auto">
                    <div class="text-center group">
                        <div class="text-4xl md:text-5xl font-russo text-primary-neon mb-3 group-hover:scale-110 transition-transform duration-300">150+</div>
                        <div class="text-primary-neon/70 font-lato text-lg">{{ __('app.stats_projects') }}</div>
                    </div>
                    <div class="text-center group">
                        <div class="text-4xl md:text-5xl font-russo text-accent-neon mb-3 group-hover:scale-110 transition-transform duration-300">80+</div>
                        <div class="text-accent-neon/70 font-lato text-lg">{{ __('app.stats_clients') }}</div>
                    </div>
                    <div class="text-center group">
                        <div class="text-4xl md:text-5xl font-russo text-secondary-neon mb-3 group-hover:scale-110 transition-transform duration-300">5+</div>
                        <div class="text-accent-neon/70 font-lato text-lg">{{ __('app.stats_experience') }}</div>
                    </div>
                    <div class="text-center group">
                        <div class="text-4xl md:text-5xl font-russo text-primary-neon mb-3 group-hover:scale-110 transition-transform duration-300">12</div>
                        <div class="text-primary-neon/70 font-lato text-lg">{{ __('app.stats_team') }}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <a href="#about" class="group block">
                <div class="w-8 h-12 border-2 border-primary-neon/50 rounded-full flex justify-center">
                    <div class="w-1 h-4 bg-primary-neon rounded-full mt-2 animate-bounce group-hover:bg-accent-neon transition-colors duration-300"></div>
                </div>
                <div class="text-center mt-3 text-primary-neon/50 text-sm group-hover:text-primary-neon transition-colors duration-300 font-lato">
                    {{ __('app.hero_scroll') }}
                </div>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-dark-900 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary-neon to-transparent"></div>
            <div class="absolute bottom-0 right-0 w-full h-px bg-gradient-to-r from-transparent via-accent-neon to-transparent"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div>
                    <h2 class="text-5xl sm:text-6xl lg:text-7xl font-russo mb-10">
                        <span class="bg-gradient-to-r from-primary-neon to-accent-neon bg-clip-text text-transparent">
                            {{ __('app.about_title') }}
                        </span>
                    </h2>
                    <p class="text-2xl lg:text-3xl text-gray-300 mb-10 leading-relaxed font-lato font-light">
                        {{ __('app.about_subtitle') }}
                    </p>
                    <p class="text-xl lg:text-2xl text-gray-400 mb-12 leading-relaxed font-lato">
                        {{ __('app.about_text') }}
                    </p>
                    <a href="#contact" class="group inline-flex items-center px-10 py-5 bg-gradient-to-r from-primary-neon to-accent-neon text-dark-950 font-russo text-xl rounded-3xl hover:from-secondary-neon hover:to-primary-neon transition-all duration-300 shadow-neon hover:shadow-neon-lg transform hover:-translate-y-2">
                        {{ __('app.btn_contact_us') }}
                        <i class="fas fa-arrow-right ml-4 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-primary-neon via-accent-neon to-secondary-neon rounded-3xl p-12 text-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-dark-950/20"></div>
                        <div class="relative z-10">
                            <div class="text-9xl mb-8">🚀</div>
                            <h3 class="text-4xl font-russo text-white mb-10">{{ __('app.process_title') }}</h3>
                            <div class="space-y-8">
                                <div class="flex items-center space-x-6">
                                    <span class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-xl font-russo">1</span>
                                    <span class="text-2xl font-russo">{{ __('app.process_step1') }}</span>
                                </div>
                                <div class="flex items-center space-x-6">
                                    <span class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-xl font-russo">2</span>
                                    <span class="text-2xl font-russo">{{ __('app.process_step2') }}</span>
                                </div>
                                <div class="flex items-center space-x-6">
                                    <span class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-xl font-russo">3</span>
                                    <span class="text-2xl font-russo">{{ __('app.process_step3') }}</span>
                                </div>
                                <div class="flex items-center space-x-6">
                                    <span class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-xl font-russo">4</span>
                                    <span class="text-2xl font-russo">{{ __('app.process_step4') }}</span>
                                </div>
                                <div class="flex items-center space-x-6">
                                    <span class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-xl font-russo">5</span>
                                    <span class="text-2xl font-russo">{{ __('app.process_step5') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-gradient-to-b from-dark-900 to-dark-950 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary-neon to-transparent"></div>
            <div class="absolute bottom-0 right-0 w-full h-px bg-gradient-to-r from-transparent via-accent-neon to-transparent"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-5xl sm:text-6xl lg:text-7xl font-russo mb-8">
                    <span class="bg-gradient-to-r from-primary-neon to-accent-neon bg-clip-text text-transparent">
                        {{ __('app.services_title') }}
                    </span>
                </h2>
                <p class="text-2xl lg:text-3xl text-gray-300 max-w-4xl mx-auto font-lato font-light">
                    {{ __('app.services_subtitle') }}
                </p>
            </div>

            <!-- Services Slider -->
            <div class="swiper services-swiper mb-16">
                <div class="swiper-wrapper">
                    <!-- Web Development -->
                    <div class="swiper-slide">
                        <div class="group bg-dark-900/50 backdrop-blur-sm rounded-3xl p-10 border border-primary-neon/20 hover:border-primary-neon/50 transition-all duration-500 transform hover:-translate-y-4 hover:shadow-neon hover:shadow-neon-lg relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-primary-neon/5 to-accent-neon/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="relative z-10">
                                <div class="w-24 h-24 bg-gradient-to-br from-primary-neon to-accent-neon rounded-3xl flex items-center justify-center mb-10 group-hover:scale-110 transition-transform duration-500 shadow-neon">
                                    <i class="fas fa-code text-dark-950 text-4xl"></i>
                                </div>
                                <h3 class="text-3xl font-russo text-white mb-8">{{ __('app.service_webdev_title') }}</h3>
                                <p class="text-gray-300 leading-relaxed text-xl font-lato">{{ __('app.service_webdev_desc') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Apps -->
                    <div class="swiper-slide">
                        <div class="group bg-dark-900/50 backdrop-blur-sm rounded-3xl p-10 border border-accent-neon/20 hover:border-accent-neon/50 transition-all duration-500 transform hover:-translate-y-4 hover:shadow-neon-teal hover:shadow-neon-lg relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-accent-neon/5 to-secondary-neon/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="relative z-10">
                                <div class="w-24 h-24 bg-gradient-to-br from-accent-neon to-secondary-neon rounded-3xl flex items-center justify-center mb-10 group-hover:scale-110 transition-transform duration-500 shadow-neon-teal">
                                    <i class="fas fa-mobile-alt text-dark-950 text-4xl"></i>
                                </div>
                                <h3 class="text-3xl font-russo text-white mb-8">{{ __('app.service_mobile_title') }}</h3>
                                <p class="text-gray-300 leading-relaxed text-xl font-lato">{{ __('app.service_mobile_desc') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- E-commerce -->
                    <div class="swiper-slide">
                        <div class="group bg-dark-900/50 backdrop-blur-sm rounded-3xl p-10 border border-secondary-neon/20 hover:border-secondary-neon/50 transition-all duration-500 transform hover:-translate-y-4 hover:shadow-neon-red hover:shadow-neon-lg relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-secondary-neon/5 to-primary-neon/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="relative z-10">
                                <div class="w-24 h-24 bg-gradient-to-br from-secondary-neon to-primary-neon rounded-3xl flex items-center justify-center mb-10 group-hover:scale-110 transition-transform duration-500 shadow-neon-red">
                                    <i class="fas fa-shopping-cart text-dark-950 text-4xl"></i>
                                </div>
                                <h3 class="text-3xl font-russo text-white mb-8">{{ __('app.service_ecommerce_title') }}</h3>
                                <p class="text-gray-300 leading-relaxed text-xl font-lato">{{ __('app.service_ecommerce_desc') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Internet Marketing -->
                    <div class="swiper-slide">
                        <div class="group bg-dark-900/50 backdrop-blur-sm rounded-3xl p-10 border border-primary-neon/20 hover:border-primary-neon/50 transition-all duration-500 transform hover:-translate-y-4 hover:shadow-neon hover:shadow-neon-lg relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-primary-neon/5 to-accent-neon/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="relative z-10">
                                <div class="w-24 h-24 bg-gradient-to-br from-primary-neon to-accent-neon rounded-3xl flex items-center justify-center mb-10 group-hover:scale-110 transition-transform duration-500 shadow-neon">
                                    <i class="fas fa-chart-line text-dark-950 text-4xl"></i>
                                </div>
                                <h3 class="text-3xl font-russo text-white mb-8">{{ __('app.service_marketing_title') }}</h3>
                                <p class="text-gray-300 leading-relaxed text-xl font-lato">{{ __('app.service_marketing_desc') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-24 bg-gradient-to-r from-cyan-900/20 via-purple-900/20 to-pink-900/20 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-cyan-400 to-transparent"></div>
            <div class="absolute bottom-0 right-0 w-full h-px bg-gradient-to-r from-transparent via-purple-500 to-transparent"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
                <div class="group">
                    <div class="text-5xl md:text-6xl font-black mb-4 counter text-cyan-400" data-target="150">0</div>
                    <div class="text-cyan-300 font-medium text-lg">{{ __('app.stats_projects') }}</div>
                </div>
                <div class="group">
                    <div class="text-5xl md:text-6xl font-black mb-4 counter text-purple-400" data-target="80">0</div>
                    <div class="text-purple-300 font-medium text-lg">{{ __('app.stats_clients') }}</div>
                </div>
                <div class="group">
                    <div class="text-5xl md:text-6xl font-black mb-4 counter text-pink-400" data-target="5">0</div>
                    <div class="text-pink-300 font-medium text-lg">{{ __('app.stats_experience') }}</div>
                </div>
                <div class="group">
                    <div class="text-5xl md:text-6xl font-black mb-4 counter text-cyan-400" data-target="12">0</div>
                    <div class="text-cyan-300 font-medium text-lg">{{ __('app.stats_team') }}</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-24 bg-gradient-to-b from-black to-gray-900 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-pink-500 to-transparent"></div>
            <div class="absolute bottom-0 right-0 w-full h-px bg-gradient-to-r from-transparent via-cyan-500 to-transparent"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black mb-6">
                    <span class="bg-gradient-to-r from-cyan-400 to-purple-500 bg-clip-text text-transparent">
                        {{ __('app.portfolio_title') }}
                    </span>
                </h2>
                <p class="text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto font-light">
                    {{ __('app.portfolio_subtitle') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Portfolio Item 1 -->
                <div class="group bg-gray-900/50 backdrop-blur-sm rounded-3xl overflow-hidden border border-gray-800/50 hover:border-cyan-400/50 transition-all duration-500 transform hover:-translate-y-4 hover:shadow-2xl hover:shadow-cyan-500/25">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-64 bg-gradient-to-br from-cyan-400 to-purple-500 flex items-center justify-center">
                            <i class="fas fa-laptop-code text-white text-6xl"></i>
                        </div>
                        <div class="absolute inset-0 bg-black/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                            <a href="#" class="bg-gradient-to-r from-cyan-400 to-purple-500 text-black px-6 py-3 rounded-xl font-bold hover:from-cyan-500 hover:to-purple-600 transition-all duration-300 transform hover:scale-110">
                                {{ __('app.btn_view_project') }}
                            </a>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-black text-white mb-4">E-commerce Platform</h3>
                        <p class="text-gray-300 text-lg">Modern online store with advanced features</p>
                    </div>
                </div>

                <!-- Portfolio Item 2 -->
                <div class="group bg-gray-900/50 backdrop-blur-sm rounded-3xl overflow-hidden border border-gray-800/50 hover:border-purple-400/50 transition-all duration-500 transform hover:-translate-y-4 hover:shadow-2xl hover:shadow-purple-500/25">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-64 bg-gradient-to-br from-green-400 to-cyan-500 flex items-center justify-center">
                            <i class="fas fa-mobile-alt text-white text-6xl"></i>
                        </div>
                        <div class="absolute inset-0 bg-black/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                            <a href="#" class="bg-gradient-to-r from-green-400 to-cyan-500 text-black px-6 py-3 rounded-xl font-bold hover:from-green-500 hover:to-cyan-600 transition-all duration-300 transform hover:scale-110">
                                {{ __('app.btn_view_project') }}
                            </a>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-black text-white mb-4">Mobile App</h3>
                        <p class="text-gray-300 text-lg">iOS and Android application for business</p>
                    </div>
                </div>

                <!-- Portfolio Item 3 -->
                <div class="group bg-gray-900/50 backdrop-blur-sm rounded-3xl overflow-hidden border border-gray-800/50 hover:border-pink-400/50 transition-all duration-500 transform hover:-translate-y-4 hover:shadow-2xl hover:shadow-pink-500/25">
                    <div class="relative overflow-hidden">
                        <div class="w-full h-64 bg-gradient-to-br from-purple-400 to-pink-500 flex items-center justify-center">
                            <i class="fas fa-globe text-white text-6xl"></i>
                        </div>
                        <div class="absolute inset-0 bg-black/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                            <a href="#" class="bg-gradient-to-r from-purple-400 to-pink-500 text-black px-6 py-3 rounded-xl font-bold hover:from-purple-500 hover:to-pink-600 transition-all duration-300 transform hover:scale-110">
                                {{ __('app.btn_view_project') }}
                            </a>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-black text-white mb-4">Corporate Website</h3>
                        <p class="text-gray-300 text-lg">Professional business website with modern design</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-16">
                <a href="#" class="group inline-flex items-center px-8 py-4 border-2 border-cyan-400/50 text-cyan-400 font-bold text-lg rounded-2xl hover:bg-cyan-400 hover:text-black transition-all duration-300 hover:border-cyan-400 hover:shadow-2xl hover:shadow-cyan-400/25">
                    {{ __('app.portfolio_view_all') }}
                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-black relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-cyan-400 to-transparent"></div>
            <div class="absolute bottom-0 right-0 w-full h-px bg-gradient-to-r from-transparent via-purple-500 to-transparent"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black mb-6">
                    <span class="bg-gradient-to-r from-cyan-400 to-purple-500 bg-clip-text text-transparent">
                        {{ __('app.contact_title') }}
                    </span>
                </h2>
                <p class="text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto font-light">
                    {{ __('app.contact_subtitle') }}
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div>
                    <form class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-bold text-cyan-400 mb-3">{{ __('app.contact_name') }}</label>
                                <input type="text" id="name" name="name" required class="w-full px-6 py-4 bg-gray-900/50 border border-gray-800 rounded-2xl focus:ring-2 focus:ring-cyan-400 focus:border-transparent text-white placeholder-gray-500 backdrop-blur-sm transition-all duration-300">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-bold text-cyan-400 mb-3">{{ __('app.contact_email') }}</label>
                                <input type="email" id="email" name="email" required class="w-full px-6 py-4 bg-gray-900/50 border border-gray-800 rounded-2xl focus:ring-2 focus:ring-cyan-400 focus:border-transparent text-white placeholder-gray-500 backdrop-blur-sm transition-all duration-300">
                            </div>
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-bold text-cyan-400 mb-3">{{ __('app.contact_phone') }}</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-6 py-4 bg-gray-900/50 border border-gray-800 rounded-2xl focus:ring-2 focus:ring-cyan-400 focus:border-transparent text-white placeholder-gray-500 backdrop-blur-sm transition-all duration-300">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-bold text-cyan-400 mb-3">{{ __('app.contact_message') }}</label>
                            <textarea id="message" name="message" rows="6" required class="w-full px-6 py-4 bg-gray-900/50 border border-gray-800 rounded-2xl focus:ring-2 focus:ring-cyan-400 focus:border-transparent text-white placeholder-gray-500 backdrop-blur-sm transition-all duration-300 resize-none"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-cyan-400 to-purple-500 text-black font-black py-4 px-6 rounded-2xl hover:from-cyan-500 hover:to-purple-600 transition-all duration-300 shadow-2xl hover:shadow-cyan-500/25 transform hover:-translate-y-1">
                            {{ __('app.contact_send') }}
                        </button>
                    </form>
                </div>

                <div class="space-y-8">
                    <div class="bg-gray-900/50 backdrop-blur-sm rounded-3xl p-10 border border-gray-800/50">
                        <h3 class="text-3xl font-black text-white mb-8">Get in Touch</h3>
                        <div class="space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-14 h-14 bg-gradient-to-br from-cyan-400 to-cyan-600 rounded-2xl flex items-center justify-center">
                                    <i class="fas fa-envelope text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-white text-lg">Email</p>
                                    <p class="text-gray-400">info@meowmatrix.com</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center">
                                    <i class="fas fa-phone text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-white text-lg">Phone</p>
                                    <p class="text-gray-400">+380 50 123 45 67</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-14 h-14 bg-gradient-to-br from-pink-500 to-cyan-400 rounded-2xl flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-white text-lg">Address</p>
                                    <p class="text-gray-400">Київ, Україна</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // Counter Animation
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const inc = target / speed;

        if (count < target) {
            counter.innerText = Math.ceil(count + inc);
            setTimeout(() => animateCounter(counter), 1);
        } else {
            counter.innerText = target;
        }
    };

    // Intersection Observer for counters
    const observerOptions = {
        threshold: 0.5
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                animateCounter(counter);
                observer.unobserve(counter);
            }
        });
    }, observerOptions);

    counters.forEach(counter => {
        observer.observe(counter);
    });

    // Initialize Services Slider
    const servicesSwiper = new Swiper('.services-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
</script>
@endpush
