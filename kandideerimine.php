
<?php
    include "header-k.php";
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script type="text/javascript">

function whatIsYourCurrentStatus() {
    if (navigator.onLine) {
        var nimi = document.getElementById("nimi").value;
        var piirkond = document.getElementById("piirkond").value;
        var erakond = document.getElementById("erakond").value;
        var isikukood = document.getElementById("isikukood").value;
        sendToServer();
     } else {
        alert("netti pole");
        saveStatusLocally();
     }      
}

function sendToServer(){
        alert("sendtoserver");
        $.ajax({
                url:"ajax_request.php",
                type:"POST",
                data:{param:"auhh"},
        success: function(data){
                alert(data);
        },
        error:function(){
                alert("error");
        }
                
});
}

function saveStatusLocally() {       
    alert("nettipole");
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
}
 
 
window.addEventListener("load", function() {
    if (navigator.onLine) {
        alert("alguses on nett");
    }
    window.addEventListener("online", function() {
        alert("online oleme");
    }, true);
    window.addEventListener("offline", function() {
        alert("You're now offline. If you update your status, it will be sent when you go back online");
    }, true);
}, true);

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
                <button class="nupp" type="submit" onclick="whatIsYourCurrentStatus()" id="submit-button">Lisa end kandidaadiks</button>
            </form>
        </div>
    </div>
        
<?php include "footer.php"; ?>