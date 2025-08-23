# MeowMatrix - Новая Верстка

## Описание

Полностью переработанная верстка сайта MeowMatrix в современном стиле с использованием:
- **Tailwind CSS** для стилизации
- **Поддержка двух языков** (Украинский/Английский)
- **Современный дизайн** в стиле референсов
- **Адаптивная верстка** для всех устройств
- **Оптимизация производительности**

## Особенности нового дизайна

### 🎨 Современный UI/UX
- Минималистичный и чистый дизайн
- Градиентные элементы и тени
- Плавные анимации и переходы
- Glass morphism эффекты

### 🌐 Мультиязычность
- Украинский (по умолчанию)
- Английский
- Переключение языков в реальном времени
- Локализованный контент

### 📱 Адаптивность
- Mobile-first подход
- Оптимизация для всех устройств
- Touch-friendly интерфейс
- Responsive навигация

### ⚡ Производительность
- Lazy loading изображений
- Оптимизированные анимации
- Intersection Observer API
- Минимальный JavaScript

## Структура файлов

```
resources/
├── lang/
│   ├── uk/app.php          # Украинские переводы
│   └── en/app.php          # Английские переводы
├── views/
│   ├── layouts/main/app.blade.php  # Основной layout
│   └── welcome.blade.php           # Главная страница
├── css/
│   └── app.css                     # Основные стили + Tailwind
└── js/
    └── app.js                      # JavaScript функционал

app/Http/
├── Middleware/SetLocale.php        # Middleware для языков
└── Controllers/LanguageController.php  # Контроллер языков
```

## Установка и настройка

### 1. Установка зависимостей
```bash
npm install
```

### 2. Сборка ассетов
```bash
# Разработка
npm run dev

# Продакшн
npm run production
```

### 3. Настройка Laravel
```bash
# Очистка кэша
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Миграции (если нужно)
php artisan migrate
```

### 4. Запуск сервера
```bash
php artisan serve
```

## Использование

### Переключение языков
```php
// В Blade шаблонах
{{ __('app.nav_home') }}

// Переключение
<a href="{{ route('language.switch', 'uk') }}">UK</a>
<a href="{{ route('language.switch', 'en') }}">EN</a>
```

### Добавление новых переводов
1. Добавьте ключ в `resources/lang/uk/app.php`
2. Добавьте перевод в `resources/lang/en/app.php`
3. Используйте в шаблонах: `{{ __('app.your_key') }}`

## Компоненты

### Header
- Логотип с градиентом
- Навигационное меню
- Переключатель языков
- CTA кнопка
- Мобильное меню

### Hero Section
- Анимированный фон с blob эффектами
- Градиентный текст
- CTA кнопки
- Индикатор прокрутки

### Services
- Карточки услуг с иконками
- Hover эффекты
- Адаптивная сетка

### Stats
- Анимированные счетчики
- Градиентный фон
- Intersection Observer

### About
- Описание компании
- Процесс работы
- Интерактивные элементы

### Portfolio
- Галерея проектов
- Hover эффекты
- Модальные окна

### Contact
- Форма обратной связи
- Контактная информация
- Валидация

## Стилизация

### Tailwind CSS классы
- `bg-gradient-to-r from-blue-600 to-purple-600` - градиент
- `hover:scale-110` - hover эффекты
- `transition-all duration-300` - анимации
- `backdrop-blur-md` - glass эффект

### Кастомные классы
- `.animate-blob` - blob анимация
- `.btn-gradient` - градиентные кнопки
- `.card-hover` - hover эффекты карточек
- `.text-gradient` - градиентный текст

## Анимации

### CSS анимации
- Blob эффекты для фона
- Fade in/out для элементов
- Slide in для контента
- Scale эффекты для кнопок

### JavaScript анимации
- Счетчики с Intersection Observer
- Плавная прокрутка
- Анимации при скролле
- Lazy loading

## Оптимизация

### Производительность
- Минимальный JavaScript
- Оптимизированные изображения
- Lazy loading
- Intersection Observer

### SEO
- Семантическая разметка
- Meta теги
- Open Graph
- Структурированные данные

### Доступность
- ARIA атрибуты
- Keyboard navigation
- Focus states
- Screen reader support

## Браузерная поддержка

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+

## Планы развития

- [ ] Темная тема
- [ ] Дополнительные языки
- [ ] PWA функционал
- [ ] Аналитика и метрики
- [ ] CMS интеграция

## Поддержка

При возникновении проблем:
1. Проверьте консоль браузера
2. Убедитесь в корректности сборки ассетов
3. Проверьте логи Laravel
4. Очистите кэш

## Лицензия

MIT License
