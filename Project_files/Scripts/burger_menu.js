//Burger menu when clicked animates
    
    //on off switch. by default, off (false)
    let switchToggle = false;

    // when function proc (button is ticked)
    function buttonToggle() {

        const mainPage = document.querySelector(".main")
        const sideMenu = document.querySelector(".side_menu");
        const hamburger = document.querySelector(".hamburger");

        // button is true
        switchToggle = !switchToggle;

        if (switchToggle) {
            console.log("yes");

            hamburger.classList.add("is-active");
            mainPage.classList.add("main_push");
            mainPage.classList.remove("main_reverse");
            sideMenu.classList.add("side_menu_push");
            sideMenu.classList.remove("side_menu_pull");
            
        } else {
            console.log("no");
            hamburger.classList.remove("is-active");
            mainPage.classList.remove("main_push");
            mainPage.classList.add("main_reverse");
            sideMenu.classList.remove("side_menu_push");
            sideMenu.classList.add("side_menu_pull");
        }
    };


    

    

      

 
    