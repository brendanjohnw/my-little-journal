import $ from 'jquery';

window.$ = $;

import.meta.glob([
    '../images/**',
    '../fonts/**',
  ]);

import Misc from './misc/misc';

const misc = new Misc();
$(async function () {
    let page = null;
    const csrf = misc.getCSRF();
    console.log("this is a test")
    if (window.location.pathname.includes('write')) {
        const HomePage = await import('./pages/home.js')
        page = new HomePage.default({csrf: csrf});
    }
    document.addEventListener("DOMContentLoaded", () => {
        document.main.classList.add("fade-in-up");
    });
    
    window.addEventListener("beforeunload", (event) => {
        document.main.classList.add("fade-out-down");
        event.preventDefault(); 
        setTimeout(() => {
            document.body.classList.remove("fade-out-down");
        }, 800); 
    });
})


