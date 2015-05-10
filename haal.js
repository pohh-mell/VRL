function hääletafunc() {
		sendTable();
	}


	function sendTable(){
		var idekas = document.getElementById('fbide').value;
        $.ajax({
        		
                url:"ajax_send.php",
                type:"POST",
                data:{nimi: idekas,
                nr:document.getElementById("hääleta").value
                },
               
                
        });
}