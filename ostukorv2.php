<?
$otsitav = $_POST['otsitav'];
$kordi = $_POST['kordi'];
if ($otsitav == 0) {
	$otsitav = rand(1,30);
	$kordi = 0;
	//  muutuja $kordi loendab pakkumisi
}
// $otsitav saab juhusliku väärtuse vahemikus 1-30.
$pakkumine = $_POST['arv'];
if ($pakkumine) {
	//kontrollime kas kasutaja tegi pakkumise
	$kordi = $kordi + 1;
	// suurendame muutuja $kordi väärtus 1 võrra
}
if ($pakkumine == $otsitav) {
// kui kasutaja on ära arvanud õige arvu, siis nullime muutuja $otsitav
	$otsitav = 0;
}
?>
<html>
<head>
	<title>Arvamismäng</title>
</head>
<body>
	<form method="post">
	Tee oma pakkumine;
		<input type="text" name="arv" size="5" />
		<input type="hidden" name="otsitav" value="<?= $otsitav ?>" />
		<input type="hidden" name="kordi" value="<?= $kordi ?>" />
		<input type="submit" value="OK" />
	</form>
<?
if ($pakkumine && $pakkumine > $_POST['otsitav']) {
	echo "Sinu pakutud arv $pakkumine on liiga suur";
}
if ($pakkumine && $pakkumine < $_POST['otsitav']) {
	// kas muutujal $pakkumine on väärtus JA kas $pakkumine on väiksem kui $otsitav
	echo "Sinu pakutud arv $pakkumine on liiga väike";
}
if ($pakkumine && $pakkumine == $_POST['otsitav']) {
	echo "Sinu pakutud arv $pakkumine on õige! Arvamiseks kulus $kordi korda. Arva järgmist arvu.";
}
?>
</body>
</html>