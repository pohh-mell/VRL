<?
session_start();
?>
<h2>Pood</h2>
<form method="post">
<input type="submit" value="Piim 0.70 €" name="Piim" />
<input type="submit" value="Leib 0.75 €" name="Leib" />
<input type="submit" value="Sai 0.66 €" name="Sai" />
<input type="submit" value="Tühjenda ostukorv" name="tühjenda" />
</form>
<?
if ($_POST['Piim']){
	$_SESSION['Piim']++;
	// sessioonimuutuja 'piim' väärtust suurendatakse ühe võrra
}
if ($_POST['Sai']){
	$_SESSION['Sai']++;
}
if ($_POST['Leib']){
	$_SESSION['Leib']++;
}
if ($_POST['tühjenda']){
	$_SESSION['Piim']='';
	$_SESSION['Sai']='';
	$_SESSION['Leib']='';
}
?>
<p>Ostukorvis on
<?= $_SESSION['Piim'] ?> piima,
<?= $_SESSION['Leib'] ?> leiba,
<?= $_SESSION['Sai'] ?> saia.<p>

<p>Kaupade hindade summa:
<?= $_SESSION['Piim']*0.7 + $_SESSION['Leib']*0.75 + $_SESSION['Sai']*0.66 ?>
</p>