// Set Variables
const contactbodyElement = document.getElementById("contact_body")
const returnButton = document.getElementById("success_return")
const modalWindow = document.getElementById("modal_container")
const modalOverlay = document.getElementById("modal_overlay")
const lock = document.getElementsByClassName("modal_lock")

const accepted = returnButton.addEventListener("click", function() {
    modalWindow.classList.remove("activate")
    modalOverlay.classList.remove("activate")
    contactbodyElement.classList.remove("modal_lock")

    window.onload = () => {
           modalWindow.classList.add("activate")
           modalOverlay.classList.add("activate")
           contactbodyElement.classList.add("modal_lock")
       }