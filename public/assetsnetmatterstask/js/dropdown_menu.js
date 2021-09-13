// the link

let dropdownButton = document.getElementById('dropdown_btn'); 
let hide = document.getElementById('hidden_content');
let drop = false;

// console.log("hidden");
dropdownButton.addEventListener('click', function() {
    if (drop) {
        hide.classList.remove('hidden');
        drop = false;
    } else {
        hide.classList.add('hidden');
        drop = true;
    }
});


