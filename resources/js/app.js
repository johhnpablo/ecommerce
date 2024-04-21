import './bootstrap';
import Alpine from 'alpinejs';
import carousel from './carousel.js';
window.Alpine = Alpine;
Alpine.data('carousel', carousel)
Alpine.start();
