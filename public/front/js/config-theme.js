/* --------------------------------------------------------------------------
 * File        : config-theme.js
 * Author      : indonez
 * Author URI  : http://www.indonez.com
 *
 * Indonez Copyright 2020 All Rights Reserved.
 * --------------------------------------------------------------------------
 * javascript handle initialization
    1. Slideshow
    2. Counter
    3. Mobile nav button
    4. Modal iframe
 * -------------------------------------------------------------------------- */

'use strict';

const HomepageApp = {
    //----------- 1. Slideshow -----------
    // theme_slideshow: function() {
    //     UIkit.slideshow('.in-slideshow', {
    //         autoplay: true,
    //         autoplayInterval: 7000,
    //         pauseOnHover: false,
    //         animation: 'slide',
    //         minHeight: 480,
    //         maxHeight: 700
    //     });
    // },
    //---------- 2. Counter -----------
    // theme_counter: function() {
    //     const counter = new counterUp({
    //         selector: '.count',
    //         start: 0,
    //         duration: 3200,
    //         intvalues: true,
    //         interval: 50
    //     });
    //     counter.start();
    // },
    //---------- 3. Mobile nav button -----------
    theme_mobilenav: function() {
        mobileNav({
            addonButtons: true,
            buttons: [{
                name: 'Log in', // button name
                url: 'https://axeprogroup.com/login', // button url
                type: 'primary', // button type (default, primary, secondary, danger, text)
                icon: 'sign-in-alt' // button icon, you can use all icons from here : https://fontawesome.com/icons?d=gallery&s=solid&m=free
            }]
        });
    },
    theme_init: function() {
        // HomepageApp.theme_slideshow();
        // HomepageApp.theme_counter();
        HomepageApp.theme_mobilenav();
    }
}

document.addEventListener('DOMContentLoaded', function() {
    HomepageApp.theme_init();
});
