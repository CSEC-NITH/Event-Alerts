<?php
/**
 * Created by PhpStorm.
 * User: ndodwaria
 * Date: 2/2/17
 * Time: 5:57 PM
 */
?>
<!doctype html>
<html>
<head>
    <title>Student Panel</title>
    <link href="../css/main.css" rel="stylesheet" >
</head>
<body>
    <div id="menu">
        <div id="lbutton">
            <p ><a href="logout.php" id="ltext">Logout</a></p>
        </div>
    </div>
    <div id="combine">
        <div id="profile">
            <center><img  id="pp" src="../images/2.jpg" alt="profile Pic" >
            <p id="ptext">Narendra Dodwaria</p>
            <p id="ptext">Roll No : 14MI536</p>
            <p id="ptext">narendra.dodwaria@gmail.com</p></center>
        </div>
        <div id="notice">
            <h1 id="ntext">Notices : </h1>
            <table>
                <thead>
                    <td>Sender</td><td>Message</td><td>Date</td>
                </thead>
                <tr>
                    <td id="sender">Nandu</td><td id="message">Hello Guys Hello Guys Hello Guys</td><td id="date">3-feb-2017</td>
                </tr>
                <tr>
                    <td id="sender">Nandu</td><td id="message">Hello Guys</td><td id="date">3-feb-2017</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
<?php

