function LittleText() {
    var check = window.location.pathname;

    if (check == '/kontakty') {
        var targ = document.getElementsByClassName('page_article')[0].getElementsByTagName('p')[0];
        targ.style.width = '85%';
    }
}

function LenghtTail(o) {
    var obj = jQuery(o)[0];
    var minus = jQuery('.container')[0].offsetWidth;
    var height = jQuery('.header_form')[0].offsetHeight;
    var width = document.documentElement.clientWidth;

    var raz = (width - minus) / 2 + 15;

    /*рассчет дополнительной длинны и позиции в высоту хвоста логотипа*/
    if (o == '.logo_tail') {
        var dop = jQuery('.logoimg')[0].offsetWidth;
        var doph = (jQuery('.logoimg')[0].offsetHeight) - height;

        var dopol = dop / 2;
        jQuery('.logo_tail')[0].style.top = doph + 'px';
    } else {
        dopol = '';
    }

    var logoimg = jQuery('.logoimg')[0];
    logoimg.style.left = raz + 'px';

    var name = jQuery('.name')[0];
    name.style.left = (jQuery('.logoimg')[0].offsetHeight) / 2 + 'px';

    var breadcrumb = jQuery('.breadcrumb')[0];
    if (breadcrumb != undefined) {
        breadcrumb.style.left = dop + 'px';
    }

    /*применение значений*/
    obj.style.width = dopol + raz + 'px';
    obj.style.height = height + 'px';

}

function Test() {
    var size = document.documentElement.clientWidth;

    alert (size);
}

window.onload = function () {

    LittleText();
    //Test();

    var el = document.getElementById('float-block');
    scrollFloat.init(el);
}

var scrollFloat = function () {
    'use strict';

    var app = {};

    app.init = function init(node) {
        if (!node || node.nodeType !== 1) {
            throw new Error(node + ' is not DOM element');
        }
        handleWindowScroll(node);
    };

    function handleWindowScroll(floatElement) {
        window.onscroll = function () {
            if (window.scrollY > floatElement.offsetTop) {
                if (floatElement.style.position !== 'fixed') {
                    floatElement.style.position = 'fixed';
                    floatElement.style.top = '0';
                }
            } else {
                if (floatElement.style.position === 'fixed') {
                    floatElement.style.position = '';
                    floatElement.style.top = '';
                }
            }
        };
    }

    return app;
}();