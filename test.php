<?php
/*****test by sanjay****/
/*****test by sanjay outlook ****/
$arr = array(
    array(
        'Name' => 'Trixie',
		'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
		),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ), 
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink'
        ),
); 
$color = array('blue','gray','yellow','purple');
$keyarr = array(); 
if(count($arr)){?>
<table>
 
	<?php
	foreach($arr as $key=>$val){ 
		
	    if($key==0){
			$i = 0;
			foreach($val as $key=>$val2){ 
				$back = 'style="background-color:'.$color[$i].'"';
				$tablehead .= "<th $back>$key</th>";
				$keyarr[] = $key; 
				$tablebody .= "<td $back>$val2</td>";
				$i++;
			} 
			$tablebody = "<tr >$tablebody</tr>";
		}else{
			$tablebody .= "<tr>";
			$i = 0;
			foreach($val as $val2){ 
				$back = 'style="background-color:'.$color[$i].'"';
				$k = $keyarr[$i];	
				$tablebody .= "<td $back>$val[$k]</td>";
				$i++;
			}
			$tablebody .= "</tr>";
		}?>
	   <tr> 
	<?php
	}
	echo  $tablehead.$tablebody;
	?>  
 </table>

<?php
} 
?> 