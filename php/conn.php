<?php
/**
 * Created by PhpStorm.
 * User: ndodwaria
 * Date: 2/3/17
 * Time: 6:28 PM
 */
$conn = new mysqli("localhost",'root','nd123.in','chatapp');
if($conn){
    //echo "connection succussefully made";
}
else
    echo "Oops there is some problem";
