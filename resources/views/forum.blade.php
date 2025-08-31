@extends('layouts.main.app')

@section('title')
    @if (app()->getLocale() === 'uk')
        Форум розробників - MeowMatrix
    @else
        Developer Forum - MeowMatrix
    @endif
@endsection

@section('description')
    @if (app()->getLocale() === 'uk')
        Приєднуйтесь до спільноти розробників MeowMatrix. Обмінюйтесь досвідом, знаходьте партнерів та розвивайтеся разом з нами
    @else
        Join the MeowMatrix developer community. Share experience, find partners and grow together
    @endif
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="relative py-20 bg-black overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 opacity-10"
                style="background-image: linear-gradient(rgba(216, 250, 0, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(216, 250, 0, 0.1) 1px, transparent 1px); background-size: 50px 50px;">
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <div class="inline-block px-4 py-2 bg-[#D8FA00] border border-[#D8FA00] rounded-full text-black text-sm font-lato mb-6">
                    Форум розробників
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-russo text-white mb-6">
                    Спільнота <span class="text-[#D8FA00]">MeowMatrix</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto font-lato mb-8">
                    Приєднуйтесь до 5000+ розробників з усього світу. Обмінюйтесь досвідом, знаходьте партнерів та розвивайтеся разом з нами
                </p>
                
                <!-- Forum Stats -->
                <div class="flex flex-wrap justify-center gap-8 mb-8">
                    <div class="text-center">
                        <div class="text-3xl font-russo text-[#D8FA00] mb-2">5000+</div>
                        <div class="text-gray-400">Учасників</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-russo text-[#229CA1] mb-2">1500+</div>
                        <div class="text-gray-400">Тем</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-russo text-[#C53630] mb-2">500+</div>
                        <div class="text-gray-400">Відповідей</div>
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="max-w-2xl mx-auto">
                    <div class="relative">
                        <input type="text" placeholder="Пошук по форуму..." 
                               class="w-full px-6 py-4 bg-gray-800 border-2 border-[#D8FA00] rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-[#229CA1] transition-all duration-300">
                        <button class="absolute right-2 top-2 px-6 py-2 bg-[#D8FA00] text-black font-russo rounded-lg hover:bg-white transition-all duration-300">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Forum Categories -->
    <section class="py-16 bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-russo text-white text-center mb-12">Категорії форуму</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Frontend Development -->
                <div class="bg-gray-800 border-2 border-[#D8FA00] rounded-2xl p-8 hover:border-[#229CA1] transition-all duration-300 hover-lift">
                    <div class="w-16 h-16 bg-[#D8FA00] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-code text-2xl text-black"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-4">Frontend Development</h3>
                    <p class="text-gray-300 mb-6">Vue.js, React, Angular, HTML/CSS, JavaScript</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[#D8FA00]">1250 тем</span>
                        <a href="#" class="text-[#229CA1] hover:text-[#D8FA00] transition-colors">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Backend Development -->
                <div class="bg-gray-800 border-2 border-[#229CA1] rounded-2xl p-8 hover:border-[#D8FA00] transition-all duration-300 hover-lift">
                    <div class="w-16 h-16 bg-[#229CA1] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-server text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-4">Backend Development</h3>
                    <p class="text-gray-300 mb-6">Laravel, PHP, Node.js, Python, Databases</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[#229CA1]">980 тем</span>
                        <a href="#" class="text-[#D8FA00] hover:text-[#229CA1] transition-colors">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Mobile Development -->
                <div class="bg-gray-800 border-2 border-[#C53630] rounded-2xl p-8 hover:border-[#D8FA00] transition-all duration-300 hover-lift">
                    <div class="w-16 h-16 bg-[#C53630] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-4">Mobile Development</h3>
                    <p class="text-gray-300 mb-6">React Native, Flutter, iOS, Android</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[#C53630]">750 тем</span>
                        <a href="#" class="text-[#D8FA00] hover:text-[#C53630] transition-colors">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- AI & Machine Learning -->
                <div class="bg-gray-800 border-2 border-[#D8FA00] rounded-2xl p-8 hover:border-[#229CA1] transition-all duration-300 hover-lift">
                    <div class="w-16 h-16 bg-[#D8FA00] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-brain text-2xl text-black"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-4">AI & Machine Learning</h3>
                    <p class="text-gray-300 mb-6">Python, TensorFlow, PyTorch, NLP</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[#D8FA00]">420 тем</span>
                        <a href="#" class="text-[#229CA1] hover:text-[#D8FA00] transition-colors">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- DevOps & Cloud -->
                <div class="bg-gray-800 border-2 border-[#229CA1] rounded-2xl p-8 hover:border-[#D8FA00] transition-all duration-300 hover-lift">
                    <div class="w-16 h-16 bg-[#229CA1] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-cloud text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-4">DevOps & Cloud</h3>
                    <p class="text-gray-300 mb-6">Docker, Kubernetes, AWS, Azure</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[#229CA1]">380 тем</span>
                        <a href="#" class="text-[#D8FA00] hover:text-[#229CA1] transition-colors">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Career & Networking -->
                <div class="bg-gray-800 border-2 border-[#C53630] rounded-2xl p-8 hover:border-[#D8FA00] transition-all duration-300 hover-lift">
                    <div class="w-16 h-16 bg-[#C53630] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-handshake text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-4">Career & Networking</h3>
                    <p class="text-gray-300 mb-6">Вакансії, проекти, співпраця</p>
                    <div class="flex items-center justify-between">
                        <span class="text-[#C53630]">290 тем</span>
                        <a href="#" class="text-[#D8FA00] hover:text-[#C53630] transition-colors">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Topics -->
    <section class="py-16 bg-gray-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-12">
                <h2 class="text-3xl font-russo text-white">Останні теми</h2>
                <a href="#" class="text-[#D8FA00] hover:text-white transition-colors">
                    Переглянути всі <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="space-y-6">
                <!-- Topic 1 -->
                <div class="bg-gray-900 border border-gray-700 rounded-2xl p-6 hover:border-[#D8FA00] transition-all duration-300">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center space-x-4 mb-3">
                                <span class="px-3 py-1 bg-[#D8FA00] text-black text-xs font-russo rounded-full">Frontend</span>
                                <span class="text-gray-400 text-sm">2 години тому</span>
                            </div>
                            <h3 class="text-xl font-russo text-white mb-2 hover:text-[#D8FA00] transition-colors cursor-pointer">
                                Vue.js 3 Composition API - найкращі практики
                            </h3>
                            <p class="text-gray-300 mb-4">
                                Ділюся досвідом використання Composition API у великих проектах. Які патерни використовуєте ви?
                            </p>
                            <div class="flex items-center space-x-6 text-sm text-gray-400">
                                <span><i class="fas fa-user mr-2"></i>Alex Developer</span>
                                <span><i class="fas fa-comments mr-2"></i>15 відповідей</span>
                                <span><i class="fas fa-eye mr-2"></i>127 переглядів</span>
                                <span><i class="fas fa-heart mr-2"></i>8 лайків</span>
                            </div>
                        </div>
                        <div class="ml-6">
                            <div class="w-12 h-12 bg-[#D8FA00] rounded-full flex items-center justify-center">
                                <i class="fas fa-code text-black"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Topic 2 -->
                <div class="bg-gray-900 border border-gray-700 rounded-2xl p-6 hover:border-[#229CA1] transition-all duration-300">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center space-x-4 mb-3">
                                <span class="px-3 py-1 bg-[#229CA1] text-white text-xs font-russo rounded-full">Backend</span>
                                <span class="text-gray-400 text-sm">5 годин тому</span>
                            </div>
                            <h3 class="text-xl font-russo text-white mb-2 hover:text-[#229CA1] transition-colors cursor-pointer">
                                Laravel 11 - нові можливості та оптимізації
                            </h3>
                            <p class="text-gray-300 mb-4">
                                Протестував Laravel 11 на production проекті. Швидкість зросла на 30%! Детальний аналіз всередині.
                            </p>
                            <div class="flex items-center space-x-6 text-sm text-gray-400">
                                <span><i class="fas fa-user mr-2"></i>Maria Backend</span>
                                <span><i class="fas fa-comments mr-2"></i>8 відповідей</span>
                                <span><i class="fas fa-eye mr-2"></i>89 переглядів</span>
                                <span><i class="fas fa-heart mr-2"></i>12 лайків</span>
                            </div>
                        </div>
                        <div class="ml-6">
                            <div class="w-12 h-12 bg-[#229CA1] rounded-full flex items-center justify-center">
                                <i class="fas fa-server text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Topic 3 -->
                <div class="bg-gray-900 border border-gray-700 rounded-2xl p-6 hover:border-[#C53630] transition-all duration-300">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center space-x-4 mb-3">
                                <span class="px-3 py-1 bg-[#C53630] text-white text-xs font-russo rounded-full">AI/ML</span>
                                <span class="text-gray-400 text-sm">1 день тому</span>
                            </div>
                            <h3 class="text-xl font-russo text-white mb-2 hover:text-[#C53630] transition-colors cursor-pointer">
                                Як штучний інтелект змінює веб-розробку в 2024
                            </h3>
                            <p class="text-gray-300 mb-4">
                                GitHub Copilot, ChatGPT для коду, AI-генератори компонентів. Як ви адаптуєтесь до нових інструментів?
                            </p>
                            <div class="flex items-center space-x-6 text-sm text-gray-400">
                                <span><i class="fas fa-user mr-2"></i>Tech Innovator</span>
                                <span><i class="fas fa-comments mr-2"></i>23 відповіді</span>
                                <span><i class="fas fa-eye mr-2"></i>234 перегляди</span>
                                <span><i class="fas fa-heart mr-2"></i>18 лайків</span>
                            </div>
                        </div>
                        <div class="ml-6">
                            <div class="w-12 h-12 bg-[#C53630] rounded-full flex items-center justify-center">
                                <i class="fas fa-brain text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Community -->
    <section class="py-20 bg-[#D8FA00]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-russo text-black mb-6">Готові приєднатися до спільноти?</h2>
            <p class="text-xl text-gray-800 mb-8 max-w-2xl mx-auto">
                Створюйте теми, діліться досвідом, знаходьте партнерів та розвивайтеся разом з нами
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="inline-flex items-center px-8 py-4 bg-black text-white font-russo rounded-lg hover:bg-gray-800 transition-all duration-300">
                    <i class="fas fa-user-plus mr-3"></i>
                    Зареєструватися
                </a>
                <a href="#" class="inline-flex items-center px-8 py-4 border-2 border-black text-black font-russo rounded-lg hover:bg-black hover:text-white transition-all duration-300">
                    <i class="fas fa-info-circle mr-3"></i>
                    Дізнатися більше
                </a>
            </div>
        </div>
    </section>
@endsection
