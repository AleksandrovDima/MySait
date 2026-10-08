document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('dialog[data-auto-show="true"]').forEach(function (dialog) {
        dialog.showModal();
    });
});

document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('dialog[open]')) return;

    const firstError = document.querySelector('.is-invalid, .invalid-feedback');
    if (firstError) {
        requestAnimationFrame(() => {
            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    }
});