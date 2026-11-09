# МойСайт

Веб-приложение с авторизацией, профилем пользователя и управлением аккаунтом.

## Стек

- **Laravel** 13.0+ (PHP 8.4+)
- **Laravel Breeze** (Blade-стек) — скаффолдинг авторизации и профиля
- **Bootstrap** 5.3
- **Vite** (сборка фронтенда)
- **Blade** + компоненты
- **Нативный `<dialog>`** (вместо Bootstrap Modal)
- **CSS-переменные** для темизации
- **Локализация** — `laravel-lang/*` (ru)

## Требования

- PHP 8.4+
- Composer 2.11+
- Node.js 18+
- NPM

## Установка

```bash
# 1. Клонировать репозиторий
git clone <repo-url>
cd <project-name>

# 2. Установить PHP-зависимости
composer install

# 3. Установить JS-зависимости
npm install

# 4. Скопировать .env
cp .env.example .env

# 5. Сгенерировать ключ
php artisan key:generate

# 6. Настроить БД и локаль в .env
# DB_DATABASE=...
# DB_USERNAME=...
# DB_PASSWORD=...
# APP_LOCALE=ru
# APP_FALLBACK_LOCALE=ru
# APP_FAKER_LOCALE=ru_RU

# 7. Миграции
php artisan migrate

# 8. Сборка фронтенда
npm run build   # или npm run dev для разработки

# 9. Запуск
php artisan serve
```

Откройте `http://127.0.0.1:8000`.

## Локализация

Проект использует **русскую** локаль (`ru`). Настройки — в `.env`:

```env
APP_LOCALE=ru
APP_FALLBACK_LOCALE=ru
APP_FAKER_LOCALE=ru_RU
```

Переводы подключаются через пакеты `laravel-lang/*` (установлены в `require-dev`):

- `laravel-lang/lang` — файлы переводов
- `laravel-lang/locales` — локали
- `laravel-lang/config` — конфигурация
- `laravel-lang/publisher` — публикация

## Структура проекта

```
app/
├── Http/Controllers/
│   ├── Auth/                   # Breeze
│   └── ProfileController.php
├── View/Components/
│   ├── Ui/
│   │   └── Button.php          # Классовый компонент
│   └── Forms/
│       └── Fields/
│           └── Password.php    # Классовый компонент
└── Providers/

config/
├── branding.php                # Логотип + название
└── ...

resources/
├── css/
│   ├── app.css
│   ├── base.css                # Переменные, стили
│   └── dialog.css              # Нативный <dialog>
├── js/
│   ├── app.js
│   ├── bootstrap.js            # Bootstrap + axios
│   ├── modal.js                # Автооткрытие модалок
│   └── scroll-to-status.js     # Скролл к ошибкам/статусу
└── views/
    ├── pages/                  # Новые страницы
    │   └── main.blade.php
    ├── auth/                   # Breeze
    ├── profile/                # Breeze
    └── components/
        ├── layouts/
        │   ├── app.blade.php
        │   ├── inner.blade.php
        │   └── navigation/
        │       ├── navbar.blade.php
        │       ├── brand.blade.php
        │       ├── user-menu.blade.php
        │       └── guest-menu.blade.php
        ├── ui/
        │   ├── button.blade.php
        │   ├── dropdown.blade.php
        │   ├── modal.blade.php
        │   └── links/
        │       ├── nav.blade.php
        │       ├── dropdown.blade.php
        │       ├── text.blade.php
        │       └── button.blade.php
        ├── forms/
        │   ├── error.blade.php
        │   ├── inputs/
        │   ├── groups/
        │   ├── fields/
        │   │   ├── email.blade.php
        │   │   ├── name.blade.php
        │   │   └── password.blade.php
        │   ├── buttons/
        │   └── actions.blade.php
        └── panels/
            ├── card-parts.blade.php
            ├── messages/
            └── profile/
                ├── update-profile-information-form.blade.php
                ├── update-password-form.blade.php
                └── delete-user-form.blade.php
```

## Брендинг

Настройки бренда — в `config/branding.php` и `.env`:

```env
BRAND_LOGO=/assets/title_image.svg
BRAND_NAME="МойСайт"
```

Использование:

```blade
{{ config('branding.logo') }}
{{ config('branding.name') }}
```

## CSS-переменные

Все цвета — в `resources/css/base.css`:

```css
:root {
    --color-base: #f97316;
    --color-base-hover: #ea580c;
    --color-base-light: color-mix(in srgb, var(--color-base) 25%, transparent);
}
```

**Классы:**

| Класс | Назначение |
|-------|-----------|
| `text-base` | Оранжевый текст |
| `text-gray` | Серый текст |
| `link-base` | Ссылка: hover → оранжевый |
| `btn-base` | Кнопка (оранжевая) |

**Смена темы** — изменить `--color-base` в одном месте.

## Компоненты

### UI

| Компонент | Использование |
|-----------|---------------|
| `<x-ui.button variant="primary">` | Кнопка |
| `<x-ui.dropdown id="...">` | Dropdown |
| `<x-ui.modal name="...">` | Модалка (`<dialog>`) |
| `<x-ui.links.nav>` | Ссылка в navbar |
| `<x-ui.links.dropdown>` | Ссылка в dropdown |
| `<x-ui.links.text>` | Текстовая ссылка |
| `<x-ui.links.button>` | Кнопка-ссылка |

### Формы

| Компонент | Использование |
|-----------|---------------|
| `<x-forms.fields.email>` | Email |
| `<x-forms.fields.name>` | Имя |
| `<x-forms.fields.password>` | Пароль (опц. подтверждение) |
| `<x-forms.groups.group>` | Группа (label + input + ошибки) |
| `<x-forms.error>` | Ошибки |
| `<x-forms.actions>` | Обёртка кнопок |

### Панели

| Компонент | Использование |
|-----------|---------------|
| `<x-panels.card-parts>` | Карточка с заголовком |
| `<x-panels.profile.*>` | Формы профиля |

## Модалки — нативный `<dialog>`

Вместо Bootstrap Modal — **нативный** `<dialog>`:

```blade
<x-ui.button 
    type="button"
    onclick="document.getElementById('confirm-delete').showModal()"
>
    Удалить
</x-ui.button>

<x-ui.modal name="confirm-delete">
    ...
</x-ui.modal>
```

## JS

| Файл | Назначение |
|------|-----------|
| `bootstrap.js` | Bootstrap + axios |
| `modal.js` | Автооткрытие модалок при ошибках |
| `scroll-to-status.js` | Скролл к ошибкам/статусу |

## Скролл к ошибкам

После валидации — автоскролл:

1. **Ошибки** — к `.is-invalid`
2. **Успех** — к `.status-message`
3. **Модалка открыта** — не скроллит

## Профиль

Страница `/profile` — три секции:

| Секция | Форма | Error bag |
|--------|-------|-----------|
| Profile Information | `name`, `email` | `default` |
| Update Password | `current_password`, `password` | `updatePassword` |
| Delete Account | `password` | `userDeletion` |

**Error bag** — разделяет ошибки форм на одной странице.

## Тесты

```bash
php artisan test
```

## Сборка

```bash
# Разработка
npm run dev

# Продакшен
npm run build
```

## Лицензия

MIT