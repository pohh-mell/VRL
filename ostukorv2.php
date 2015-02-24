<?
session_start();

ostukorv = array('piim','piim','leib','sai','leib');
$kuipalju = array_count_values($ostukorv);

?>
<h2>Pood</h2>
<form method="post">
<input type="submit" value="Piim 0.70 €" name="Piim" />
<input type="submit" value="Leib 0.75 €" name="Leib" />
<input type="submit" value="Sai 0.66 €" name="Sai" />
<input type="submit" value="Tühjenda ostukorv" name="tühjenda" />
</form>
<?
ostukorv = array();
if ($_POST['tühjenda']){
	
}
?>
<p>Ostukorvis on
<?= $_SESSION['Piim'] ?> piima,
<?= $_SESSION['Leib'] ?> leiba,
<?= $_SESSION['Sai'] ?> saia.<p>

<p>Kaupade hindade summa:
<?= $_SESSION['Piim']*0.7 + $_SESSION['Leib']*0.75 + $_SESSION['Sai']*0.66 ?>
</p>