// header needs to be fixed when scrolling up

const stickyHead = document.getElementById('header_container');

let scrolling = false;

window.scroll = () => {
    scrolling = true;
};

let scrollPosition = 0;

window.addEventListener('scroll', function() {
    console.log(document.documentElement.scrollTop + ' : ' + scrollPosition);
 
    if (window.pageYOffset > 200){
        stickyHead.style.position = "fixed";
        // console.log('scroll working');
    } else { 
        stickyHead.style.position = "static";
    }

    scrollPosition = document.documentElement.scrollTop;
});

// setI



//.header_container
//.nav_menu


// when scrolling down header is no longer fixed
// this does not work when sticky header is seen on top of screen
