$(document).ready(function() {
    function addingListener() {
        window.addEventListener("popstate", function(e) {
            if (e.state == null) {
                hideAll();
            } else if (e.state.view == "Era") {
                Erakonnad();
            } else if (e.state.view == "kand") {
                Kandidaadid();
            }
        });
    }

    function hideAll() {
        $("#Era").hide();
        $("#kand").hide();
    }

    function Erakonnad() {
        $("#Era").show();
        $("#kand").hide();
    }

    function Kandidaadid() {
        $("#Era").hide();
        $("#kand").show();
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

    $("#ErakonnadNupp").click(function(){
        Erakonnad();
        window.history.pushState({'view': 'Era'}, "Erakonnad", "/tulemused.php#Erakonnad");
        addingListener();
        return false;
    }); 
    $("#KandidaadidNupp").click(function(){
        Kandidaadid();
        window.history.pushState({'view': 'kand'}, "Kandidaadid", "/tulemused.php#Kandidaadid");
        addingListener();
        return false;
    });
   
});