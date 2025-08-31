@extends('layouts.main.app')

@section('title')
    @if (app()->getLocale() === 'uk')
        Контакти - MeowMatrix
    @else
        Contact - MeowMatrix
    @endif
@endsection

@section('description')
    @if (app()->getLocale() === 'uk')
        Зв'яжіться з командою MeowMatrix для співпраці, питань про форум або просто щоб познайомитися
    @else
        Contact the MeowMatrix team for collaboration, forum questions or just to get acquainted
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
                    Контакти
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-russo text-white mb-6">
                    Зв'яжіться з <span class="text-[#D8FA00]">MeowMatrix</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto font-lato mb-8">
                    Готові до співпраці, маєте питання про форум або просто хочете познайомитися? 
                    Ми завжди раді новим зв'язкам!
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Contact Form -->
                <div class="fade-in-left">
                    <h2 class="text-3xl font-russo text-white mb-8">Напишіть нам</h2>
                    
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-white font-lato mb-2">Ім'я *</label>
                                <input type="text" required 
                                       class="w-full px-4 py-3 bg-gray-800 border-2 border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-[#D8FA00] transition-all duration-300"
                                       placeholder="Ваше ім'я">
                            </div>
                            <div>
                                <label class="block text-white font-lato mb-2">Email *</label>
                                <input type="email" required 
                                       class="w-full px-4 py-3 bg-gray-800 border-2 border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-[#D8FA00] transition-all duration-300"
                                       placeholder="your@email.com">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-white font-lato mb-2">Тема *</label>
                            <select required 
                                    class="w-full px-4 py-3 bg-gray-800 border-2 border-gray-700 rounded-lg text-white focus:outline-none focus:border-[#D8FA00] transition-all duration-300">
                                <option value="">Оберіть тему</option>
                                <option value="business">Співпраця та бізнес</option>
                                <option value="forum">Питання про форум</option>
                                <option value="partnership">Партнерство</option>
                                <option value="general">Загальне питання</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-white font-lato mb-2">Повідомлення *</label>
                            <textarea required rows="6" 
                                      class="w-full px-4 py-3 bg-gray-800 border-2 border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-[#D8FA00] transition-all duration-300 resize-none"
                                      placeholder="Опишіть ваше питання або пропозицію..."></textarea>
                        </div>
                        
                        <button type="submit" 
                                class="w-full px-8 py-4 bg-[#D8FA00] text-black font-russo rounded-lg hover:bg-white transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-paper-plane mr-3"></i>
                            Надіслати повідомлення
                        </button>
                    </form>
                </div>

                <!-- Contact Details -->
                <div class="fade-in-right">
                    <h2 class="text-3xl font-russo text-white mb-8">Контактна інформація</h2>
                    
                    <div class="space-y-8">
                        <!-- Office -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-[#D8FA00] rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-building text-black"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-russo text-white mb-2">Офіс</h3>
                                <p class="text-gray-300 mb-1">вул. Хрещатик, 1</p>
                                <p class="text-gray-300 mb-1">Київ, 01001, Україна</p>
                                <p class="text-gray-300">Бізнес-центр "Matrix Tower"</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-[#229CA1] rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-russo text-white mb-2">Телефон</h3>
                                <p class="text-gray-300 mb-1">+380 44 123 45 67</p>
                                <p class="text-gray-300">+380 50 987 65 43</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-[#C53630] rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-russo text-white mb-2">Email</h3>
                                <p class="text-gray-300 mb-1">info@meowmatrix.com</p>
                                <p class="text-gray-300">support@meowmatrix.com</p>
                            </div>
                        </div>

                        <!-- Working Hours -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-[#D8FA00] rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-black"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-russo text-white mb-2">Робочі години</h3>
                                <p class="text-gray-300 mb-1">Пн-Пт: 9:00 - 18:00</p>
                                <p class="text-gray-300">Сб: 10:00 - 16:00</p>
                                <p class="text-gray-300">Нд: Вихідний</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-12">
                        <h3 class="text-2xl font-russo text-white mb-6">Слідкуйте за нами</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-[#D8FA00] rounded-lg flex items-center justify-center text-black hover:bg-white transition-all duration-300">
                                <i class="fab fa-linkedin text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-[#229CA1] rounded-lg flex items-center justify-center text-white hover:bg-[#D8FA00] hover:text-black transition-all duration-300">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-[#C53630] rounded-lg flex items-center justify-center text-white hover:bg-[#D8FA00] hover:text-black transition-all duration-300">
                                <i class="fab fa-telegram text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-[#D8FA00] rounded-lg flex items-center justify-center text-black hover:bg-white transition-all duration-300">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-russo text-gray-800 mb-6">Де нас знайти</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Наш офіс знаходиться в центрі Києва, в сучасному бізнес-центрі
                </p>
            </div>

            <!-- Interactive Map Placeholder -->
            <div class="bg-gray-200 border-2 border-[#D8FA00] rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-[#D8FA00] rounded-full mx-auto mb-6 flex items-center justify-center">
                    <i class="fas fa-map-marker-alt text-2xl text-black"></i>
                </div>
                <h3 class="text-2xl font-russo text-gray-800 mb-4">Інтерактивна карта</h3>
                <p class="text-gray-600 mb-6">
                    Тут буде вбудована Google Maps або інша карта з позначкою нашого офісу
                </p>
                <a href="https://maps.google.com" target="_blank" 
                   class="inline-flex items-center px-6 py-3 bg-[#D8FA00] text-black font-russo rounded-lg hover:bg-white transition-all duration-300">
                    <i class="fas fa-external-link-alt mr-2"></i>
                    Відкрити в Google Maps
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-russo text-white mb-6">Часті питання</h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Відповіді на найпопулярніші питання про MeowMatrix
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-gray-800 border border-gray-700 rounded-2xl p-6">
                    <button class="w-full text-left flex items-center justify-between text-white hover:text-[#D8FA00] transition-colors">
                        <h3 class="text-xl font-russo">Як приєднатися до форуму розробників?</h3>
                        <i class="fas fa-chevron-down text-[#D8FA00]"></i>
                    </button>
                    <div class="mt-4 text-gray-300">
                        <p>Просто перейдіть на <a href="/forum" class="text-[#D8FA00] hover:text-white">сторінку форуму</a> та зареєструйтеся. Це безкоштовно та займає всього кілька хвилин!</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-gray-800 border border-gray-700 rounded-2xl p-6">
                    <button class="w-full text-left flex items-center justify-between text-white hover:text-[#D8FA00] transition-colors">
                        <h3 class="text-xl font-russo">Чи можна співпрацювати з MeowMatrix?</h3>
                        <i class="fas fa-chevron-down text-[#D8FA00]"></i>
                    </button>
                    <div class="mt-4 text-gray-300">
                        <p>Так! Ми завжди відкриті до нових партнерств та співпраці. Напишіть нам через форму зверху або на email.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-gray-800 border border-gray-700 rounded-2xl p-6">
                    <button class="w-full text-left flex items-center justify-between text-white hover:text-[#D8FA00] transition-colors">
                        <h3 class="text-xl font-russo">Чи проводяться у вас заходи для розробників?</h3>
                        <i class="fas fa-chevron-down text-[#D8FA00]"></i>
                    </button>
                    <div class="mt-4 text-gray-300">
                        <p>Так, ми регулярно проводимо meetup'и, воркшопи та конференції. Слідкуйте за нашими соціальними мережами для оновлень!</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-gray-800 border border-gray-700 rounded-2xl p-6">
                    <button class="w-full text-left flex items-center justify-between text-white hover:text-[#D8FA00] transition-colors">
                        <h3 class="text-xl font-russo">Які технології ви використовуєте?</h3>
                        <i class="fas fa-chevron-down text-[#D8FA00]"></i>
                    </button>
                    <div class="mt-4 text-gray-300">
                        <p>Ми працюємо з Vue.js, Laravel, React, Node.js та багатьма іншими сучасними технологіями. Детальніше можна дізнатися на головній сторінці.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="py-20 bg-[#D8FA00]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-russo text-black mb-6">Готові почати співпрацю?</h2>
            <p class="text-xl text-gray-800 mb-8 max-w-2xl mx-auto">
                Зв'яжіться з нами зараз та обговоріть ваші ідеї та проекти
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact-form" class="inline-flex items-center px-8 py-4 bg-black text-white font-russo rounded-lg hover:bg-gray-800 transition-all duration-300">
                    <i class="fas fa-rocket mr-3"></i>
                    Почати проєкт
                </a>
                <a href="/forum" class="inline-flex items-center px-8 py-4 border-2 border-black text-black font-russo rounded-lg hover:bg-black hover:text-white transition-all duration-300">
                    <i class="fas fa-users mr-3"></i>
                    Приєднатися до форуму
                </a>
            </div>
        </div>
    </section>
@endsection
