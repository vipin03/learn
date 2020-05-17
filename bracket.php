<?php

$array = array(
	        array('{','}'),
			array('[',']'),
			array('(',')')
		 );

$char='{()[{({})[]()}]}([])';
// $char='{([])}{}';
$check =[];


	for($i=0;$i<strlen($char);$i++ ){
		$isopen= checkIfopen($char[$i]);
		if($isopen['stat']){
			$check[]=$char[$i];
			echo "<br> inserting ....".$char[$i]."<br>";
		}else{
			if(end($check)== $isopen['open_el'])
			{	
				$element_i =end(array_keys($check));
				unset($check[$element_i]);
				echo "<br> removing ....". $isopen['open_el']."<br>";
			}
		}		
	}
	
	if(empty($check)){
		echo 'parenthesis is corrrent'	;
	}else{
		echo 'parenthesis is not corrrent'	;
	}	
function checkIfopen($el){
	$open=array('(','[','{');
	$closed=array(')',']','}');
	if(in_array($el,$open)){
		return array('stat'=>true);
	}else{
		
		return array('stat'=>false,'open_el'=>$open[array_search($el,$closed,true)] );
	}
}