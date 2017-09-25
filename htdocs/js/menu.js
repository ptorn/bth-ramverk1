"use strict";
(function () {
    var button = document.getElementById('mobile-nav-top');

    button.addEventListener('click', function() {
        var nav = document.getElementById('mobile-nav-container');
        var open = document.getElementById('menu-open');
        var close = document.getElementById('menu-close');

        if (nav.classList.contains('hide')) {
            nav.classList.remove('hide');
            open.classList.add('hide');
            close.classList.remove('hide');
        } else {
            nav.classList.add('hide');
            close.classList.add('hide');
            open.classList.remove('hide');
        }
    });
})();
