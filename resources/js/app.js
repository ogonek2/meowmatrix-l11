// Bootstrap and jQuery for Laravel compatibility
require('./bootstrap');

// Utility function for optimized animations
function optimizedAnimation(element, animationClass) {
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add(animationClass);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        observer.observe(element);
    } else {
        // Fallback for older browsers
        element.classList.add(animationClass);
    }
}

// Enhanced Animations and Effects

// Parallax Effect
function initParallax() {
    const parallaxElements = document.querySelectorAll('.parallax-bg, .parallax-slow, .parallax-medium, .parallax-fast');
    
    if (parallaxElements.length > 0) {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            
            parallaxElements.forEach(element => {
                if (element.classList.contains('parallax-slow')) {
                    element.style.transform = `translateY(${rate * 0.3}px)`;
                } else if (element.classList.contains('parallax-medium')) {
                    element.style.transform = `translateY(${rate * 0.5}px)`;
                } else if (element.classList.contains('parallax-fast')) {
                    element.style.transform = `translateY(${rate * 0.7}px)`;
                } else {
                    element.style.transform = `translateY(${rate * 0.1}px)`;
                }
            });
        });
    }
}

// Scroll-triggered Animations
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed', 'in-view');
            }
        });
    }, observerOptions);
    
    // Observe all animation elements
    const animatedElements = document.querySelectorAll('.text-reveal, .text-slide-left, .text-slide-right, .fade-in-up, .fade-in-left, .fade-in-right, .fade-in-scale, .scroll-fade');
    animatedElements.forEach(el => observer.observe(el));
}

// Staggered Animations
function initStaggeredAnimations() {
    const staggeredContainers = document.querySelectorAll('.stagger-container');
    
    staggeredContainers.forEach(container => {
        const items = container.querySelectorAll('.stagger-item');
        items.forEach((item, index) => {
            item.style.transitionDelay = `${index * 0.1}s`;
        });
    });
}

// Enhanced Hover Effects
function initHoverEffects() {
    // Add hover effects to cards
    const cards = document.querySelectorAll('.hover-lift, .hover-scale, .hover-rotate');
    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transition = 'transform 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
        });
    });
    
    // Add glow effects to buttons
    const glowButtons = document.querySelectorAll('.btn-glow');
    glowButtons.forEach(button => {
        button.addEventListener('mouseenter', () => {
            button.style.boxShadow = '0 0 20px rgba(216, 250, 0, 0.4)';
        });
        
        button.addEventListener('mouseleave', () => {
            button.style.boxShadow = '';
        });
    });
}

// Smooth Scrolling for Navigation
function initSmoothScrolling() {
    const navLinks = document.querySelectorAll('a[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 80; // Account for header height
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Enhanced Service Switcher with Animations
function initEnhancedServiceSwitcher() {
    const serviceButtons = document.querySelectorAll('.service-btn');
    const servicePanels = document.querySelectorAll('.service-panel');
    
    if (serviceButtons.length > 0 && servicePanels.length > 0) {
        serviceButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetService = button.getAttribute('data-service');
                
                // Remove active class from all buttons
                serviceButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                
                // Hide all panels with fade out
                servicePanels.forEach(panel => {
                    panel.style.opacity = '0';
                    panel.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        panel.classList.add('hidden');
                    }, 300);
                });
                
                // Show target panel with fade in
                setTimeout(() => {
                    const targetPanel = document.querySelector(`[data-service="${targetService}"]`);
                    if (targetPanel) {
                        targetPanel.classList.remove('hidden');
                        targetPanel.style.opacity = '0';
                        targetPanel.style.transform = 'translateY(20px)';
                        
                        setTimeout(() => {
                            targetPanel.style.opacity = '1';
                            targetPanel.style.transform = 'translateY(0)';
                        }, 50);
                    }
                }, 350);
            });
        });
    }
}

// Enhanced FAQ Accordion
function initEnhancedFAQ() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    if (faqItems.length > 0) {
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');
            const icon = question.querySelector('i');
            
            if (question && answer && icon) {
                question.addEventListener('click', () => {
                    const isOpen = answer.classList.contains('open');
                    
                    // Close all other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            const otherAnswer = otherItem.querySelector('.faq-answer');
                            const otherIcon = otherItem.querySelector('.faq-question i');
                            
                            if (otherAnswer && otherIcon) {
                                otherAnswer.classList.remove('open');
                                otherAnswer.style.maxHeight = '0';
                                otherIcon.style.transform = 'rotate(0deg)';
                            }
                        }
                    });
                    
                    // Toggle current item
                    if (isOpen) {
                        answer.classList.remove('open');
                        answer.style.maxHeight = '0';
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        answer.classList.add('open');
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                        icon.style.transform = 'rotate(45deg)';
                    }
                });
            }
        });
    }
}

