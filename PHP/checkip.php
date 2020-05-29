<?php

    $ip=$_SERVER['REMOTE_ADDR'];
    $ip=explode('.',$ip);

    $ip=$ip[0].'.'.$ip[1];

    
    if($ip=="192.168"){
       echo true;
       
       
       
    }else{
        echo false;
       
    }
?>
