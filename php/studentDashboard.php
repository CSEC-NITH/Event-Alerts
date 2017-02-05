<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
     <script>
            function showNotification(str) {
                if (str.length == 0) {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("content").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET", "notifications.php?q=1", true);
                    xmlhttp.send();
                }
            }  
            function showProfile(str) {
                if (str.length == 0) {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("content").innerHTML = this.responseText;
                        }
                    };file:///home/ndodwaria/PhpstormProjects/onlineNoticeBoard/index.html
                    xmlhttp.open("GET", "profile.php?q=1", true);
                    xmlhttp.send();
                }
            }                      
       </script>	
</head>
<body>
	<div class="main">
		<div class="header">
			<div class="appName" ><span>App Name</span></div>
			<div class="search">
				<input type="text" name="searchBar" class="searchBar" placeholder="search your friend....">
				<img src="../images/search-btn.png" width="30px" height="30px">
			</div>
		</div>

		<div class="sideBar">
			<div class="profile_image">
				<img src="../images/nitin.jpg" width="273px" height="250px" >
			</div>
			<div class="list">
				<div class="list_element"><img src="../images/home.png" width="25px" height="25px" class="home"><a href="#">Home</a></div>
				<div class="list_element"><img src="../images/profile.png" width="25px" height="25px" class="profile"><a onclick="showProfile('showme')">Profile</a></div>
				<div class="list_element"><img src="../images/chat.png" width="28px" height="25px" class="chat"><a href="#">Chat</a></div>
				<div class="list_element"><img src="../images/feedback.png" width="25px" height="25px" class="notification"><a onclick="showNotification('showme')">Feedback</a></div>
				<div class="list_element"><img src="../images/logout.png" width="25px" height="25px" class="logout"><a href="#">Logout</a></div>
			</div>
		</div>
		<div class = "mainContent" id="content">

		</div>
	</div>
</body>
</html>