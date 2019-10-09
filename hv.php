<?php
system(clear);
date_default_timezone_set('Asia/Jakarta');
$xx = "\033[1;35m
========================================================
                \033[1;33m  Script Nuyul Hite View  \033[1;35m
=====\e[1;32mCreator\e[0m\e[1;35m================\e[1;32m@kanxck\033[1;35m====================
{$end}\n";
echo "$xx";
while(True){


$user = "masali";
$ip = "52.191.193.71\n";


    $headers = array();
    $headers[] = "User-Agent: Android/6.0.1; Blacktail/1.7.0; Manufacturer/Haier; Model/Pecinta JANDES69";
    $headers[] = "Host: www.hitview.info";
    $headers[] = "Connection: Keep-Alive";

$data = array(
'username' => $user,
'ipaddr' => $ip,
);
$data = json_encode($data);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.hitview.info/mobile/listview.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$resp = curl_exec($ch);
curl_close($ch);
 $json = json_decode($resp, true);
//echo " \033[1;36mresult \033[0m =>  \033[1;31".$resp." \n";
echo " \033[1;33m[\033[1;35m".date('H:i:s')."\033[1;33m]\e[0m # \033[1;31mviewUser \033[0m => ".$json["userview"]." \n";
echo " \033[1;33m[\033[1;35m".date('H:i:s')."\033[1;33m]\e[0m # \033[1;33mlink chanel \033[0m => ".$json["link_channel"]." \n";
echo " \033[1;33m[\033[1;35m".date('H:i:s')."\033[1;33m]\e[0m # \033[1;34murutan \033[0m   => ".$json["urutan"]." \n";
$body = array(
'username' => $user,
'ipaddr' => $ip,
'link' => $json["link_channel"],
'userview' => $json["userview"],
'urutan' => $json["urutan"],
);
$body = json_encode($body);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.hitview.info/mobile/insertview.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$rsp = curl_exec($ch);
curl_close($ch);
 $view = json_decode($rsp, true);
//echo "\033[1;32mStatus View \033[0m ".$view." \n\n";

$xxx = array(
'username' => $user,
);
$xxx = json_encode($xxx);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.hitview.info/mobile/profile.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xxx);
$resp = curl_exec($ch);
curl_close($ch);
 $gf = json_decode($resp, true);
  echo " \033[1;33m[\033[1;35m".date('H:i:s')."\033[1;33m]\e[0m # \033[1;36mStatus View \033[1;31m[\033[1;32m".$view["status"]."\033[1;31m] \033[0m=> \033[1;33mPoints \033[1;31m[\033[1;32m".$gf["jum_pt_now"]."\033[1;31m]\033[0m \033[1;33mAll Points\033[1;31m[\033[1;32m".$gf["jum_pt_now_all"]."\033[1;31m]\033[0m\n\n";
//sleep(rand(5*60,6*60));
}






