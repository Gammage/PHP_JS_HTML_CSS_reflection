
const successWindow = document.getElementById("success_container")
const failureWindow = document.getElementById("failure_container")
const successOverlay = document.getElementById("modal_overlay") 
const returnButton = document.getElementById("success_return")
const failureButton = document.getElementById("failure_return")

$(document).ready(function() {
    const success = returnButton.addEventListener("click", function() {
        successWindow.classList.remove("show")
        successOverlay.classList.remove("show")       
    });

    const failure = failureButton.addEventListener("click", function() {
        failureWindow.classList.remove("show")
        successOverlay.classList.remove("show")
    });
});

     
