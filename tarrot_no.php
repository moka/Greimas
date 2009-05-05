<HTML>
<!-- 作成日 2009/4/14  10:55:35 PM -->
<HEAD>
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<META NAME="GENERATOR" CONTENT="mi">
<TITLE>タロット×グレマス（ダブりなし）</TITLE>
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
