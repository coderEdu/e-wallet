document.getElementById('account1').addEventListener('change', () => {
    let element = document.getElementById('account1');
    let element2 = document.getElementById('account2');
    let selectedIdx = element.selectedIndex;
    let selectedIdx2 = element2.selectedIndex;

    let options = document.getElementById('account2').options.length;
   
    for (let i = 0; i < options; i++) {
        element2.options[i].disabled = (selectedIdx !== 0 && selectedIdx === i) ? true : false;
    }

    if ( selectedIdx === selectedIdx2 )
        document.getElementById('account2').selectedIndex = 0;		                    
});