// header needs to be fixed when scrolling up

const stickyHead = document.getElementById('sticky_head');

let scrollPosition = 0;

window.addEventListener('scroll', function() {
    console.log(document.documentElement.scrollTop + ' : ' + scrollPosition);

    
 
    if 

    scrollPosition = document.documentElement.scrollTop;
});

// when scrolling down header is no longer fixed
// this does not work when sticky header is seen on top of screen
