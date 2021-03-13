
// Set Variables
const bodyElement = document.getElementById("body")
const acceptButton = document.getElementById("Accept_Cookies")
const modalWindow = document.getElementById("modal_container")
const modalOverlay = document.getElementById("modal_overlay")
// let enableScrolling = false

// let  Only available in the scope it is declared in
// const  Once assigned the value cannot change

// Add event listeners

document.addEventListener("DOMContentLoaded", function() {

    console.log("loaded")
    // This is the override to test the modal
    // localStorage.setItem("accepted", "apple")

    if (localStorage.getItem("accepted") == null || 
        localStorage.getItem("accepted") != "true") {
        // disableScrolling()
        console.log("cookies not accepted")
        showModal()
    }
})


// Close the modal and overlay
acceptButton.addEventListener("click", function() {
    hideModal()
    console.log("accept button pressed")
    // enableScrolling()
    localStorage.setItem("accepted", "true")
})

// Define Functions
// function noScroll() {
//     if (!enableScrolling) {
//         window.scrollTo(0,0);
//     } else {
//         document.removeEventListener("scroll", noScroll)
//     }
// }

// Only use this when accept button is pressed
function hideModal() {
    console.log("hide")
    modalWindow.classList.remove("activate")
    modalOverlay.classList.remove("activate")
}

// Only use this if they haven't accepted cookies
function showModal() {
    console.log("show")
    modalWindow.classList.add("activate")
    modalOverlay.classList.add("activate")
}

function disableScrolling() {
    bodyElement.classList.add("disableScrolling")
}

function enableScrolling() {
    bodyElement.classList.remove("disableScrolling")
}
