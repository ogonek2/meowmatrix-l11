/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

// Bootstrap and jQuery for Laravel compatibility
__webpack_require__(/*! ./bootstrap */ "./resources/js/bootstrap.js");

// Utility function for optimized animations
function optimizedAnimation(element, animationClass) {
  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add(animationClass);
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1
    });
    observer.observe(element);
  } else {
    // Fallback for older browsers
    element.classList.add(animationClass);
  }
}

// Enhanced Animations and Effects

// Parallax Effect
function initParallax() {
  var parallaxElements = document.querySelectorAll('.parallax-bg, .parallax-slow, .parallax-medium, .parallax-fast');
  if (parallaxElements.length > 0) {
    window.addEventListener('scroll', function () {
      var scrolled = window.pageYOffset;
      var rate = scrolled * -0.5;
      parallaxElements.forEach(function (element) {
        if (element.classList.contains('parallax-slow')) {
          element.style.transform = "translateY(".concat(rate * 0.3, "px)");
        } else if (element.classList.contains('parallax-medium')) {
          element.style.transform = "translateY(".concat(rate * 0.5, "px)");
        } else if (element.classList.contains('parallax-fast')) {
          element.style.transform = "translateY(".concat(rate * 0.7, "px)");
        } else {
          element.style.transform = "translateY(".concat(rate * 0.1, "px)");
        }
      });
    });
  }
}

// Scroll-triggered Animations
function initScrollAnimations() {
  var observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed', 'in-view');
      }
    });
  }, observerOptions);

  // Observe all animation elements
  var animatedElements = document.querySelectorAll('.text-reveal, .text-slide-left, .text-slide-right, .fade-in-up, .fade-in-left, .fade-in-right, .fade-in-scale, .scroll-fade');
  animatedElements.forEach(function (el) {
    return observer.observe(el);
  });
}

// Staggered Animations
function initStaggeredAnimations() {
  var staggeredContainers = document.querySelectorAll('.stagger-container');
  staggeredContainers.forEach(function (container) {
    var items = container.querySelectorAll('.stagger-item');
    items.forEach(function (item, index) {
      item.style.transitionDelay = "".concat(index * 0.1, "s");
    });
  });
}

// Enhanced Hover Effects
function initHoverEffects() {
  // Add hover effects to cards
  var cards = document.querySelectorAll('.hover-lift, .hover-scale, .hover-rotate');
  cards.forEach(function (card) {
    card.addEventListener('mouseenter', function () {
      card.style.transition = 'transform 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
    });
  });

  // Add glow effects to buttons
  var glowButtons = document.querySelectorAll('.btn-glow');
  glowButtons.forEach(function (button) {
    button.addEventListener('mouseenter', function () {
      button.style.boxShadow = '0 0 20px rgba(216, 250, 0, 0.4)';
    });
    button.addEventListener('mouseleave', function () {
      button.style.boxShadow = '';
    });
  });
}

