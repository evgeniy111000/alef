<?php 
function bulls_and_cows($input_number){
	$wish_number='3810';
	$count_matched_numbers=0;
	$count_position_matched_numbers=0;
	$pos=0;
	for($i=0;$i<strlen($input_number);$i++){
		$pos=strpos($wish_number,$input_number[$i]);
		if (!($pos===false)){
			$count_matched_numbers++;
			if ($pos==$i)
				$count_position_matched_numbers++;     
		}
	}
	return $count_matched_numbers.'-'.$count_position_matched_numbers;
}
echo bulls_and_cows('2679').'<br>';
echo bulls_and_cows('1234').'<br>';
echo bulls_and_cows('5678').'<br>';
echo bulls_and_cows('0183').'<br>';
echo bulls_and_cows('3801').'<br>';
echo bulls_and_cows('3810').'<br>';
?>