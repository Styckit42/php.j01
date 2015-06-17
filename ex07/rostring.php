<?php
	$tab = array();
	$ligne = trim($argv[1]);
	$tab = explode(" ", $ligne);
	$tab[] = $tab[0];
	$ct = count($tab);
	for ($i = 1; $i < $ct; $i++)
	{
		echo $tab[$i]."\n";
	}
	//print_r($tab);
?>