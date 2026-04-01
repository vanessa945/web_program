<?php
$fID="vanessa";
$fPWD="a1133301";
if(isset($_POST["uID"])&&isset($_POST["uPWD"])){
    $uID=$_POST["uID"];
    $uPWD=$_POST["uPWD"];

    if($fID==$uID&&$fPWD==$uPWD){
         header("Location: form.php");
        exit();
    }
    else{   
        echo "登入失敗";
        header("Refresh:1;url=login.php");
    }
}
?>