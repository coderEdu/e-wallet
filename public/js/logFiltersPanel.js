// buttons
let btn_dates_clicked=false;
let btn_type_clicked=false;
let btn_amount_clicked=false;
let btn_concept_clicked=false;
let btn_account_clicked=false;

// panels
let datesPanel = document.getElementById('datesPanel');
let typePanel = document.getElementById('typePanel');
let amountPanel = document.getElementById('amountPanel');
let conceptPanel = document.getElementById('conceptPanel');
let accountPanel = document.getElementById('accountPanel');

document.getElementById('btn_dates').addEventListener('click', () => {
    btn_dates_clicked=!btn_dates_clicked;
    if (btn_dates_clicked) {
        datesPanel.style.display='block';
        document.getElementById('btn_dates').innerHTML='˅';
    } else {
        datesPanel.style.display='none';
        document.getElementById('btn_dates').innerHTML='<';
    }
});

document.getElementById('btn_type').addEventListener('click', () => {
    btn_type_clicked=!btn_type_clicked;
    if (btn_type_clicked) {
        typePanel.style.display='block';
        document.getElementById('btn_type').innerHTML='˅';
    } else {
        typePanel.style.display='none';
        document.getElementById('btn_type').innerHTML='<';
    }
});

document.getElementById('btn_amount').addEventListener('click', () => {
    btn_amount_clicked=!btn_amount_clicked;
    if (btn_amount_clicked) {
        amountPanel.style.display='block';
        document.getElementById('btn_amount').innerHTML='˅';
    } else {
        amountPanel.style.display='none';
        document.getElementById('btn_amount').innerHTML='<';
    }
});

document.getElementById('btn_concept').addEventListener('click', () => {
    btn_concept_clicked=!btn_concept_clicked;
    if (btn_concept_clicked) {
        conceptPanel.style.display='block';
        document.getElementById('btn_concept').innerHTML='˅';
    } else {
        conceptPanel.style.display='none';
        document.getElementById('btn_concept').innerHTML='<';
    }
});

document.getElementById('btn_account').addEventListener('click', () => {
    btn_account_clicked=!btn_account_clicked;
    if (btn_account_clicked) {
        accountPanel.style.display='block';
        document.getElementById('btn_account').innerHTML='˅';
    } else {
        accountPanel.style.display='none';
        document.getElementById('btn_account').innerHTML='<';
    }
});