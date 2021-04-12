//Burger menu when clicked animates
    
    //on off switch. by default, off (false)
    let switchToggle = false;

    // when function proc (button is ticked)
    function buttonToggle() {

        const bodyElement = document.getElementById("body");
        const burgerBtn = document.getElementsByClassName("burger_button");
        const lines = document.getElementsByClassName("burger_line");
        const sideMenu = document.getElementById("side_menu");
        const pushBody = document.getElementsByClassName("body_push");
        // button is true
        switchToggle = !switchToggle;

        if (switchToggle) {
            console.log("yes");
            bodyElement.classList.add("body_push");
            sideMenu.style.display = "block";
 
        } else {
            console.log("no");
            bodyElement.classList.remove("body_push");
            sideMenu.style.display = "none";
           
        }
    };

           //lines will merge
        //     //lines then transform to a cross
        //     //page moves to the left
        //         //side menu pops up
        //         // add margin to body
        //         // overflow:hidden
        //         // use element from other js to lock screen / shadow the element...
        //         // need a scroll function for bar...
            // bodyElement.classList.add("pushBody");

     // cross becomes line
            // lines revert
            // side menu is removed
            // bodyElement.classList.remove("pushBody");

    

    

      

 
    