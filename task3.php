<?php 
function is_dublicate_numbers($number){
	$array=[0,0,0,0,0,0,0,0,0,0];
	$input_number=strval($number);
	for($i=0;$i<strlen($input_number);$i++)
		$array[$input_number[$i]]+=1;
	$result=false;
	for($i=0;$i<count($array);$i++){
		if ($array[$i]>1){
			$result=true;
			break;
		}
	}
	return $result;
}
$sum=0;
for($i=1;$i<=1000;$i++)
	if(!is_dublicate_numbers($i)) 
		$sum+=$i;
echo 'сумма='.$sum;
?>