// Enhanced Contact Modal
function initEnhancedContactModal() {
    const modal = document.getElementById('contact-modal');
    const openButtons = document.querySelectorAll('#open-contact-modal');
    const closeButton = document.querySelector('.modal-close');
    
    if (modal && openButtons.length > 0 && closeButton) {
        openButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                modal.classList.remove('hidden');
                modal.style.opacity = '0';
                modal.style.transform = 'scale(0.9)';
                
                setTimeout(() => {
                    modal.style.opacity = '1';
                    modal.style.transform = 'scale(1)';
                }, 50);
            });
        });
        
        closeButton.addEventListener('click', () => {
            modal.style.opacity = '0';
            modal.style.transform = 'scale(0.9)';
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        });
        
        // Close modal on outside click
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeButton.click();
            }
        });
    }
}

// Enhanced Stats Counter
function initEnhancedStats() {
    const stats = document.querySelectorAll('.stat-number');
    
    if (stats.length > 0) {
        const animateStats = () => {
            stats.forEach(stat => {
                const target = parseInt(stat.textContent.replace(/\D/g, ''));
                const suffix = stat.textContent.replace(/\d/g, '');
                let current = 0;
                const increment = target / 50;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    stat.textContent = Math.floor(current) + suffix;
                }, 30);
            });
        };
        
        // Trigger animation when stats come into view
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateStats();
                    statsObserver.unobserve(entry.target);
                }
            });
        });
        
        const statsContainer = document.querySelector('.stats-container');
        if (statsContainer) {
            statsObserver.observe(statsContainer);
        } else {
            // If no specific container, observe the first stat
            if (stats[0]) {
                statsObserver.observe(stats[0]);
            }
        }
    }
}

// Enhanced Background Animations
function initBackgroundAnimations() {
    const floatingElements = document.querySelectorAll('.float-element');
    
    floatingElements.forEach((element, index) => {
        element.style.animationDelay = `${index * 0.5}s`;
    });
}

// Enhanced Form Interactions
function initEnhancedForms() {
    const inputs = document.querySelectorAll('input, textarea');
    
    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            if (input.parentElement) {
                input.parentElement.classList.add('focused');
            }
        });
        
        input.addEventListener('blur', () => {
            if (input.parentElement && !input.value) {
                input.parentElement.classList.remove('focused');
            }
        });
        
        // Add floating label effect
        if (input.placeholder) {
            input.addEventListener('input', () => {
                if (input.value) {
                    input.classList.add('has-value');
                } else {
                    input.classList.remove('has-value');
                }
            });
        }
    });
}

// Enhanced Page Load Animations
function initPageLoadAnimations() {
    const heroElements = document.querySelectorAll('.hero-content > *');
    
    if (heroElements.length === 0) {
        // Fallback: animate main hero elements
        const mainHeroElements = document.querySelectorAll('.stagger-item, .text-reveal, .fade-in-up');
        mainHeroElements.forEach((element, index) => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                element.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }, index * 200);
        });
    } else {
        heroElements.forEach((element, index) => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                element.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }, index * 200);
        });
    }
}

