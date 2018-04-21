<?php
date_default_timezone_set('Asia/Jakarta');
$yx=opendir('myToken'); while($isi=readdir($yx)){ if($isi != '.' && $isi != '..'){ $token=$isi;
$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=05&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ $x=$stat[data][$i-1][id].'~'; $y= fopen('komen.txt','a'); fwrite($y,$x); fclose($y);
$nom = $stat[data][$i-1][comments][count]+1;
$nom = $stat[data][$i-1][comments][count]+1;
$name= json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$nam=$name[name]; $ama= explode(' ',$nam); $nama=$ama[0]; $mr=''.$nama;
$kata= array('cinta.php','motivasi.php','motto.php','bijak.php',); $kata=$kata[rand(0,count($kata)-1)]; $katakata= auto('http://ciambar.us.to/'.$kata);
$jam= array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','00',);
$sapa=array(

 
'💚 
🙂TABIYAT TO THEEK HEINA @['.$stat[data][$i-1][from][id].':1] 🙂
🙂BACK KU NHE AA RAHY🙂
🙂YELY PROOF CLOSE KA🙂
🙂SITE POWERED BY🙂
💚AYESHBOTTER,TK💚  ',
 
  

 

 
 
 );
$ucapan = gmdate('H',time()+7*3600); $ucapan = str_replace($jam,$sapa,$ucapan);
$pesan= array(
'🎭🎭🎭 Wow ◕► @['.$stat[data][$i-1][from][id].':1] 🎭🎭🎭

◄◕◕◕ Bot Site ► AyeshBotter,tk ◕◕◕►   
 ◄◕-------▬▬▬▬▬▬▬▬▬▬-------◕►
◄◕◕◕ >> MrDj AyeSh BoTTerx << ◕◕◕►

',

'😘 JUST NOW BACK FAXT 😘 @['.$stat[data][$i-1][from][id].':1] 😘

😘 AYESH BOTTERX 😘
                                        
😘 AYESHBOTTER,TK 😘

',

'💚 
Hi Topper ! 🙂  @['.$stat[data][$i-1][from][id].':1]  🙂
😉 I 🚆 Am  💵 Like 💴 Your 🆚 Post 🎯
🚘 Be 📻 Always 🔯 Happy 🤶
💢 Powered 🤩 By 🤖
💚 AYESHBOTTER.TK 💚 

',

'😘 YELLO CLOSE KA PROOF 😘 @['.$stat[data][$i-1][from][id].':1] 😘

 😘 AYESH BOTTERX  😘

 😘 AYESHBOTTER,TK 😘  

',

'😘 POKE BACK KR YR 😘 @['.$stat[data][$i-1][from][id].':1] 😘

 😘 AYESH BOTTERX 😘

 😘 AYESHBOTTER,TK 😘
 
 
 ',

'😘 ADD CLOSE FAST 😘 @['.$stat[data][$i-1][from][id].':1] 😘

 😘 AYESH BOTTERX  😘

 😘 AYESHBOTTER,TK  😘




',












);
$pesan=$pesan[rand(0,count($pesan)-1)];
$message=$pesan;
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($message).'&access_token='.$token.'&method=POST');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/reactions?type=LOVE&method=POST&access_token='.$token.'');
}
}
}
function auto($url){ $data = curl_init(); curl_setopt($data,CURLOPT_RETURNTRANSFER,1); curl_setopt($data,CURLOPT_URL, $url); $hasil = curl_exec($data); curl_close($data); return $hasil;
}
?>
