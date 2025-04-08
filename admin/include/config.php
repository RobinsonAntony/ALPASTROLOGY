<?php

// $con= new mysqli('localhost','root','','u273925517_alp_astrologys');

$con= new mysqli('localhost','u273925517_alp_astrologys','Loginalporg@0432','u273925517_alp_astrologys');

if(!$con){
    echo"connect error".$con->error;
}

?>