let b1 = document.getElementById('bloque1');
let b2 = document.getElementById('bloque2');
let radio_owner = document.getElementById('radio_owner');

function yourChoice() {
    if (radio_owner.checked) {
        b1.style.display='flex';
        b2.style.display='none';
    } else {
        b1.style.display='none';
        b2.style.display='flex';
    }
}