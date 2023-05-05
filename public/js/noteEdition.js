let edit_check = document.getElementById('edit_chkbox');
let save_button = document.getElementById('saveBtn');
let lbl_check = document.getElementById('lbl_check');
let note = document.getElementById('note');
let note_save_content = note.value;

// Checks if the 'textarea' content has changed
note.addEventListener('input', () => {
    (note_save_content !== note.value) ? enablingSaveBtn() : disablingSaveBtn();
});

function load() {
    //edit_check.style.borderColor='#FFF700';
    save_button.style.backgroundColor='#E7E7E7';
    save_button.style.borderColor='#DFDFDF';
    save_button.style.color='#C1C1C1';
    save_button.disabled=true;
}

function enablingSaveBtn() {
    save_button.disabled=false;
    save_button.style.backgroundColor='#0146FF';
    save_button.style.borderColor='#0000FF';
    save_button.style.color='white';
}

function disablingSaveBtn() {
    save_button.style.backgroundColor='#E7E7E7';
    save_button.style.borderColor='#DFDFDF';
    save_button.style.color='#C1C1C1';
    save_button.disabled=true;
}

function edit() {
    //document.getElementById('note').setAttribute('readonly',true);
    if (edit_check.checked) {
        if (note_save_content !== note.value)
            enablingSaveBtn();
        lbl_check.innerHTML='Editando';
        note.removeAttribute('readonly');
        note.style.backgroundColor='#FFFFD9';                    
        note.focus();
    } else {
        lbl_check.innerHTML='Editar';
        note.style.backgroundColor='white';
        note.setAttribute('readonly',true);
        disablingSaveBtn();
    }
}

/*
function save() {
    note.style.backgroundColor='white';
    note.setAttribute('readonly',true);
    edit_check.checked=false;
    //edit_check.textContent='Editar';
    disablingSaveBtn();
}*/