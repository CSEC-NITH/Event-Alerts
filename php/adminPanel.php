<?php
/**
 * Created by PhpStorm.
 * User: ndodwaria
 * Date: 2/3/17
 * Time: 12:06 AM
 */
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
    <div id="menu">
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
    <div id="combine">
        <div id="notice">
            <h1 id="ntext">Sent : </h1>
            <table>
                <thead>
                <td>To</td><td>Message</td><td>Date</td>
                </thead>
                <tr>
                    <td id="sender">Nandu</td><td id="message">Hello Guys Hello Guys Hello Guys</td><td id="date">3-feb-2017</td>
                </tr>
                <tr>
                    <td id="sender">Atul</td><td id="message">Hello Guys</td><td id="date">3-feb-2017</td>
                </tr>
            </table>
        </div>
    </div>
    </div>
    </body>
    </html>
<?php
