s<HTML>
<!-- 作成日 2009/4/14  10:55:35 PM -->
<HEAD>
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<META NAME="GENERATOR" CONTENT="mi">
<TITLE>アテネの学堂×グレマス（ダブりなし）</TITLE>
</HEAD>
<BODY>


<?php

/* それぞれのカードがどれになるかは、ここで乱数を格納する　（ループをつかわずダブリを覗く*/
 $tarrotNum = range(0 , 9);  
 srand((double)microtime()*1000000); 
 shuffle($tarrotNum);  



function random_show_tarrot($Num){

  
/*あらかじめタロットの画像ファイル名を配列に格納しておく（名前や含意やコメントも同様）*/
$tarrotName = array("パルメニデス","プラトン","ピタゴラス","ヘラクレイトス","エピクロス","ゼノン","アリストテレス","アルキピアデス","ディオゲネス","アヴェロエス");
$tarrotGazo = array("Parmenides.jpg","Platon.jpg","Pythagoras.jpg","Herakleitos.jpg","Epicurus.jpg","zenon.jpg","Aristotle.jpg","Alcibiades.jpg","Diogenes.jpg","Averroes.jpg");



	global $tarrotNum;

		  /*	 echo "$tarrotNum[$Num]<br>\n" ;	*/   
			$index_num = $tarrotNum[$Num];
			
			echo "$tarrotName[$index_num]<br>\n" ;
			$index_name = $tarrotNum[$index_num];

			echo "<img src=\"./images/";
			echo "$tarrotGazo[$index_num]";
			echo  "\" width=128><br>\n";

  /*	echo "<font size=-1>$tarrotMeaning[$index_num]</font><br>\n";　*/   
   }
?>







<table>
<td width=150>
<!--*１行１段 */-->
送り手：
<?php random_show_tarrot(0); ?>
</td>
<td>
<!--*１行２段 */-->
<center><font size=+2>→</font></center>
</td>

<td width=150>
<!--*１行３段 */-->
対象／目標：
<?php random_show_tarrot(1); ?>
</td>
<td>
<!--*１行４段 */-->
<center><font size=+2>→</font></center>
</td>

<td width=150>
<!--*１行５段 */-->
受け手：
<?php random_show_tarrot(2); ?>
</td>
<tr>
<td><!--*２行１段 */--></td>
<td><!--*２行２段 */--></td>
<td><!--*２行３段 */-->
<center><font size=+2>↑</font></center>
</td>
<td><!--*２行４段 */--></td>
<td><!--*２行５段 */--></td>
<tr>
<td width=150><!--３行１段-->
援助者：
<?php random_show_tarrot(3); ?>
</td>
<td><!--*３行２段 */-->
<center><font size=+2>→</font></center>
</td>
<td width=150><!--*３行３段 */-->
主人公：
<?php random_show_tarrot(4); ?>
</td>
<td><!--*３行４段 */-->
<center><font size=+2>←</font></center>
</td>
<td width=150><!--*３行５段 */-->
敵対者：
<?php random_show_tarrot(5); ?>
</td>
</table>

</BODY>
</HTML>
