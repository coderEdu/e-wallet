let edit_check = document.getElementById('edit_chkbox');
let save_btn = document.getElementById('saveBtn');
let del_btn = document.getElementById('delBtn');
let delete_note = document.getElementById('deleteNote');
let lbl_check = document.getElementById('lbl_check');
let note = document.getElementById('note');
let note_save_content = note.value;

del_btn.addEventListener('click', () => {
    if (del_btn.innerHTML=='Confirma ?') {
        del_btn.type='submit';
        alert('Nota eliminada.');
    }    
    del_btn.innerHTML='Confirma ?';
})

// Checks if the 'textarea' content has changed
note.addEventListener('input', () => {
    (note_save_content !== note.value) ? enablingSaveBtn() : disablingSaveBtn();
});

function load() {
    save_btn.style.backgroundColor='#E7E7E7';
    save_btn.style.color='#C1C1C1';
    save_btn.disabled=true;
}

function enablingSaveBtn() {
    save_btn.disabled=false;
    save_btn.style.backgroundColor='#3B82F6';
    save_btn.style.color='white';
}

function disablingSaveBtn() {
    save_btn.style.backgroundColor='#E7E7E7';
    save_btn.style.color='#C1C1C1';
    save_btn.disabled=true;
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