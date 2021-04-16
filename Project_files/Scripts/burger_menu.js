//Burger menu when clicked animates
    
    //on off switch. by default, off (false)
    let switchToggle = false;

    const mainPage = document.querySelector(".main")
    const sideMenu = document.querySelector(".side_menu");
    const hamburgers = document.querySelectorAll(".hamburger");
    const clonedHead = document.querySelector("#floaty_head");
    const mainOverlay = document.querySelector(".main_overlay");
    
    for (let i = 0; i < hamburgers.length; i = i + 1) {
        hamburgers[i].addEventListener("click", function(){
            buttonToggle();
        });
    }

    mainOverlay.addEventListener("click", function(event) {
        buttonToggle();
    });

    // when function proc (button is ticked)
    function buttonToggle() {

        // button is true
        switchToggle = !switchToggle;

        if (switchToggle) {
            console.log("yes");

            for (let i = 0; i < hamburgers.length; i = i + 1) {
                console.log(hamburgers[i]);
                hamburgers[i].classList.add("is-active");
            }

            mainOverlay.classList.add("overlay_active");
            mainPage.classList.add("main_push");
            sideMenu.classList.add("side_menu_push");
            sideMenu.classList.remove("side_menu_pull");
            clonedHead.classList.add("head_push");
            
        } else {
            console.log("no");

            for (let i = 0; i < hamburgers.length; i = i + 1) {
                console.log(hamburgers[i]);
                hamburgers[i].classList.remove("is-active");
            }
            
            mainOverlay.classList.remove("overlay_active");
            mainPage.classList.remove("main_push");
            sideMenu.classList.remove("side_menu_push");
            sideMenu.classList.add("side_menu_pull");
            clonedHead.classList.remove("head_push");
        }
    };


    

    

      

 
    