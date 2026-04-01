<?php

$nID=$_POST["nid"];
$mGender=$_POST["mGender"];
$nphone=$_POST["nphone"];
$nemail=$_POST["nemail"];
$nemergency_name=$_POST["nemergency_name"];
$nemergency_phone=$_POST["nemergency_phone"];
$naddress=$_POST["naddress"];
$mtired=$_POST["mtired"];
$npay=$_POST["npay"];
$nfood=$_POST["nfood"];
$comment=$_POST["comment"];
$nold=$_POST["nold"];

echo "你的姓名是:".$_POST["nName"]."<br/>";
echo "你的生日是:".$_POST["birthday"]."<br/>";
echo "你的身分證字號:".$nID."<br/>";
echo "你的年紀:".$nold."<br/>";
echo "你的電話號碼:".$nphone."<br/>";
echo "你的Email:".$nemail."<br/>";

if($mGender=="m"){
    echo "性別是:男性<br/>";
}
else{
    echo "性別是:女性<br/>";
}
echo "你的緊急聯絡人:".$nemergency_name."<br/>";
echo "你的緊急聯絡人電話:".$nemergency_phone."<br/>";
echo "你的通訊地址:".$naddress."<br/>";
echo "欲報名的梯次:".$mtired."<br/>";
echo "繳費方式:".$npay."<br/>";

if($nfood=="葷"){
    echo "用餐習慣:葷<br/>";
}
else{
    echo "用餐習慣:素<br/>";
}

echo "對於活動的活動意見:".$comment."<br/>";
?>

