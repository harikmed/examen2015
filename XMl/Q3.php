<?php 
function initCarte($fichier){
$lesPlats=array();
    $plats = simplexml_load_file($fichier);  
    foreach ($plats->plat as $p) {  
	$plat=new Plat($p->categorie_plat,$p->nom_plat, $p->description_plat,$p->prix);
   $lesPlats[]=$plat;
    }  
	return $lesPlats;
	}
?>