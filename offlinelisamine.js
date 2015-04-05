window.addEventListener("load", function(){
        if(localStorage.length==4){
        sendLocalStatus();}
}, true);

function sendToServer(){
        $.ajax({
                url:"ajax_request.php",
                type:"POST",
                data:{nimi:document.getElementById("nimi").value,
                piirkond:document.getElementById("piirkond").value,
                erakond:document.getElementById("erakond").value,
                isikukood:document.getElementById("isikukood").value
                },
                success: function(){
                    saadameformiminema();
                    localStorage.clear();

                },      
                error: function(){
                        saveStatusLocally();
                        alert("Puudub internetiühendus, lisame kandidaadi kui ühendus taastatakse");
                        setTimeout(sendToServer2(),5000);
                        
                }
                
        });
}


function sendToServer2(){
        $.ajax({
                url:"ajax_request.php",
                type:"POST",
                data:{nimi:document.getElementById("nimi").value,
                piirkond:document.getElementById("piirkond").value,
                erakond:document.getElementById("erakond").value,
                isikukood:document.getElementById("isikukood").value
                },
                success: function(){
                    saadameformiminema();
                    localStorage.clear();

                },      
                error: function(){
                        
                        setTimeout(sendToServer(),5000);
                        
                }
                
        });
}


function saveStatusLocally() {       
    var nimi = document.getElementById("nimi").value;
    var piirkond = document.getElementById("piirkond").value;
    var erakond = document.getElementById("erakond").value;
    var isikukood = document.getElementById("isikukood").value;
    window.localStorage.setItem("nimi", nimi);
    window.localStorage.setItem("piirkond", piirkond);
    window.localStorage.setItem("erakond", erakond);
    window.localStorage.setItem("isikukood", isikukood);       
}


function saadameformiminema(){
    document.getElementById("lisu").innerHTML= "Kandidaat edukalt lisatud";
}

function sendLocalStatus() {
  $.ajax({
                url:"ajax_request.php",
                type:"POST",
                data:{nimi:localStorage.getItem("nimi"),
                piirkond:localStorage.getItem("piirkond"),
                erakond:localStorage.getItem("erakond"),
                isikukood:localStorage.getItem("isikukood")
                },
        success: function(){
                saadameformiminema();
                localStorage.clear();          
        },
        error: function(){
                alert("error local storagega");
        }
  });
}