// Smooth Scrolling for Navigation
function initSmoothScrolling() {
  var navLinks = document.querySelectorAll('a[href^="#"]');
  navLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      var targetId = link.getAttribute('href');
      var targetElement = document.querySelector(targetId);
      if (targetElement) {
        var offsetTop = targetElement.offsetTop - 80; // Account for header height

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
  var serviceButtons = document.querySelectorAll('.service-btn');
  var servicePanels = document.querySelectorAll('.service-panel');
  if (serviceButtons.length > 0 && servicePanels.length > 0) {
    serviceButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        var targetService = button.getAttribute('data-service');

        // Remove active class from all buttons
        serviceButtons.forEach(function (btn) {
          return btn.classList.remove('active');
        });
        button.classList.add('active');

        // Hide all panels with fade out
        servicePanels.forEach(function (panel) {
          panel.style.opacity = '0';
          panel.style.transform = 'translateY(20px)';
          setTimeout(function () {
            panel.classList.add('hidden');
          }, 300);
        });

        // Show target panel with fade in
        setTimeout(function () {
          var targetPanel = document.querySelector("[data-service=\"".concat(targetService, "\"]"));
          if (targetPanel) {
            targetPanel.classList.remove('hidden');
            targetPanel.style.opacity = '0';
            targetPanel.style.transform = 'translateY(20px)';
            setTimeout(function () {
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
  var faqItems = document.querySelectorAll('.faq-item');
  if (faqItems.length > 0) {
    faqItems.forEach(function (item) {
      var question = item.querySelector('.faq-question');
      var answer = item.querySelector('.faq-answer');
      var icon = question.querySelector('i');
      if (question && answer && icon) {
        question.addEventListener('click', function () {
          var isOpen = answer.classList.contains('open');

          // Close all other items
          faqItems.forEach(function (otherItem) {
            if (otherItem !== item) {
              var otherAnswer = otherItem.querySelector('.faq-answer');
              var otherIcon = otherItem.querySelector('.faq-question i');
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
  var modal = document.getElementById('contact-modal');
  var openButtons = document.querySelectorAll('#open-contact-modal');
  var closeButton = document.querySelector('.modal-close');
  if (modal && openButtons.length > 0 && closeButton) {
    openButtons.forEach(function (button) {
      button.addEventListener('click', function (e) {
        e.preventDefault();
        modal.classList.remove('hidden');
        modal.style.opacity = '0';
        modal.style.transform = 'scale(0.9)';
        setTimeout(function () {
          modal.style.opacity = '1';
          modal.style.transform = 'scale(1)';
        }, 50);
      });
    });
    closeButton.addEventListener('click', function () {
      modal.style.opacity = '0';
      modal.style.transform = 'scale(0.9)';
      setTimeout(function () {
        modal.classList.add('hidden');
      }, 300);
    });

    // Close modal on outside click
    modal.addEventListener('click', function (e) {
      if (e.target === modal) {
        closeButton.click();
      }
    });
  }
}

// Enhanced Stats Counter
function initEnhancedStats() {
  var stats = document.querySelectorAll('.stat-number');
  if (stats.length > 0) {
    var animateStats = function animateStats() {
      stats.forEach(function (stat) {
        var target = parseInt(stat.textContent.replace(/\D/g, ''));
        var suffix = stat.textContent.replace(/\d/g, '');
        var current = 0;
        var increment = target / 50;
        var timer = setInterval(function () {
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
    var statsObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateStats();
          statsObserver.unobserve(entry.target);
        }
      });
    });
    var statsContainer = document.querySelector('.stats-container');
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
  var floatingElements = document.querySelectorAll('.float-element');
  floatingElements.forEach(function (element, index) {
    element.style.animationDelay = "".concat(index * 0.5, "s");
  });
}

// Enhanced Form Interactions
function initEnhancedForms() {
  var inputs = document.querySelectorAll('input, textarea');
  inputs.forEach(function (input) {
    input.addEventListener('focus', function () {
      if (input.parentElement) {
        input.parentElement.classList.add('focused');
      }
    });
    input.addEventListener('blur', function () {
      if (input.parentElement && !input.value) {
        input.parentElement.classList.remove('focused');
      }
    });

    // Add floating label effect
    if (input.placeholder) {
      input.addEventListener('input', function () {
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
  var heroElements = document.querySelectorAll('.hero-content > *');
  if (heroElements.length === 0) {
    // Fallback: animate main hero elements
    var mainHeroElements = document.querySelectorAll('.stagger-item, .text-reveal, .fade-in-up');
    mainHeroElements.forEach(function (element, index) {
      element.style.opacity = '0';
      element.style.transform = 'translateY(30px)';
      setTimeout(function () {
        element.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
        element.style.opacity = '1';
        element.style.transform = 'translateY(0)';
      }, index * 200);
    });
  } else {
    heroElements.forEach(function (element, index) {
      element.style.opacity = '0';
      element.style.transform = 'translateY(30px)';
      setTimeout(function () {
        element.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
        element.style.opacity = '1';
        element.style.transform = 'translateY(0)';
      }, index * 200);
    });
  }
}

// Enhanced Scroll Progress Indicator
function initScrollProgress() {
  var progressBar = document.createElement('div');
  progressBar.className = 'scroll-progress';
  progressBar.style.cssText = "\n        position: fixed;\n        top: 0;\n        left: 0;\n        width: 0%;\n        height: 3px;\n        background: linear-gradient(90deg, #D8FA00, #229CA1, #C53630);\n        z-index: 9999;\n        transition: width 0.1s ease;\n    ";
  document.body.appendChild(progressBar);
  window.addEventListener('scroll', function () {
    var scrolled = window.pageYOffset / (document.documentElement.scrollHeight - window.innerHeight) * 100;
    progressBar.style.width = scrolled + '%';
  });
}

// Enhanced Mouse Trail Effect
function initMouseTrail() {
  var trail = document.createElement('div');
  trail.className = 'mouse-trail';
  trail.style.cssText = "\n        position: fixed;\n        width: 20px;\n        height: 20px;\n        background: radial-gradient(circle, rgba(216, 250, 0, 0.6), transparent);\n        border-radius: 50%;\n        pointer-events: none;\n        z-index: 9998;\n        transition: all 0.1s ease;\n        opacity: 0;\n    ";
  document.body.appendChild(trail);
  var mouseX = 0;
  var mouseY = 0;
  document.addEventListener('mousemove', function (e) {
    mouseX = e.clientX;
    mouseY = e.clientY;
    trail.style.opacity = '1';
    trail.style.left = mouseX - 10 + 'px';
    trail.style.top = mouseY - 10 + 'px';
  });
  document.addEventListener('mouseleave', function () {
    trail.style.opacity = '0';
  });
}

// Enhanced Loading States
function initEnhancedLoading() {
  var loadingElements = document.querySelectorAll('.loading-dots');
  loadingElements.forEach(function (element) {
    element.addEventListener('click', function () {
      element.classList.add('loading');
      setTimeout(function () {
        element.classList.remove('loading');
      }, 2000);
    });
  });
}

// Test Animations Function
function initTestAnimations() {
  var testButton = document.getElementById('test-animations');
  if (testButton) {
    testButton.addEventListener('click', function () {
      console.log('Testing animations...');

      // Test text reveal animations
      var textElements = document.querySelectorAll('.text-reveal, .fade-in-up, .fade-in-left, .fade-in-right, .fade-in-scale, .scroll-fade');
      console.log('Found animation elements:', textElements.length);
      textElements.forEach(function (el, index) {
        console.log("Element ".concat(index, ":"), el.tagName, el.className);
        el.classList.add('revealed', 'in-view');
      });

      // Test staggered animations
      var staggerItems = document.querySelectorAll('.stagger-item');
      console.log('Found stagger items:', staggerItems.length);
      staggerItems.forEach(function (item, index) {
        item.style.transitionDelay = "".concat(index * 0.1, "s");
        item.style.opacity = '1';
        item.style.transform = 'translateY(0)';
      });

      // Test hover effects
      var hoverElements = document.querySelectorAll('.hover-lift, .hover-scale');
      console.log('Found hover elements:', hoverElements.length);

      // Test parallax
      var parallaxElements = document.querySelectorAll('.parallax-bg, .parallax-slow, .parallax-medium, .parallax-fast');
      console.log('Found parallax elements:', parallaxElements.length);
      console.log('Animation test completed!');
    });
  }
}

// Initialize all enhanced features
document.addEventListener('DOMContentLoaded', function () {
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
  var existingCards = document.querySelectorAll('.tech-block, .tech-block-light, .bg-gray-800, .bg-white');
  existingCards.forEach(function (card, index) {
    card.classList.add('hover-lift', 'transition-all-enhanced');
    card.style.transitionDelay = "".concat(index * 0.1, "s");
  });

  // Add text reveal animations to headings
  var headings = document.querySelectorAll('h1, h2, h3');
  headings.forEach(function (heading, index) {
    heading.classList.add('text-reveal');
    heading.style.transitionDelay = "".concat(index * 0.2, "s");
  });

  // Add fade-in animations to sections
  var sections = document.querySelectorAll('section');
  sections.forEach(function (section, index) {
    section.classList.add('scroll-fade');
    section.style.transitionDelay = "".concat(index * 0.1, "s");
  });
  console.log('Enhanced features initialized successfully!');

  // Force initial animation check
  setTimeout(function () {
    var animatedElements = document.querySelectorAll('.text-reveal, .fade-in-up, .fade-in-left, .fade-in-right, .fade-in-scale, .scroll-fade');
    animatedElements.forEach(function (el) {
      if (el.getBoundingClientRect().top < window.innerHeight) {
        el.classList.add('revealed', 'in-view');
      }
    });
  }, 100);

  // Force all animations to be visible after a delay
  setTimeout(function () {
    console.log('Forcing all animations to be visible...');
    var allAnimatedElements = document.querySelectorAll('.text-reveal, .fade-in-up, .fade-in-left, .fade-in-right, .fade-in-scale, .scroll-fade');
    allAnimatedElements.forEach(function (el) {
      el.classList.add('revealed', 'in-view');
      el.style.opacity = '1';
      el.style.transform = 'translateY(0)';
    });
    var staggerItems = document.querySelectorAll('.stagger-item');
    staggerItems.forEach(function (item, index) {
      item.style.opacity = '1';
      item.style.transform = 'translateY(0)';
    });
    console.log('All animations forced visible!');
  }, 2000);
});

// Swiper initialization function
function initializeSwipers() {
  // Services Swiper
  var servicesSwiper = document.querySelector('.services-swiper');
  if (servicesSwiper) {
    new Swiper('.services-swiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      }
    });
  }

  // Portfolio Swiper
  var portfolioSwiper = document.querySelector('.portfolio-swiper');
  if (portfolioSwiper) {
    new Swiper('.portfolio-swiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      breakpoints: {
        768: {
          slidesPerView: 2
        },
        1024: {
          slidesPerView: 3
        }
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      }
    });
  }
}

// Make optimizedAnimation globally available
window.optimizedAnimation = optimizedAnimation;
window.initializeSwipers = initializeSwipers;

/***/ }),

/***/ "./resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./resources/js/bootstrap.js ***!
  \***********************************/
/***/ (() => {

// Bootstrap file for Laravel
// This file is intentionally left empty for compatibility

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;