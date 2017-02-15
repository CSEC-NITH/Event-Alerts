<?php
/**
 * Created by PhpStorm.
 * User: ndodwaria
 * Date: 2/3/17
 * Time: 12:06 AM*/
    session_start();
    require 'conn.php';

?>
    <!doctype html>
    <html>
    <head>
        <title>Admin Panel</title>
        <link href="../css/main.css" rel="stylesheet" >
        <link href="../css/other.css" rel="stylesheet">
        <script>
            function showForm(str) {
                if (str.length == 0) {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("forForm").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET", "manageNotice.php?q=1", true);
                    xmlhttp.send();
                }
            }
            function showList(str) {
                if (str.length == 0) {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("forForm").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET", "registeredUser.php?q=1", true);
                    xmlhttp.send();
                }
            }            
        </script>
    </head>
    <body>
<div id="outermost" style="background:#e5ccff;">    
    <div id="menu">
        <div id="smbutton">
            <p><a href="adminPanel.php" id="ltext">Sent Messages</a></p>
        </div>        
        <div id="rubutton">
            <p><a onclick="showList('showme')"  id="ltext">Registered Users</a></p>
        </div>
        <div id="mnbutton">
            <p><a onclick="showForm('showme')" id="ltext">Manage Notification</a></p>
        </div>
        <div id="lbutton">
            <p><a href="logout.php" id="ltext">Logout</a></p>
        </div>
    </div>
    <div id="userinfo">
        <p>Total Registered User : 6340</p>
    </div>
    <div id="forForm">
        <center>
        <form action="deleteUser.php" method="POST">
            <table style="background:white; width:50%">
                <tr><td><input type="text" placeholder="Enter Message Title" name="title"></td>
                    <td><input type="submit" name="submit" value="Delete Message"></td></tr>
            </table>
        </form> 
    </center>        
    <div id="combine">
        <div id="notice">
            <h1 id="ntext">Sent : </h1>
            <?php
            $sql = "SELECT * FROM MESSAGE";
            $result = $conn->query($sql);
            //echo $result." ";
            if ($result->num_rows > 0) {
                // output data of each row
                ?>
                <center><table style="border: 3px solid black; background:white;color:white;">
                        <tr><th>TITLE</th><th>MESSAGE</th><th>LINK</th><th>DATE</th>
                        <?php
                        while($row = $result->fetch_assoc()) {

                            ?>
                            <tr><td><?php echo $row["TITLE"]."" ?></td><td><?php echo $row["MESSAGE"]."" ?></td>
                                <td><?php echo $row["LINK"]."" ?></td><td><?php echo $row["DATE"]."" ?></td>
                            </tr><br>
                            <?php
                        }
                        ?>
                    </table></center>
                <?php
            } 
            else {
                echo "0 results";
            }
            //echo $drname."<br>";
            $conn->close(); ?>
        </div>
    </div>
    </div>
</div>
    </body>
    </html>
<?php
