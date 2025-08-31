@extends('layouts.main.app')

@section('title')
    @if (app()->getLocale() === 'uk')
        Про компанію - MeowMatrix
    @else
        About Company - MeowMatrix
    @endif
@endsection

@section('description')
    @if (app()->getLocale() === 'uk')
        Дізнайтеся більше про MeowMatrix - інноваційну IT-компанію, яка створює власні бізнеси та розвиває спільноту розробників
    @else
        Learn more about MeowMatrix - an innovative IT company that creates its own businesses and develops a developer community
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
                    Про компанію
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-russo text-white mb-6">
                    Історія <span class="text-[#D8FA00]">MeowMatrix</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto font-lato mb-8">
                    Від маленької команди ентузіастів до інноваційної IT-компанії, яка змінює майбутнє технологій
                </p>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in-left">
                    <h2 class="text-4xl font-russo text-white mb-6">Наша місія</h2>
                    <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                        MeowMatrix створює не просто технології - ми створюємо майбутнє. Наша місія полягає в тому, 
                        щоб перетворити ідеї в реальність, розвивати власні бізнеси та будувати спільноту розробників, 
                        яка змінює світ.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-[#D8FA00] rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-lightbulb text-black"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-russo text-white mb-2">Інновації</h3>
                                <p class="text-gray-300">Створюємо технології завтрашнього дня</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-[#229CA1] rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-users text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-russo text-white mb-2">Спільнота</h3>
                                <p class="text-gray-300">Будуємо мережу талановитих розробників</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-[#C53630] rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-rocket text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-russo text-white mb-2">Ріст</h3>
                                <p class="text-gray-300">Розвиваємо власні бізнеси та проекти</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fade-in-right">
                    <div class="bg-gray-800 border border-[#D8FA00] rounded-2xl p-8">
                        <h3 class="text-2xl font-russo text-white mb-6 text-center">Ключові цінності</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-[#D8FA00] rounded-full"></div>
                                <span class="text-gray-300">Якість та надійність у всьому</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-[#229CA1] rounded-full"></div>
                                <span class="text-gray-300">Відкритість та прозорість</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-[#C53630] rounded-full"></div>
                                <span class="text-gray-300">Постійне навчання та розвиток</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-[#D8FA00] rounded-full"></div>
                                <span class="text-gray-300">Соціальна відповідальність</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-[#229CA1] rounded-full"></div>
                                <span class="text-gray-300">Глобальне мислення</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-russo text-gray-800 mb-6">Шлях розвитку</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Від заснування до сьогодення - ключові етапи нашого росту
                </p>
            </div>

            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-[#D8FA00] h-full"></div>

                <!-- Timeline Items -->
                <div class="space-y-16">
                    <!-- 2018 -->
                    <div class="relative flex items-center">
                        <div class="w-8 h-8 bg-[#D8FA00] rounded-full absolute left-1/2 transform -translate-x-1/2 z-10"></div>
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-gray-100 p-6 rounded-2xl">
                                <h3 class="text-2xl font-russo text-gray-800 mb-2">2018</h3>
                                <h4 class="text-xl font-russo text-[#D8FA00] mb-2">Заснування компанії</h4>
                                <p class="text-gray-600">Команда з 3 розробників почала свій шлях у світі IT</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2019 -->
                    <div class="relative flex items-center">
                        <div class="w-8 h-8 bg-[#229CA1] rounded-full absolute left-1/2 transform -translate-x-1/2 z-10"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-gray-100 p-6 rounded-2xl">
                                <h3 class="text-2xl font-russo text-gray-800 mb-2">2019</h3>
                                <h4 class="text-xl font-russo text-[#229CA1] mb-2">Перший власний бізнес</h4>
                                <p class="text-gray-600">Запуск TechMatrix Solutions - корпоративних IT-рішень</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2020 -->
                    <div class="relative flex items-center">
                        <div class="w-8 h-8 bg-[#C53630] rounded-full absolute left-1/2 transform -translate-x-1/2 z-10"></div>
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-gray-100 p-6 rounded-2xl">
                                <h3 class="text-2xl font-russo text-gray-800 mb-2">2020</h3>
                                <h4 class="text-xl font-russo text-[#C53630] mb-2">E-commerce платформа</h4>
                                <p class="text-gray-600">Створення ShopMatrix - інноваційної платформи для e-commerce</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2021 -->
                    <div class="relative flex items-center">
                        <div class="w-8 h-8 bg-[#D8FA00] rounded-full absolute left-1/2 transform -translate-x-1/2 z-10"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-gray-100 p-6 rounded-2xl">
                                <h3 class="text-2xl font-russo text-gray-800 mb-2">2021</h3>
                                <h4 class="text-xl font-russo text-[#D8FA00] mb-2">Мобільні додатки</h4>
                                <p class="text-gray-600">Запуск AppMatrix - розробка мобільних рішень</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2022 -->
                    <div class="relative flex items-center">
                        <div class="w-8 h-8 bg-[#229CA1] rounded-full absolute left-1/2 transform -translate-x-1/2 z-10"></div>
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-gray-100 p-6 rounded-2xl">
                                <h3 class="text-2xl font-russo text-gray-800 mb-2">2022</h3>
                                <h4 class="text-xl font-russo text-[#229CA1] mb-2">Форум розробників</h4>
                                <p class="text-gray-600">Запуск спільноти розробників MeowMatrix Forum</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2023 -->
                    <div class="relative flex items-center">
                        <div class="w-8 h-8 bg-[#C53630] rounded-full absolute left-1/2 transform -translate-x-1/2 z-10"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-gray-100 p-6 rounded-2xl">
                                <h3 class="text-2xl font-russo text-gray-800 mb-2">2023</h3>
                                <h4 class="text-xl font-russo text-[#C53630] mb-2">AI та хмарні сервіси</h4>
                                <p class="text-gray-600">Запуск AIMatrix та CloudMatrix</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2024 -->
                    <div class="relative flex items-center">
                        <div class="w-8 h-8 bg-[#D8FA00] rounded-full absolute left-1/2 transform -translate-x-1/2 z-10"></div>
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-gray-100 p-6 rounded-2xl">
                                <h3 class="text-2xl font-russo text-gray-800 mb-2">2024</h4>
                                <h4 class="text-xl font-russo text-[#D8FA00] mb-2">Міжнародна експансія</h4>
                                <p class="text-gray-600">Вихід на міжнародні ринки та глобальне розширення</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-russo text-white mb-6">Наша команда</h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Талановиті спеціалісти, які створюють майбутнє технологій
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- CEO -->
                <div class="bg-gray-800 border-2 border-[#D8FA00] rounded-2xl p-8 text-center hover:border-[#229CA1] transition-all duration-300 hover-lift">
                    <div class="w-24 h-24 bg-[#D8FA00] rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-crown text-3xl text-black"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-2">Олександр Петренко</h3>
                    <p class="text-[#D8FA00] font-russo mb-4">CEO & Founder</p>
                    <p class="text-gray-300 mb-6">10+ років досвіду в IT, експерт з цифрової трансформації</p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="text-[#229CA1] hover:text-[#D8FA00] transition-colors">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-[#229CA1] hover:text-[#D8FA00] transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- CTO -->
                <div class="bg-gray-800 border-2 border-[#229CA1] rounded-2xl p-8 text-center hover:border-[#D8FA00] transition-all duration-300 hover-lift">
                    <div class="w-24 h-24 bg-[#229CA1] rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-microchip text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-2">Марія Коваленко</h3>
                    <p class="text-[#229CA1] font-russo mb-4">CTO</p>
                    <p class="text-gray-300 mb-6">Архітектор рішень, експерт з Vue.js та Laravel</p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="text-[#D8FA00] hover:text-[#229CA1] transition-colors">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-[#D8FA00] hover:text-[#229CA1] transition-colors">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Head of Business -->
                <div class="bg-gray-800 border-2 border-[#C53630] rounded-2xl p-8 text-center hover:border-[#D8FA00] transition-all duration-300 hover-lift">
                    <div class="w-24 h-24 bg-[#C53630] rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-chart-line text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-russo text-white mb-2">Дмитро Сидоренко</h3>
                    <p class="text-[#C53630] font-russo mb-4">Head of Business Development</p>
                    <p class="text-gray-300 mb-6">Стратег з розвитку бізнесу та міжнародних партнерств</p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="text-[#D8FA00] hover:text-[#C53630] transition-colors">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-[#D8FA00] hover:text-[#C53630] transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="py-20 bg-[#D8FA00]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-russo text-black mb-6">Хочете дізнатися більше?</h2>
            <p class="text-xl text-gray-800 mb-8 max-w-2xl mx-auto">
                Зв'яжіться з нами для обговорення співпраці, питань про форум або просто щоб познайомитися
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center px-8 py-4 bg-black text-white font-russo rounded-lg hover:bg-gray-800 transition-all duration-300">
                    <i class="fas fa-envelope mr-3"></i>
                    Зв'язатися з нами
                </a>
                <a href="/forum" class="inline-flex items-center px-8 py-4 border-2 border-black text-black font-russo rounded-lg hover:bg-black hover:text-white transition-all duration-300">
                    <i class="fas fa-users mr-3"></i>
                    Приєднатися до форуму
                </a>
            </div>
        </div>
    </section>
@endsection
