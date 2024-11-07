// script.js - Para funciones de JavaScript si necesitas agregar interactividad
document.getElementById('reservationForm').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Reserva completada con éxito.');
    this.reset();
});

document.getElementById('language-toggle').addEventListener('click', function() {
    const lang = this.getAttribute('data-lang');
    const newLang = lang === 'es' ? 'en' : 'es';
    this.setAttribute('data-lang', newLang);
    this.textContent = newLang === 'es' ? 'English' : 'Español';

    document.querySelectorAll('[data-es]').forEach(el => {
        el.textContent = el.getAttribute(`data-${newLang}`);
    });
});

