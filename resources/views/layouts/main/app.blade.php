<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'MeowMatrix - Web Development & Internet Marketing')</title>
    <meta name="description" content="@yield('description', 'Professional web development, mobile apps and internet marketing for your business')">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    @stack('styles')
</head>
<body class="font-lato antialiased bg-dark-950 text-white overflow-x-hidden">
    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 z-50 flex items-center justify-center bg-dark-950">
        <div class="relative">
            <div class="w-20 h-20 border-2 border-transparent border-t-primary-neon rounded-full animate-spin"></div>
            <div class="absolute inset-0 w-20 h-20 border-2 border-transparent border-t-accent-neon rounded-full animate-spin animation-delay-2000"></div>
        </div>
    </div>

    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-40 bg-gradient-to-r from-dark-950/95 to-dark-900/95 backdrop-blur-xl border-b border-primary-neon/20 transition-all duration-300" id="header">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                        <div class="relative">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary-neon to-accent-neon rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-neon">
                                <span class="text-dark-950 font-russo text-xl">M</span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-br from-primary-neon to-accent-neon rounded-2xl blur-lg opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
                        </div>
                        <span class="text-3xl font-russo bg-gradient-to-r from-primary-neon via-accent-neon to-secondary-neon bg-clip-text text-transparent">
                            MeowMatrix
                        </span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-300 hover:text-primary-neon transition-all duration-300 font-medium relative group">
                        {{ __('app.nav_home') }}
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary-neon to-accent-neon group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#about" class="text-gray-300 hover:text-primary-neon transition-all duration-300 font-medium relative group">
                        {{ __('app.nav_about') }}
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary-neon to-accent-neon group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#services" class="text-gray-300 hover:text-primary-neon transition-all duration-300 font-medium relative group">
                        {{ __('app.nav_services') }}
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary-neon to-accent-neon group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#technologies" class="text-gray-300 hover:text-primary-neon transition-all duration-300 font-medium relative group">
                        {{ __('app.nav_technologies') }}
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary-neon to-accent-neon group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#clients" class="text-gray-300 hover:text-primary-neon transition-all duration-300 font-medium relative group">
                        {{ __('app.nav_clients') }}
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary-neon to-accent-neon group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#contact" class="text-gray-300 hover:text-primary-neon transition-all duration-300 font-medium relative group">
                        {{ __('app.nav_contact') }}
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary-neon to-accent-neon group-hover:w-full transition-all duration-300"></span>
                    </a>
                </nav>

                <!-- Language Switcher & CTA -->
                <div class="flex items-center space-x-6">
                    <!-- Language Switcher -->
                    <div class="flex items-center space-x-1 bg-dark-900/50 rounded-xl p-1 border border-primary-neon/20">
                        <a href="{{ route('language.switch', 'uk') }}" 
                           class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 {{ app()->getLocale() === 'uk' ? 'bg-gradient-to-r from-primary-neon to-accent-neon text-dark-950 shadow-neon' : 'text-gray-400 hover:text-primary-neon' }}">
                            UK
                        </a>
                        <a href="{{ route('language.switch', 'en') }}" 
                           class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 {{ app()->getLocale() === 'en' ? 'bg-gradient-to-r from-primary-neon to-accent-neon text-dark-950 shadow-neon' : 'text-gray-400 hover:text-primary-neon' }}">
                            EN
                        </a>
                    </div>

                    <!-- CTA Button -->
                    <a href="#contact" class="hidden sm:inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-neon to-accent-neon text-dark-950 font-russo text-lg rounded-xl hover:from-secondary-neon hover:to-primary-neon transition-all duration-300 shadow-neon hover:shadow-neon-lg transform hover:-translate-y-1 relative overflow-hidden group">
                        <span class="relative z-10">{{ __('app.btn_get_quote') }}</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-secondary-neon to-primary-neon opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>

                    <!-- Mobile Menu Button -->
                    <button class="lg:hidden p-2 rounded-lg text-gray-400 hover:text-primary-neon hover:bg-dark-900/50 transition-all duration-300 border border-primary-neon/20" id="mobile-menu-button">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="lg:hidden hidden" id="mobile-menu">
            <div class="px-4 pt-4 pb-6 space-y-2 bg-dark-950/95 border-t border-primary-neon/20">
                <a href="{{ route('home') }}" class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-primary-neon hover:bg-dark-900/50 rounded-lg transition-all duration-300 border border-transparent hover:border-primary-neon/20">
                    {{ __('app.nav_home') }}
                </a>
                <a href="#about" class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-primary-neon hover:bg-dark-900/50 rounded-lg transition-all duration-300 border border-transparent hover:border-primary-neon/20">
                    {{ __('app.nav_about') }}
                </a>
                <a href="#services" class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-primary-neon hover:bg-dark-900/50 rounded-lg transition-all duration-300 border border-transparent hover:border-primary-neon/20">
                    {{ __('app.nav_services') }}
                </a>
                <a href="#technologies" class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-primary-neon hover:bg-dark-900/50 rounded-lg transition-all duration-300 border border-transparent hover:border-primary-neon/20">
                    {{ __('app.nav_technologies') }}
                </a>
                <a href="#clients" class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-primary-neon hover:bg-dark-900/50 rounded-lg transition-all duration-300 border border-transparent hover:border-primary-neon/20">
                    {{ __('app.nav_clients') }}
                </a>
                <a href="#contact" class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-primary-neon hover:bg-dark-900/50 rounded-lg transition-all duration-300 border border-transparent hover:border-primary-neon/20">
                    {{ __('app.nav_contact') }}
                </a>
                <div class="pt-4 border-t border-primary-neon/20">
                    <a href="#contact" class="block w-full text-center px-4 py-3 bg-gradient-to-r from-primary-neon to-accent-neon text-dark-950 font-russo rounded-lg hover:from-secondary-neon hover:to-primary-neon transition-all duration-300">
                        {{ __('app.btn_get_quote') }}
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-20">
                @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark-900/50 border-t border-primary-neon/20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary-neon to-accent-neon rounded-2xl flex items-center justify-center">
                            <span class="text-dark-950 font-russo text-xl">M</span>
                        </div>
                        <span class="text-3xl font-russo bg-gradient-to-r from-primary-neon to-accent-neon bg-clip-text text-transparent">
                            MeowMatrix
                        </span>
                    </div>
                    <p class="text-gray-400 mb-8 max-w-md leading-relaxed">
                        {{ __('app.about_text') }}
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-dark-800 rounded-xl flex items-center justify-center text-gray-400 hover:text-primary-neon hover:bg-dark-700 transition-all duration-300 border border-dark-700 hover:border-primary-neon">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-dark-800 rounded-xl flex items-center justify-center text-gray-400 hover:text-primary-neon hover:bg-dark-700 transition-all duration-300 border border-dark-700 hover:border-primary-neon">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-dark-800 rounded-xl flex items-center justify-center text-gray-400 hover:text-primary-neon hover:bg-dark-700 transition-all duration-300 border border-dark-700 hover:border-primary-neon">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-dark-800 rounded-xl flex items-center justify-center text-gray-400 hover:text-primary-neon hover:bg-dark-700 transition-all duration-300 border border-dark-700 hover:border-primary-neon">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-xl font-russo text-white mb-6">{{ __('app.footer_services') }}</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="#" class="hover:text-primary-neon transition-colors duration-300">{{ __('app.service_webdev_title') }}</a></li>
                        <li><a href="#" class="hover:text-primary-neon transition-colors duration-300">{{ __('app.service_mobile_title') }}</a></li>
                        <li><a href="#" class="hover:text-primary-neon transition-colors duration-300">{{ __('app.service_ecommerce_title') }}</a></li>
                        <li><a href="#" class="hover:text-primary-neon transition-colors duration-300">{{ __('app.service_marketing_title') }}</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-xl font-russo text-white mb-6">{{ __('app.nav_contact') }}</h3>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-primary-neon to-accent-neon rounded-lg flex items-center justify-center">
                                <i class="fas fa-envelope text-dark-950 text-sm"></i>
                            </div>
                            <span>info@meowmatrix.com</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-accent-neon to-secondary-neon rounded-lg flex items-center justify-center">
                                <i class="fas fa-phone text-dark-950 text-sm"></i>
                            </div>
                            <span>+380 50 123 45 67</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-secondary-neon to-primary-neon rounded-lg flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-dark-950 text-sm"></i>
                            </div>
                            <span>Київ, Україна</span>
                        </li>
                    </ul>
            </div>
        </div>

            <div class="border-t border-primary-neon/20 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm">{{ __('app.footer_copyright') }}</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-500 hover:text-primary-neon text-sm transition-colors duration-300">{{ __('app.footer_privacy') }}</a>
                    <a href="#" class="text-gray-500 hover:text-primary-neon text-sm transition-colors duration-300">{{ __('app.footer_terms') }}</a>
            </div>
        </div>
    </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 w-12 h-12 bg-gradient-to-r from-primary-neon to-accent-neon text-dark-950 rounded-full shadow-neon hover:shadow-neon-lg transition-all duration-300 opacity-0 invisible transform translate-y-4 hover:scale-110">
        <i class="fas fa-arrow-up text-lg"></i>
    </button>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script>
        // Preloader
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 300);
        });

        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // Header Scroll Effect
        const header = document.getElementById('header');
        let lastScrollTop = 0;
        
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 100) {
                header.classList.add('bg-dark-950/95');
            } else {
                header.classList.remove('bg-dark-950/95');
            }
            
            if (scrollTop > lastScrollTop && scrollTop > 200) {
                header.style.transform = 'translateY(-100%)';
            } else {
                header.style.transform = 'translateY(0)';
            }
            
            lastScrollTop = scrollTop;
        });

        // Back to Top Button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible', 'translate-y-4');
                backToTopButton.classList.add('opacity-100', 'visible', 'translate-y-0');
            } else {
                backToTopButton.classList.add('opacity-0', 'invisible', 'translate-y-4');
                backToTopButton.classList.remove('opacity-100', 'visible', 'translate-y-0');
            }
        });
        
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth Scrolling for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerHeight = document.getElementById('header').offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight - 20;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
