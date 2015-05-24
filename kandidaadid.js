window.addEventListener("load", function(){
    getTable();
    setInterval(getTable,5000);
}, true);

function getTable(){
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
          document.getElementById("t01").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","katse.php",true);
    xmlhttp.send();
}

function getresult(url) {   
    $.ajax({
        url: url,
        type: "POST",
        data: {kandidaadid.nimi: $('input[name=kandidaadid.nimi]').val()},
        success: function(data){ $("#users-grid").html(data);}
   });
   return false
}
    getresult("katse.php");