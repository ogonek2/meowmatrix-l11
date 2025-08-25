<nav class="fixed top-0 left-0 w-full z-50 bg-gradient-to-r from-dark-950/95 to-dark-900/95 backdrop-blur-lg border-b border-primary-neon/20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <div class="meowmatrix-logo text-2xl cursor-pointer hover:scale-110 transition-transform duration-300">
                    MEOWMATRIX
                </div>
            </div>
            
            <!-- Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="#services" class="nav-link text-white hover:text-primary-neon transition-all duration-300 hover:scale-105">Послуги</a>
                <a href="#about" class="nav-link text-white hover:text-primary-neon transition-all duration-300 hover:scale-105">Про нас</a>
                <a href="#clients" class="nav-link text-white hover:text-primary-neon transition-all duration-300 hover:scale-105">Клієнти</a>
                <a href="#blog" class="nav-link text-white hover:text-primary-neon transition-all duration-300 hover:scale-105">Блог</a>
                <a href="#contact" class="nav-link text-white hover:text-primary-neon transition-all duration-300 hover:scale-105">Контакти</a>
            </div>
            
            <!-- CTA Button -->
            <div class="hidden lg:flex items-center space-x-4">
                <button class="px-6 py-3 bg-primary-neon text-black font-russo focus-frame hover:bg-accent-neon transition-all duration-300 transform hover:scale-105">
                    <div class="digital-ribbon mr-2">💼</div>
                    Обговорити проєкт
                </button>
                
                <!-- Social Media -->
                <div class="relative group">
                    <button class="p-3 text-primary-neon hover:text-accent-neon transition-colors duration-300">
                        <i class="fab fa-instagram text-xl"></i>
                    </button>
                    <div class="absolute right-0 top-full bg-dark-800 border border-primary-neon/30 rounded-lg p-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        <div class="flex space-x-4">
                            <a href="#" class="text-white hover:text-primary-neon transition-colors duration-300"><i class="fab fa-facebook text-xl"></i></a>
                            <a href="#" class="text-white hover:text-primary-neon transition-colors duration-300"><i class="fab fa-instagram text-xl"></i></a>
                            <a href="#" class="text-white hover:text-primary-neon transition-colors duration-300"><i class="fab fa-telegram text-xl"></i></a>
                            <a href="#" class="text-white hover:text-primary-neon transition-colors duration-300"><i class="fab fa-tiktok text-xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button class="mobile-menu-btn p-2 text-white hover:text-primary-neon transition-colors duration-300">
                    <div class="w-6 h-0.5 bg-current mb-1.5 transition-all duration-300"></div>
                    <div class="w-6 h-0.5 bg-current mb-1.5 transition-all duration-300"></div>
                    <div class="w-6 h-0.5 bg-current transition-all duration-300"></div>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="mobile-menu hidden lg:hidden bg-dark-800 border-t border-primary-neon/20">
            <div class="py-4 space-y-4">
                <a href="#services" class="block text-white hover:text-primary-neon transition-colors duration-300 py-2">Послуги</a>
                <a href="#about" class="block text-white hover:text-primary-neon transition-colors duration-300 py-2">Про нас</a>
                <a href="#clients" class="block text-white hover:text-primary-neon transition-colors duration-300 py-2">Клієнти</a>
                <a href="#blog" class="block text-white hover:text-primary-neon transition-colors duration-300 py-2">Блог</a>
                <a href="#contact" class="block text-white hover:text-primary-neon transition-colors duration-300 py-2">Контакти</a>
                <button class="w-full mt-4 px-6 py-3 bg-primary-neon text-black font-russo focus-frame hover:bg-accent-neon transition-all duration-300">
                    <div class="digital-ribbon mr-2">💼</div>
                    Обговорити проєкт
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu Toggle Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    mobileMenuBtn.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
        
        // Animate hamburger to X
        const lines = this.querySelectorAll('div');
        lines.forEach((line, index) => {
            if (index === 0) line.style.transform = mobileMenu.classList.contains('hidden') ? 'none' : 'rotate(45deg) translate(5px, 5px)';
            if (index === 1) line.style.opacity = mobileMenu.classList.contains('hidden') ? '1' : '0';
            if (index === 2) line.style.transform = mobileMenu.classList.contains('hidden') ? 'none' : 'rotate(-45deg) translate(7px, -6px)';
        });
    });
});
</script>
