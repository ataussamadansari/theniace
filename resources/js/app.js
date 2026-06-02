import './bootstrap';

import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import $ from 'jquery';
import AOS from 'aos';
import Swiper from 'swiper';
import { Pagination, Autoplay } from 'swiper/modules';

window.$ = $;
window.jQuery = $;

AOS.init({
	duration: 700,
	once: true,
	easing: 'ease-out-cubic',
});

new Swiper('.university-swiper', {
	modules: [Pagination, Autoplay],
	loop: true,
	spaceBetween: 20,
	slidesPerView: 1.2,
	centeredSlides: false,
	autoplay: { delay: 2500, disableOnInteraction: false },
	pagination: { el: '.university-swiper .swiper-pagination', clickable: true },
	breakpoints: {
		480: { slidesPerView: 2,   spaceBetween: 16 },
		768: { slidesPerView: 3,   spaceBetween: 20 },
		992: { slidesPerView: 4,   spaceBetween: 20 },
		1200:{ slidesPerView: 5,   spaceBetween: 24 },
	},
});

new Swiper('.testimonial-swiper', {
	modules: [Pagination, Autoplay],
	loop: true,
	slidesPerView: 1,
	spaceBetween: 24,
	autoplay: { delay: 3500, disableOnInteraction: false },
	pagination: { el: '.testimonial-swiper .swiper-pagination', clickable: true },
	breakpoints: {
		768:  { slidesPerView: 2 },
		1200: { slidesPerView: 3 },
	},
});

$('.counter').each(function () {
	const $counter = $(this);
	const target = Number($counter.data('target'));
	if (!target) return;

	$({ value: 0 }).animate(
		{ value: target },
		{
			duration: 1600,
			easing: 'swing',
			step(now) {
				$counter.text(Math.ceil(now).toLocaleString() + '+');
			},
			complete() {
				$counter.text(target.toLocaleString() + '+');
			},
		}
	);
});

const mobilePanel = document.getElementById('mobileMenuPanel');
const openMobileMenu = document.getElementById('openMobileMenu');
const closeMobileMenu = document.getElementById('closeMobileMenu');

if (mobilePanel && openMobileMenu && closeMobileMenu) {
	openMobileMenu.addEventListener('click', () => mobilePanel.classList.add('active'));
	closeMobileMenu.addEventListener('click', () => mobilePanel.classList.remove('active'));
	mobilePanel.addEventListener('click', (event) => {
		if (event.target === mobilePanel) {
			mobilePanel.classList.remove('active');
		}
	});
}
