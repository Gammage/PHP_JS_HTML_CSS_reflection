// const successWindow = document.getElementById("success_container")
// const successOverlay = document.getElementById("modal_overlay") 
// const returnButton = document.getElementById("success_return")

let successPopup = false;

if (successPopup = true) {

const successWindow = document.getElementById("success_container")
const successOverlay = document.getElementById("modal_overlay") 
const returnButton = document.getElementById("success_return")

successWindow.classList.add("activate")
successOverlay.classList.add("activate")

const success = returnButton.addEventListener("click", function() {
    successWindow.classList.remove("activate")
    successOverlay.classList.remove("activate")
    successPopup = true;

})};



     
