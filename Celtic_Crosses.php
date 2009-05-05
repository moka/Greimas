<HTML>
<!-- 作成日 2009/4/14  10:55:35 PM -->
<HEAD>
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<META NAME="GENERATOR" CONTENT="mi">
<TITLE>ケルト十字法</TITLE>
</HEAD>
<BODY>


<?php

/* それぞれのカードがどれになるかは、ここで乱数を格納する　（ループをつかわずダブリを覗く*/
 $tarrotNum = range(0 , 21);  
 srand((double)microtime()*1000000); 
 shuffle($tarrotNum);  



function random_show_tarrot($Num){

  
/*あらかじめタロットの画像ファイル名を配列に格納しておく（名前や含意やコメントも同様）*/
$tarrotName = array("愚者","魔術師","女教皇","女帝","皇帝","教皇","恋人","戦車","正義","隠者","運命の輪","力","吊された男","死神","節制","悪魔","塔","星","月","太陽","審判","世界");
$tarrotGazo = array("fool.jpg","magician.jpg","highpriestess.jpg","empress.jpg","emperor.jpg","hierophant.jpg","lovers.jpg","chariot.jpg","justice.jpg","hermit.jpg","wheel.jpg","strength.jpg","hangedman.jpg","death.jpg","temperance.jpg","devil.jpg","tower.jpg","star.jpg","moon.jpg","sun.jpg","judgement.jpg","world.jpg");

$tarrotMeaning = array(
 "派手な衣装を着た青年。足元の断崖にも、足に齧りつく犬にも気付かず、楽しげに道を進んでいる。",
 "半ば香具師にして半ば賢者を思わせる奇妙な帽子をかぶった男は様々な道具を前の机に並べている。",
 "若く美しい女の頭には王冠のついた被り物、膝の上には開かれた大きな書物がのっている。",
"威厳ある女性は野外の豪華な背景の中で腰をかけている．冠をかぶり錫杖と紋章付きの盾を持っている。",
"こうてい",
"きょうこう",
"こいびと",
"せんしゃ",
"せいぎ",
"いんじゃ",
"うんめいのわ",
 "ちから",
 "つるされたおとこ",
"しにがみ",
"せっせい",
 "あくま",
 "とう",
"ほし",
"つき",
"たいよう",
 "しんぱん",
"せかい");

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
<td><!--*１行１段 */--></td>
<td><!--*１行２段 */-->
３．顕在意識：
<?php random_show_tarrot(2); ?>
</td>

<td><!--*１行３段 */--></td>
<td><!--*１行４段 */-->
１０．最終結果：
<?php random_show_tarrot(9); ?>
</td>

<tr>
<td rowspan="2"><!--*２行１段 */-->
５．過去：
<?php random_show_tarrot(4); ?>
</td>
<td><!--*２行２段 */-->
１．質問：
<?php random_show_tarrot(0); ?>
</td>
<td rowspan="2"><!--*２行３段 */-->
６．未来：
<?php random_show_tarrot(5); ?>
</td>
<td><!--*２行４段 */-->
９．願望：
<?php random_show_tarrot(8); ?>
</td>
<tr>
<!--３行１段--だったところ/-->
<!--<td></td>-->
<!--*３行２段 */-->
<td>
２．障害／対策：
<?php random_show_tarrot(1); ?>
</td>
<!--*３行３段だったところ */-->
<!--<td></td>-->
<td><!--*３行４段 */-->
８．周囲：
<?php random_show_tarrot(7); ?>
</td>
<tr>
<td><!--*4行１段 */--></td>
<td><!--*4行２段 */-->
４．現実：
<?php random_show_tarrot(3); ?>
</td>
<td><!--*4行３段 */--></td>
<td><!--*4行４段 */-->
７．質問者：
<?php random_show_tarrot(6); ?>
</td>

</table>

</BODY>
</HTML>