// Enhanced Scroll Progress Indicator
function initScrollProgress() {
    const progressBar = document.createElement('div');
    progressBar.className = 'scroll-progress';
    progressBar.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 0%;
        height: 3px;
        background: linear-gradient(90deg, #D8FA00, #229CA1, #C53630);
        z-index: 9999;
        transition: width 0.1s ease;
    `;
    
    document.body.appendChild(progressBar);
    
    window.addEventListener('scroll', () => {
        const scrolled = (window.pageYOffset / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        progressBar.style.width = scrolled + '%';
    });
}

// Enhanced Mouse Trail Effect
function initMouseTrail() {
    const trail = document.createElement('div');
    trail.className = 'mouse-trail';
    trail.style.cssText = `
        position: fixed;
        width: 20px;
        height: 20px;
        background: radial-gradient(circle, rgba(216, 250, 0, 0.6), transparent);
        border-radius: 50%;
        pointer-events: none;
        z-index: 9998;
        transition: all 0.1s ease;
        opacity: 0;
    `;
    
    document.body.appendChild(trail);
    
    let mouseX = 0;
    let mouseY = 0;
    
    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        
        trail.style.opacity = '1';
        trail.style.left = (mouseX - 10) + 'px';
        trail.style.top = (mouseY - 10) + 'px';
    });
    
    document.addEventListener('mouseleave', () => {
        trail.style.opacity = '0';
    });
}

// Enhanced Loading States
function initEnhancedLoading() {
    const loadingElements = document.querySelectorAll('.loading-dots');
    
    loadingElements.forEach(element => {
        element.addEventListener('click', () => {
            element.classList.add('loading');
            setTimeout(() => {
                element.classList.remove('loading');
            }, 2000);
        });
    });
}

// Test Animations Function
function initTestAnimations() {
    const testButton = document.getElementById('test-animations');
    
    if (testButton) {
        testButton.addEventListener('click', () => {
            console.log('Testing animations...');
            
            // Test text reveal animations
            const textElements = document.querySelectorAll('.text-reveal, .fade-in-up, .fade-in-left, .fade-in-right, .fade-in-scale, .scroll-fade');
            console.log('Found animation elements:', textElements.length);
            
            textElements.forEach((el, index) => {
                console.log(`Element ${index}:`, el.tagName, el.className);
                el.classList.add('revealed', 'in-view');
            });
            
            // Test staggered animations
            const staggerItems = document.querySelectorAll('.stagger-item');
            console.log('Found stagger items:', staggerItems.length);
            
            staggerItems.forEach((item, index) => {
                item.style.transitionDelay = `${index * 0.1}s`;
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            });
            
            // Test hover effects
            const hoverElements = document.querySelectorAll('.hover-lift, .hover-scale');
            console.log('Found hover elements:', hoverElements.length);
            
            // Test parallax
            const parallaxElements = document.querySelectorAll('.parallax-bg, .parallax-slow, .parallax-medium, .parallax-fast');
            console.log('Found parallax elements:', parallaxElements.length);
            
            console.log('Animation test completed!');
        });
    }
}

// Initialize all enhanced features
document.addEventListener('DOMContentLoaded', function() {
    console.log('Initializing enhanced features...');
    
    // Initialize existing functionality
    if (typeof initServiceSwitcher === 'function') {
        initServiceSwitcher();
    }
    if (typeof initContactModal === 'function') {
        initContactModal();
    }
    if (typeof initFAQAccordion === 'function') {
        initFAQAccordion();
    }
    
    // Initialize new enhanced features
    initParallax();
    initScrollAnimations();
    initStaggeredAnimations();
    initHoverEffects();
    initSmoothScrolling();
    initEnhancedServiceSwitcher();
    initEnhancedFAQ();
    initEnhancedContactModal();
    initEnhancedStats();
    initBackgroundAnimations();
    initEnhancedForms();
    initPageLoadAnimations();
    initScrollProgress();
    initMouseTrail();
    initEnhancedLoading();
    initTestAnimations(); // Add the new test function here
    
    // Add enhanced transitions to existing elements
    const existingCards = document.querySelectorAll('.tech-block, .tech-block-light, .bg-gray-800, .bg-white');
    existingCards.forEach((card, index) => {
        card.classList.add('hover-lift', 'transition-all-enhanced');
        card.style.transitionDelay = `${index * 0.1}s`;
    });
    
    // Add text reveal animations to headings
    const headings = document.querySelectorAll('h1, h2, h3');
    headings.forEach((heading, index) => {
        heading.classList.add('text-reveal');
        heading.style.transitionDelay = `${index * 0.2}s`;
    });
    
    // Add fade-in animations to sections
    const sections = document.querySelectorAll('section');
    sections.forEach((section, index) => {
        section.classList.add('scroll-fade');
        section.style.transitionDelay = `${index * 0.1}s`;
    });
    
    console.log('Enhanced features initialized successfully!');
    
    // Force initial animation check
    setTimeout(() => {
        const animatedElements = document.querySelectorAll('.text-reveal, .fade-in-up, .fade-in-left, .fade-in-right, .fade-in-scale, .scroll-fade');
        animatedElements.forEach(el => {
            if (el.getBoundingClientRect().top < window.innerHeight) {
                el.classList.add('revealed', 'in-view');
            }
        });
    }, 100);
    
    // Force all animations to be visible after a delay
    setTimeout(() => {
        console.log('Forcing all animations to be visible...');
        const allAnimatedElements = document.querySelectorAll('.text-reveal, .fade-in-up, .fade-in-left, .fade-in-right, .fade-in-scale, .scroll-fade');
        allAnimatedElements.forEach(el => {
            el.classList.add('revealed', 'in-view');
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
        });
        
        const staggerItems = document.querySelectorAll('.stagger-item');
        staggerItems.forEach((item, index) => {
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
        });
        
        console.log('All animations forced visible!');
    }, 2000);
});

// Swiper initialization function
function initializeSwipers() {
    // Services Swiper
    const servicesSwiper = document.querySelector('.services-swiper');
    if (servicesSwiper) {
        new Swiper('.services-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });
    }

    // Portfolio Swiper
    const portfolioSwiper = document.querySelector('.portfolio-swiper');
    if (portfolioSwiper) {
        new Swiper('.portfolio-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    }
}

// Make optimizedAnimation globally available
window.optimizedAnimation = optimizedAnimation;
window.initializeSwipers = initializeSwipers;