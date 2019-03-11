function visible(value) {
    if(value=="Ag"){   
        var x = document.getElementById('Agdiv');
        x.style.display="inline";
        var x = document.getElementById('Acdiv');
        x.style.display="none";
        var x = document.getElementById('Apdiv');
        x.style.display="none";
        var x = document.getElementById('Addiv');
        x.style.display="none";
    }
    else if(value=="Ac"){   
        var x = document.getElementById('Acdiv');
        x.style.display="inline";
     var x = document.getElementById('Agdiv');
        x.style.display="none";
        var x = document.getElementById('Apdiv');
        x.style.display="none";
        var x = document.getElementById('Addiv');
        x.style.display="none";   
    }
    else if(value=="Ap"){   
        var x = document.getElementById('Apdiv');
        x.style.display="inline";
        var x = document.getElementById('Agdiv');
        x.style.display="none";
        var x = document.getElementById('Acdiv');
        x.style.display="none";
        var x = document.getElementById('Addiv');
        x.style.display="none";
        
    }
    else if(value=="Ad"){   
        var x = document.getElementById('Addiv');
        x.style.display="inline";
        var x = document.getElementById('Acdiv');
        x.style.display="none";
        var x = document.getElementById('Apdiv');
        x.style.display="none";
        var x = document.getElementById('Agdiv');
        x.style.display="none";   
    }
    if(value=="Admin"){   
        var x = document.getElementById('Addiv');
        x.style.display="none";
        var x = document.getElementById('Acdiv');
        x.style.display="none";
        var x = document.getElementById('Apdiv');
        x.style.display="none";
        var x = document.getElementById('Agdiv');
        x.style.display="none";   
    }
}