#!/usr/bin/php
<?php
require_once('phpagi/phpagi.php');

$agi=new AGI();
$ramal=$argv[1];
//$ramal=214918291;

	$a="URL=".$ramal; 
	$contents = file_get_contents($a); 
	$result = json_decode($contents, true);	




		if($result != null){
		$permitir='liberar';
		}else {
		$permitir=0;
		}



	$agi->set_variable("RESULT", $permitir);


exit();

?>
