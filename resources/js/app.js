import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

// Initialiser AOS au chargement du DOM
document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
        easing: 'ease-in-out'
    });
});
