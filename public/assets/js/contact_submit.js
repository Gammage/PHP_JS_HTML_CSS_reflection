

const successWindow = document.getElementById("success_container")
const successOverlay = document.getElementById("modal_overlay") 
const returnButton = document.getElementById("success_return")

// const success = returnButton.addEventListener("click", function() {
//     successWindow.classList.remove("activate")
//     successOverlay.classList.remove("activate")
//     successPopup = true;

// })};

$(document).ready(function() {
    $('#contact_submit').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'contactsubmit.php',
            data: $(this).serialize(),
            success: handleContactSubmit
       });
     });
});

// response returns json following format: {"result":"success"}
function handleContactSubmit(response) {
    if (response.result == "success")
    {
        successWindow.classList.add("activate")
        successOverlay.classList.add("activate")
    }
    else
    {
        alert('failed!');
    }
} 
     
