<?php
$link = "http://e-haaletus.azurewebsites.net/";
include "header-r.php";
$lst_page = $_SERVER['HTTP_REFERER'];
$_SESSION['lst_page'] = $lst_page;
?> 
	<div class="container">
		<div class="middle">
			<div class="row logisissetxt">
				<p>
					Oled sattunud lehele, mis on mõeldud ainult sisselogitud kasutajatele. Lehe nägemiseks logi sisse. Sisselogimiseks on nupp üleval paremal nurgas. 
				</p>
			<div>
		</div>
	</div>
<?php include "footer.php"; ?>
