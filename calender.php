<?php
	function backto($arr,$now,$backstep)
  {
	$ar_len=count($arr);
	for($i=0;$i<$backstep;$i++){
			$now=$now-1;

			if($now==-1){$now=$ar_len-1;}
	}


	
	return $arr[$now];
  }
 

	$date_xq=date("w");
	$date_ts=date("t");
	$date_dqt=date("j");
	$yushu=array(0,1,2,3,4,5,6);
	$date_fristday=($date_dqt-1)%7;
	$fxq= backto($yushu,$date_xq,$date_fristday);
	$arr1=array();
	$p=1;
	$zhshu=ceil(($fxq+$date_ts)/7);
	if($fxq!=0){
		for($i=0;$i<$fxq;$i++){$arr1[]=0;}
		for($i=$fxq;$i<7;$i++){$arr1[]=$p; $p=$p+1;}
		}
	else {
		for($i=0;$i<7;$i++){$arr1[]=$p; $p=$p+1;}

		}
	$cal[]=$arr1;
	for($i=1;$i<$zhshu;$i++){
		$arrn=array();
		
		for($j=0;$j<7;$j++){
			if ($p>$date_ts)
				{$arrn[]=0; $p=$p+1;}
			else
				{$arrn[]=$p; $p=$p+1;}
		}
		$cal[]=$arrn;
	}
	
 ?>
<li>
		<table id="cal">
			<caption><?php echo date("Y")."年".date("n")."月";?><caption>
			<tr>
			  <th>日</th>
			  <th>一</th>
			  <th>二</th>
			  <th>三</th>
			  <th>四</th>
			  <th>五</th>
			  <th>六</th>
			  
			</tr>
			<?php 
				
			for($i=0;$i<$zhshu;$i++){
				echo "<tr>";
				for($j=0;$j<7;$j++){ 
					if($cal[$i][$j]!=0){
								if($cal[$i][$j]==$date_dqt) 
									echo "<td id=\"cal_today\">".$cal[$i][$j]."</td>";
								else
									echo "<td>".$cal[$i][$j]."</td>";}
					else
						{echo "<td> </td>";}
					}
				echo "</tr>";}
			?>
		</table>

</li>