$(document).ready(function() {
    function addingListener() {
        window.addEventListener("popstate", function(e) {
            if (e.state == null) {
                hideAll();
            } else if (e.state.view == "t01") {
                Erakonnad();
            } else if (e.state.view == "t02") {
                Kandidaadid();
            }
        });
    }

    function hideAll() {
        $("#t01").hide();
        $("#t02").hide();
    }

    function Erakonnad() {
        $("#t01").show();
        $("#t02").hide();
    }

    function Kandidaadid() {
        $("#t01").hide();
        $("#t02").show();
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
        window.history.pushState({'view': 't01'}, "Erakonnad", "/tulemused.php#Erakonnad");
        addingListener();
        return false;
    }); 
    $("#KandidaadidNupp").click(function(){
        Kandidaadid();
        window.history.pushState({'view': 't02'}, "Kandidaadid", "/tulemused.php#Kandidaadid");
        addingListener();
        return false;
    });
   
});