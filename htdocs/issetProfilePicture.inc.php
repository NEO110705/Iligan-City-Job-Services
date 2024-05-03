<?php

if ($_SESSION['userId']){

    $profilePicture = $user["profilePicture"];
    $defaultProfilePicture = "<img src='img/defaultProfilePicture.png'>";
    
    if ($profilePicture !== null){
        echo $profilePicture;
    }else{
        echo $defaultProfilePicture;
    }
}
