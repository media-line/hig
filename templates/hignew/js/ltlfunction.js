function ChangeLogo() {
    var width = document.documentElement.clientWidth;
    var name = jQuery('.logo')[0];

    if (width <= '1405') {
        console.log(name);
        name.src = 'templates/hignew/images/logo-ltl.png';
    };
}

function LittleText() {
    var check = window.location.pathname;

    if (check == '/kontakty' ) {
        var targ = document.getElementsByClassName('page_article')[0].getElementsByTagName('p')[0];
        targ.style.width = '85%';
    }
}

ChangeLogo();
LittleText();