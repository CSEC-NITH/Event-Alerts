<?php
/**
 * Created by PhpStorm.
 * User: ndodwaria
 * Date: 2/3/17
 * Time: 6:28 PM
 */
$conn = new mysqli("localhost",'root','atul1234','HACKATHON');
if($conn){
    //echo "connection succussefully made";
}
else
    echo "Oops there is some problem";
