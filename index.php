<?php 
	

	class forTask
	{
	    static function getNum($arr)
	    {
	    	$number='';
			foreach($arr as $key => $value){
				$number.=$value;
			}
			return  intval(strrev($number));
	    }

	    static function getArray($number)
	    {
	    	$arr=[];
	    	$number = strrev($number);
	    	$xs = strlen($number);
			for ($i=0; $i <$xs ; $i++){
				$arr+=["$i" => $number[$i]];
			}
			return $arr;
	    }
	}
	




	$arr1 = [1,2,3,4,5];
	$arr2 = [1,2,3,4,5];
	$result = forTask::getNum($arr1)+forTask::getNum($arr1);
	$newArr = forTask::getArray($result);
	print_r($newArr);
	
 ?>
