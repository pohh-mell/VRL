
<?php
    include "header-k.php";
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script type="text/javascript">

window.addEventListener("load", function(){
        alert("auhhh");
        alert(localStorage.length);

        if(localStorage.length==4){
        sendLocalStatus();}

}, true);

function sendToServer(){
        alert("sendtoserver");
        $.ajax({
                url:"ajax_request.php",
                type:"POST",
                data:{nimi:document.getElementById("nimi").value,
                piirkond:document.getElementById("piirkond").value,
                erakond:document.getElementById("erakond").value,
                isikukood:document.getElementById("isikukood").value
                },
                success: function(){
                        localStorage.clear();
                },      
                error: function(){
                        
                        alert("error nupu vajutusel laadimisel");
                        saveStatusLocally();
                        setTimeout(sendToServer(),5000);
                        
                }
                
        });
}

function saveStatusLocally() {       
    alert("nettipole ehk save statuslocally");
    var nimi = document.getElementById("nimi").value;
    var piirkond = document.getElementById("piirkond").value;
    var erakond = document.getElementById("erakond").value;
    var isikukood = document.getElementById("isikukood").value;
    window.localStorage.setItem("nimi", nimi);
    window.localStorage.setItem("piirkond", piirkond);
    window.localStorage.setItem("erakond", erakond);
    window.localStorage.setItem("isikukood", isikukood);       
}




function sendLocalStatus() {
  alert("sendlocalstatus");
  $.ajax({
                url:"ajax_request.php",
                type:"POST",
                data:{nimi:localStorage.getItem("nimi"),
                piirkond:localStorage.getItem("piirkond"),
                erakond:localStorage.getItem("erakond"),
                isikukood:localStorage.getItem("isikukood")
                },
        success: function(){
                alert("local storagest lisatud");
                localStorage.clear();          
        },
        error: function(){
                alert("error local storagega");
        }
  });
}
 
 


</script>
       
    <div class="container">
        <div class="middle">
            <!-- kandidaadi lisamine -->
            <form class="ff1" action="<?php $_PHP_SELF ?>" method="post">
                <div class="block">
                <label>Nimi:</label>
                <input type="text" id="nimi" name="nimi">
                </div>
                <div class="block">
                <label>Piirkond:</label>
                <input type="text" id="piirkond" name="piirkond">
                </div>
                <div class="block">
                <label>Erakond:</label>
                <input type="text" id="erakond" name="erakond">
                </div>
                <div class="block">
                <label>Isikukood:</label>
                <input type="text" id="isikukood" name="isikukood">
                </div>
                <button class="nupp" type="submit" onclick="sendToServer()" id="submit-button">Lisa end kandidaadiks</button>
            </form>
        </div>
    </div>
        
<?php include "footer.php"; ?>