<?php

include("Mobile_Detect.php");
$detect = new Mobile_Detect();

if($detect->isAndroidOS()){
	header("Location:http://gdjh.vxinyou.com/down/a.html");

}else if($detect->isiOS()){
    header("Location:http://gdjh.vxinyou.com/down/b.html"); 
}else{
	header("Location:http://www.vxinyou.com");
}

