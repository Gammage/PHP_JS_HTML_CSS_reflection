
// Set Variables
const acceptButton = document.getElementById("Accept_Cookies")
const modalWindow = document.getElementById("modal_container")
const modalOverlay = document.getElementById("modal_overlay")
let enableScrolling = false

// let  Only available in the scope it is declared in
// const  Once assigned the value cannot change

// Add event listeners

document.addEventListener("DOMContentLoaded", function() {

    // This is the override to test the modal
    // localStorage.setItem("accepted", "apple")

    if (localStorage.getItem("accepted") == "true") {
        hideModal()
    } else if (localStorage.getItem("accepted") == null || 
    localStorage.getItem("accepted") != "true") {
        disableScrolling()
    }

    let value = 6
    // testFunction(value)

    console.log(testFunction(value))

})



// Close the modal and overlay
acceptButton.addEventListener("click", function() {
    hideModal()
    enableScrolling = true
    localStorage.setItem("accepted", "true")
})

// Define Functions
function noScroll() {
    if (!enableScrolling) {
        window.scrollTo(0,0);
    } else {
        document.removeEventListener("scroll", noScroll)
    }
}

function hideModal() {
    modalWindow.classList.add("deactivate")
    modalOverlay.classList.add("deactivate")
}

function disableScrolling() {
    document.addEventListener("scroll", noScroll)
}

function testFunction(_testValue) {

    // console.log(_testValue)
    let foundValue
    for (var x = 0; x < 10; x++) {
        if (x == _testValue) {
            foundValue = x
        }
    }

    return "The found value is " + foundValue
}







