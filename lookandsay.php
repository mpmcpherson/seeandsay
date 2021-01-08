<?php
$iterationTarget = $argv[1];
$iterationCurrent = 1;

$seeString = "1";

for($iterationCurrent=0;$iterationCurrent<=$iterationTarget;$iterationCurrent++){
	
	echo "Current iteration: " . $iterationCurrent . " Output: " . $seeString . "\n";
	sleep(1);
	$seeString = seeAndSay($seeString);
}

function seeAndSay($seeString){
	$output = "";
	$count = 0;
	$currTar = "";

	for($i=0;$i<strlen($seeString);$i++){
		if(empty($currTar)){
			$currTar = $seeString[$i];
			$count=1;
			continue;
		}
		if($seeString[$i]===$currTar){
			$count++;
		}else{
			$output .= $count . $currTar;
			$currTar = $seeString[$i];
			$count=1;
		}
	}
	$output .= $count . $currTar;
	return $output;
}
?>