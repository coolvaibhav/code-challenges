<?php
function extract_str($str){
	$len=strlen($str);
	$str_arr=array();
	$current_position=0;
	/**loop through all the**/
	for($i=0;$i<$len;$i++){
			
		if($i>0){						
			if(isset($str_arr[$current_position])){
					
					$first_position= strpos($str_arr[$current_position],$str[$i]);
					
					if($first_position !==false){					
					
					$temp_current_position=$current_position;
					
					$str_arr[$temp_current_position+1]='';			
						$current_position++;
					}					
			}
			
			if($current_position == 0){				
				$str_arr[$current_position]=$str_arr[$current_position].$str[$i];			
			}else{
				$str_arr[$current_position]=$str_arr[$current_position].$str[$i];			
			}
			
		}else{
			$str_arr[$current_position]=$str[$i];
		}		
		
	}

	for($i=0;$i<count($str_arr);$i++){
		$str_count[]=strlen($str_arr[$i]);
		
	}
	return max($str_count);
}

echo extract_str('abrkaabcdefghijjxxx')."<br>";
echo extract_str('abcabcbb')."<br>";
echo extract_str('bbbbb')."<br>";
echo extract_str('pwwkew')."<br>";