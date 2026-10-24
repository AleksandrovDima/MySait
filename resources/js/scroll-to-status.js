document.addEventListener('DOMContentLoaded', function () {
    // Если открыта модалка — не скроллим
    if (document.querySelector('dialog[open]')) {
        return;
    }

    // Приоритет 1: ошибки валидации
    const firstError = document.querySelector('.is-invalid, .invalid-feedback');
    if (firstError) {
        requestAnimationFrame(() => {
            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
        return;
    }

    // Приоритет 2: сообщение об успехе
    const statusMessage = document.querySelector('.status-message');
    if (statusMessage) {
        requestAnimationFrame(() => {
            statusMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    }
});