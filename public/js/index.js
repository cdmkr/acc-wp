document.ondragstart = noselect; 
document.onselectstart = noselect; 
document.oncontextmenu = noselect; 
function noselect() {return false;} 
document.oncontextmenu; 

function catchControlKeys(event){ 
    var code=event.keyCode ? event.keyCode : event.which ? event.which : null; 
    if (event.ctrlKey){ 
        if (code == 117) return false; 
        if (code == 85) return false; 
        if (code == 99) return false; 
        if (code == 67) return false; 
        if (code == 97) return false; 
        if (code == 65) return false; 
    } 
}