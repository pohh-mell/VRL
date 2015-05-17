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

function eemaldafunc(){

                var idekas = document.getElementById('fbide').value;
        $.ajax({
                        
                url:"ajax_delete.php",
                type:"POST",
                data:{nimi: idekas,
                },
               
                
        });


}