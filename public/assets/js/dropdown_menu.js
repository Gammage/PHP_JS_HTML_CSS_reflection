// the link

let dropdownButton = document.getElementById('dropdown_btn'); 
let hide = document.getElementById('hidden_content');
let drop = false;

dropdownButton.addEventListener('click', function() {
    if (drop) {
        hide.classList.add('hidden')
        drop = false;
    } else {
        hide.classList.remove('hidden');
        drop = true;
    }
});


