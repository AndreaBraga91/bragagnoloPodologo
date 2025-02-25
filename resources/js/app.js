import './bootstrap';

// Import our custom CSS
import '../css/app.css'

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

import jQuery from 'jquery';
var $ = jQuery

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

import gsap from 'gsap'
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { main } from '@popperjs/core';
let page = $('main').data('page')
let hamburger = document.querySelector('#nav-icon');
let open = false

gsap.registerPlugin(ScrollTrigger)
hamburger.addEventListener('click', (event) => {
    if (open) {
        gsap.to('nav', {x: '0vw', duration:1});
        open = false;
    } else {
        gsap.to('nav', {x: '-100vw', duration:1});
        open = true;
    }
    hamburger.classList.toggle("open");
});


document.addEventListener("DOMContentLoaded", (event) => {
    if (page == 'patologie') {
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    }

    if (page == 'home') {

        let tl1 = gsap.timeline({
                scrollTrigger: {
                    trigger: '.section1',
                    pin: true, // pin the trigger element while active
                    start: 'bottom bottom', // when the top of the trigger hits the top of the viewport
                    end: window.innerHeight + 'px', // end after scrolling 500px beyond the start
                    scrub: 2, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    pinSpacing: false,
                },
            }
        );

        tl1.to('.logo', {scale: 1.5, opacity: 0, duration: 3})
        tl1.to('.logo-text', {scale: 1.5, opacity: 0, duration: 3})
        tl1.to('.doc-image', {scale: 2, opacity: 0, duration: 3})
        tl1.fromTo('.nav-logo', {opacity: 0}, {opacity:1, duration:3})

        let tl2 = gsap.timeline({
                scrollTrigger: {
                    trigger: '.section2',
                    pin: true, // pin the trigger element while active
                    start: 'top top', // when the top of the trigger hits the top of the viewport
                    end: '+=' + window.innerHeight + 'px', // end after scrolling 500px beyond the start
                    scrub: 2, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    pinSpacing: false,
                },
            }
        );

        tl2.fromTo('.title1', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
        tl2.fromTo('.parag-1', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
        tl2.fromTo('.parag-2', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
        tl2.fromTo('.cit', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
        tl2.from('.btn-footer', {opacity: 0, scale:1.5, y:100, duration: 5})
        tl2.to('body', {duration: 10})
        tl2.to('.section2', {opacity: 0, duration:5})

        let tl3 = gsap.timeline({
                scrollTrigger: {
                    trigger: '.section3',
                    pin: true, // pin the trigger element while active
                    start: 'top top', // when the top of the trigger hits the top of the viewport
                    end: '+=' + window.innerHeight + 'px', // end after scrolling 500px beyond the start
                    scrub: 2, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    pinSpacing: false,
                },
            }
        );

        tl3.fromTo('.title3', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
        tl3.fromTo('.parag-3', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
        tl3.to('body', {duration: 10})
        tl3.to('.section3', {opacity: 0, scale: 1.2, duration:5})

        let tl4 = gsap.timeline({
                scrollTrigger: {
                    trigger: '.section4',
                    pin: true, // pin the trigger element while active
                    start: 'top top', // when the top of the trigger hits the top of the viewport
                    end: '+=' + window.innerHeight + 'px', // end after scrolling 500px beyond the start
                    scrub: 2, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    pinSpacing: false,
                },
            }
        );

        tl4.fromTo('.title4', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
        tl4.fromTo('.parag-4', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
        tl4.to('body', {duration: 10})
        tl4.to('.section4', {opacity: 0, scale: 1.2, duration:5})

        let tl5 = gsap.timeline({
                scrollTrigger: {
                    trigger: '.section5',
                    pin: true, // pin the trigger element while active
                    start: 'top top', // when the top of the trigger hits the top of the viewport
                    end: '+=' + window.innerHeight + 'px', // end after scrolling 500px beyond the start
                    scrub: 2, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                    pinSpacing: false,
                },
            }
        );

        tl5.fromTo('.title5', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
        tl5.fromTo('.parag-5', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
        tl5.to('body', {duration: 10})
        tl5.to('.section5', {opacity: 0, scale: 1.2, duration:5})


        let tl6 = gsap.timeline({
                scrollTrigger: {
                    trigger: '.section6',
                    pin: true, // pin the trigger element while active
                    start: 'top top', // when the top of the trigger hits the top of the viewport
                    end: '+=' + window.innerHeight + 'px', // end after scrolling 500px beyond the start
                    scrub: 2, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                },
            }
        );

        tl6.to('body', {duration: 5})
        tl6.fromTo('.title6', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
        tl6.fromTo('.parag-6', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
        tl6.to('.btn-footer', {opacity: 0, scale:1.5, y:400, duration: 5})
    }

    if (page == 'chi-sono') {
        let sections = $('section')
        sections.toArray().forEach((section, i) => {
            if (i==0) {
                gsap.timeline({
                    scrollTrigger: {
                        trigger: '.section' + (i+1),
                        pin: true, // pin the trigger element while active
                        start: 'top top', // when the top of the trigger hits the top of the viewport
                        end: '+=' + window.innerHeight + 'px', // end after scrolling 500px beyond the start
                        scrub: 2, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                        pinSpacing: false,
                    },
                })
                .fromTo('.section' + (i+1) + ' .date', {opacity: 1, scale: 1}, {opacity: 0, y: -200, scale: 0.8, duration: 5})
                .fromTo('.section' + (i+1) + ' .description', {opacity: 1, scale: 1}, {opacity: 0, y: -200, scale: 0.8, duration: 5})
            } else if (i == (sections.length - 1)) {
                gsap.timeline({
                    scrollTrigger: {
                        trigger: '.section' + (i+1),
                        pin: true, // pin the trigger element while active
                        start: 'top top', // when the top of the trigger hits the top of the viewport
                        end: '+=' + window.innerHeight + 'px', // end after scrolling 500px beyond the start
                        scrub: 2, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                        pinSpacing: sections.length == i+1 ? true : false,
                    },
                })
                .fromTo('.section' + (i+1) + ' .date', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
                .fromTo('.section' + (i+1) + ' .description', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
                .to('.mouse-container', {opacity:0, y: 300, duration: 5})
                .to('body', {duration: 10})
            } else {
                gsap.timeline({
                    scrollTrigger: {
                        trigger: '.section' + (i+1),
                        pin: true, // pin the trigger element while active
                        start: 'top top', // when the top of the trigger hits the top of the viewport
                        end: '+=' + window.innerHeight + 'px', // end after scrolling 500px beyond the start
                        scrub: 2, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                        pinSpacing: sections.length == i+1 ? true : false,
                    },
                })
                .fromTo('.section' + (i+1) + ' .date', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
                .fromTo('.section' + (i+1) + ' .description', {opacity: 0, scale: 1.5, y: 200}, {opacity: 1, y: 0, scale: 1, duration: 5})
                .to('body', {duration: 10})
                .fromTo('.section' + (i+1) + ' .date', {opacity: 1, scale: 1}, {opacity: 0, y: -200, scale: 0.8, duration: 5})
                .fromTo('.section' + (i+1) + ' .description', {opacity: 1, scale: 1}, {opacity: 0, y: -200, scale: 0.8, duration: 5})
            }
        });
    }

    if (page == 'lo-studio') {
        let images = $('.img-studio');
        let duration = 2
        let repeatDelay = duration * (images.length - 1)
        let tl = gsap.timeline({
            repeat:20
        })

        tl.from(images, {duration:duration, opacity:0, stagger: {
            each: duration,
            repeat:-1,
            repeatDelay: repeatDelay
        }})
        .to(images, {duration: duration, opacity:0, stagger: {
            each: duration,
            repeat: -1,
            repeatDelay: repeatDelay
        }}, duration)
    }

    if (page == 'patologie-show') {
        const items = $('.accordion1 button');

        function toggleAccordion() {
        const itemToggle = this.getAttribute('aria-expanded');

        for (let i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
        }

        items.toArray().forEach(item => item.addEventListener('click', toggleAccordion));
    }

    $('.loader').addClass('d-none')
});
