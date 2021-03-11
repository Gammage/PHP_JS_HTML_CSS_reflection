// header needs to be fixed when scrolling up

const stickyHead = document.getElementById('header_container');

let scrolling = false;

window.scroll = () => {
    scrolling = true;
};

window.addEventListener('scroll', function() {

 
    if (window.pageYOffset > 200){
        stickyHead.style.position = "fixed";
        console.log('scroll working');
    } else { 
        stickyHead.style.position = "static";
    }
});

setI



//.header_container
//.nav_menu


// when scrolling down header is no longer fixed
// this does not work when sticky header is seen on top of screen
