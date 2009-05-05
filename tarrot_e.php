<HTML>
<!-- 作成日 2009/4/14  10:55:35 PM -->
<HEAD>
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<META NAME="GENERATOR" CONTENT="mi">
<TITLE>tarot->Greimas' actants</TITLE>
</HEAD>
<BODY>


<?php

 $tarrotNum = range(0 , 21);  
 srand((double)microtime()*1000000); 
 shuffle($tarrotNum);  



function random_show_tarrot($Num){
$tarrotName = array("fool","magician","highpriestess","empress","emperor","hierophant","lovers","chariot","justice","hermit","wheel","strength","hangedman","death","temperance","devil","tower","star","moon","sun","judgement","world");
$tarrotGazo = array("fool.jpg","magician.jpg","highpriestess.jpg","empress.jpg","emperor.jpg","hierophant.jpg","lovers.jpg","chariot.jpg","justice.jpg","hermit.jpg","wheel.jpg","strength.jpg","hangedman.jpg","death.jpg","temperance.jpg","devil.jpg","tower.jpg","star.jpg","moon.jpg","sun.jpg","judgement.jpg","world.jpg");

	global $tarrotNum;

			$index_num = $tarrotNum[$Num];
			
			echo "$tarrotName[$index_num]<br>\n" ;
			$index_name = $tarrotNum[$index_num];

			echo "<img src=\"./images/";
			echo "$tarrotGazo[$index_num]";
			echo  "\" width=128><br>\n";

   }
?>







<table>
<td width=150>
<!--*１column１row */-->
sender :
<?php random_show_tarrot(0); ?>
</td>
<td>
<!--*１column２row */-->
<center><font size=+2>→</font></center>
</td>

<td width=150>
<!--*１column３row */-->
object :
<?php random_show_tarrot(1); ?>
</td>
<td>
<!--*１column４row */-->
<center><font size=+2>→</font></center>
</td>

<td width=150>
<!--*１column５row */-->
receiver : 
<?php random_show_tarrot(2); ?>
</td>
<tr>
<td><!--*２column１row */--></td>
<td><!--*２column２row */--></td>
<td><!--*２column３row */-->
<center><font size=+2>↑</font></center>
</td>
<td><!--*２column４row */--></td>
<td><!--*２column５row */--></td>
<tr>
<td width=150><!--３column１row-->
helper : 
<?php random_show_tarrot(3); ?>
</td>
<td><!--*３column２row */-->
<center><font size=+2>→</font></center>
</td>
<td width=150><!--*３column３row */-->
subject : 
<?php random_show_tarrot(4); ?>
</td>
<td><!--*３column４row */-->
<center><font size=+2>←</font></center>
</td>
<td width=150><!--*３column５row */-->
opponent :
<?php random_show_tarrot(5); ?>
</td>
</table>

</BODY>
</HTML>
