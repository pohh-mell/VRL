<?
$arv = rand(1,10);
$arv2 = rand(1,10);
$arv3 = $arv-$arv2;
$arv4 = $arv2-$arv;
if ($arv > $arv2) {
	echo "Esimene arv $arv on $arv3 võrra suurem kui arv $arv2.";
}
else if ($arv == $arv2) {
	echo "Arv $arv on võrdne arvuga $arv2.";
}
else {
	echo "Esimene arv $arv on $arv4 võrra väiksem kui arv $arv2.";
}	
?>