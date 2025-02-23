//let windowHeight = window.innerHeight;
let documentHeight = document.documentElement.clientHeight;

window.addEventListener('scroll', () => {
    let position = document.documentElement.scrollTop;    
    let left_panel = document.getElementById('filtersPanel');
    let lp_width = left_panel.offsetWidth;
    let hidden_panel = document.getElementById('hiddenPanel');
    let right_panel = document.getElementById('rightPanel');
    let rp_height = right_panel.offsetHeight;
    
    if (position > 250 && rp_height > documentHeight) {
        left_panel.style.position='fixed';
        left_panel.style.top='10px';    
        // hidden panel
        hidden_panel.style.display='flex';
        hidden_panel.style.minWidth=lp_width+'px';
    } else {
        left_panel.style.position='relative';
        left_panel.style.top='0px';
        // hidden panel
        hidden_panel.style.display='none';
    }
});

