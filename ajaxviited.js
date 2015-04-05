$(document).ready(function() {
    function addingListener() {
        window.addEventListener("popstate", function(e) {
            if (e.state == null) {
                hideAll();
            } else if (e.state.view == "Erakonnad") {
                Erakonnad();
            } else if (e.state.view == "Kandidaadid") {
                Kandidaadid();
            }
        });
    }

    function hideAll() {
        $("#Erakonnad").hide();
        $("#Kandidaadid").hide();
    }

    function Erakonnad() {
        $("#Erakonnad").show();
        $("#Kandidaadid").hide();
    }

    function Kandidaadid() {
        $("#Erakonnad").hide();
        $("#Kandidaadid").show();
    }


    var url = window.location.href;
    console.log(url.search("#"));
    if (url.search("#") == -1) {
        hideAll();
    } else {
        var a = url.substr(url.indexOf("#") + 1);
        if (a == "Erakonnad") {
           Erakonnad();
        } else if (a == "Kandidaadid") {
            Kandidaadid();
        } else {
            hideAll();
        }
    }

    $("#Erakonnad").click(function(){
        Erakonnad();
        window.history.pushState({'view': 't01'}, "Erakonnad", "/tulemused.php#Erakonnad");
        addingListener();
        return false;
    }); 
    $("#Kandidaadid").click(function(){
        Kandidaadid();
        window.history.pushState({'view': 't02'}, "Kandidaadid", "/tulemused.php#Kandidaadid");
        addingListener();
        return false;
    });
   
});