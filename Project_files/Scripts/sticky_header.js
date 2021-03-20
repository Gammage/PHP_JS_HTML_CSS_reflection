// header needs to be fixed when scrolling up

const staticHead = document.getElementById('static_head');

let buffer = 0
let oldScrollPosition = 0;
let newnewScrollPosition;

const afterHeader = staticHead.clientHeight;

const floatyHead = staticHead.cloneNode(true); //copies statichead
floatyHead.style.visibility = "hidden";
floatyHead.id = 'floaty_head'; //gives the cloned header a defined value

const headerElement = document.querySelector('header');
headerElement.appendChild(floatyHead);

// When we detect scrolling
window.addEventListener('scroll', function() {
    // Get the value
    newScrollPosition = document.documentElement.scrollTop

    let ua = navigator.userAgent;
    /* MSIE used to detect old browsers and Trident used to newer ones*/
    let is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;

    if (!is_ie
        || (is_ie && (newScrollPosition - oldScrollPosition) != 0)) {    
        const hasJustScrolledUp = newScrollPosition < oldScrollPosition;
        const isFarDownPage = newScrollPosition > afterHeader;

        if (hasJustScrolledUp && isFarDownPage) {
            console.log('show!');
            floatyHead.style.visibility = "visible";
        } else {
            console.log('hide');
            floatyHead.style.visibility = "hidden";
        }

        oldScrollPosition = newScrollPosition;
    }
});

// this does not work when sticky header is seen on top of screen
