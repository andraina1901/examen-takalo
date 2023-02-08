function getObjets(idCategorie){
    var xhr; 
    try {  
        xhr = new ActiveXObject('Msxml2.XMLHTTP');   
    }catch (e) {
        try {   
            xhr = new ActiveXObject('Microsoft.XMLHTTP'); 
        }catch (e2) {
           try {  
            xhr = new XMLHttpRequest();  
            }catch (e3) {  
                xhr = false;   
            }
        }
    }
 
    xhr.onreadystatechange  = function() 
    { 
       if(xhr.readyState  == 4)
       {
        if(xhr.status  == 200) 
            document.ajax.dyn="Received:"  + xhr.responseText; 
        else 
            document.ajax.dyn="Error code " + xhr.status;
        }
    }; 

   xhr.open("GET", "Categorie/getAllCategories",  true); 
   xhr.send(null); 
}

function checker(nom , nomdiv){
    // console.log(document.getElementById(nom).checked);
    // document.getElementById(nom).remove();
    document.getElementById(nom).checked = !document.getElementById(nom).checked;
    // console.log(document.getElementById(nom).value);
    if(document.getElementById(nom).checked){
        document.getElementById(nomdiv).style.backgroundColor = "#474742";
        document.getElementById(nomdiv).style.color = "white";
    }else{
        document.getElementById(nomdiv).style.backgroundColor = "#6662ff";
        document.getElementById(nomdiv).style.color = "black";
    }
    
}