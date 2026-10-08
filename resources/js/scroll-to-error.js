document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('dialog[open]')) {
        return;
    }

    const firstError = document.querySelector('.is-invalid, .invalid-feedback');
    if (!firstError) {
        return;
    }

    requestAnimationFrame(() => {
        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
});