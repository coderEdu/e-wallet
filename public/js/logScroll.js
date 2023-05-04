//let windowHeight = window.innerHeight;
let documentHeight = document.documentElement.clientHeight;

window.addEventListener('scroll', () => {
    let position = document.documentElement.scrollTop;    
    let left_panel = document.getElementById('filtersPanel');
    let hidden_panel = document.getElementById('hiddenPanel');
    let right_panel = document.getElementById('rightPanel');
    let rp_height = right_panel.offsetHeight;
    
    if (position > 282 && rp_height > documentHeight) {
        left_panel.style.position='fixed';
        left_panel.style.top='-20px';    
        hidden_panel.style.display='flex';
        // hidden panel
        hidden_panel.style.minWidth='335px';
    } else {
        left_panel.style.position='relative';
        left_panel.style.top='0px';
        // hidden panel
        hidden_panel.style.display='none';
    }
});