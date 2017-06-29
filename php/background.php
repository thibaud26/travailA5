<?php
	if(!isset($tab)){
		$tab = array();
	}
	if(isset($_COOKIE['background'])) {
		$tab = unserialize($_COOKIE['background']);
	}
	if(count($tab) > 16){
		$tab = array();
	}

	do {
		$number = mt_rand(0, 16);/*variable contenant le numéros entre nombre_minimum et maximum*/
	} while(in_array($number, $tab));

	$tab[] = $number;
	$tab = serialize($tab);
	setcookie("background",$tab);

?>



<style type="text/css">
html {
    background-image: url(../background/background<?php echo $number; ?>.jpg);/*charge une image au hasard en rajoutant un numéro a background ex"background12.jpg"*/
   /* animation: backFadeIn 10s; */
}
</style>
