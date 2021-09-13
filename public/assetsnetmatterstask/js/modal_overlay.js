
// Set Variables
const bodyElement = document.getElementById("body")
const acceptButton = document.getElementById("Accept_Cookies")
const modalWindow = document.getElementById("modal_container")
const modalOverlay = document.getElementById("modal_overlay")
const lock = document.getElementsByClassName("modal_lock")

//local storage saved to variable, need to assign value/key
const storageType = localStorage;

// this is the key, saved to property variable i think
const acceptCookies = 'cookieaccepted';

// variable, assigned a function, called storagetype variable above, getting the data from variable accept cookies
const shouldShowPopup = () => !storageType.getItem(acceptCookies); //! = not true, so by default is false
const saveToStorage = () => storageType.setItem(acceptCookies, true); // = the value of cookie accepted is set as true


const accepted = acceptButton.addEventListener("click", function() {
    modalWindow.classList.remove("activate")
    modalOverlay.classList.remove("activate")
    bodyElement.classList.remove("modal_lock")
    saveToStorage();
})

window.onload = () => {
 if (shouldShowPopup()) {
    modalWindow.classList.add("activate")
    modalOverlay.classList.add("activate")
    bodyElement.classList.add("modal_lock")

    };    
};
