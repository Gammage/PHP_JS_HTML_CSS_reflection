// header needs to be fixed when scrolling up

const stickyHead = document.getElementById('sticky_head');

let buffer = 0
let oldScrollPosition = 0;
let newnewScrollPosition

// When we detect scrolling
window.addEventListener('scroll', function() {
    // Get the value
    newScrollPosition = document.documentElement.scrollTop

    let ua = navigator.userAgent;
    /* MSIE used to detect old browsers and Trident used to newer ones*/
    let is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;

    // not IE 
    if (!is_ie) {
        if (newScrollPosition > oldScrollPosition) {
            console.log('going down');
            stickyHead.style.visibility = "visible";
        } else {
            console.log('going up');
            stickyHead.style.visibility = "hidden";
        }

        oldScrollPosition = newScrollPosition;
    }

    // IE 'bounces up' when downwards scrolling to help content loading. When comparing 'old' and 'new' this 'bounce up' always returned zero
    
    // is IE

    // != means not equal to

    // (newScrollPosition - oldScrollPosition) != 0 checks for the 'bounce up'
    if (is_ie && (newScrollPosition - oldScrollPosition) != 0) {
        if (newScrollPosition > oldScrollPosition) {
            console.log('going down');
            stickyHead.style.visibility = "visible";
        } else {
            console.log('going up');
            stickyHead.style.visibility = "hidden";
        }

        oldScrollPosition = newScrollPosition;

    }
});

// when scrolling down header is no longer fixed
// this does not work when sticky header is seen on top of screen
