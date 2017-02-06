<?php
session_start();
if(!isset($_SESSION['user']))
{
  header('location:../index.php');
}
else{

?>

<!DOCTYPE html>
<html>
<head>
  <title>chatbox</title>
  <link rel="stylesheet" type="text/css" href="../css/main1.css"/>
<script src="../js/jquery-3.1.1.min.js"></script>
  <script>
  window.onload= function(){
  document.getElementsByTagName("form")[0].addEventListener("submit", sendmessage);
function sendmessage(e) {
  var str=document.getElementById("messagefield").value;
  console.log(str);
    if (str.trim() == "") {
        console.log("Hello ");
        document.getElementById("messagefield").innerHTML = "";
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementsByClassName("chatsection")[0].innerHTML = this.responseText;
                var msgs = document.getElementsByClassName("msg");
                var last = msgs[msgs.length - 1];
                last.scrollIntoView();
            }

            else {
              console.log(this.status);
            }
        }
        var msg = document.getElementById('messagefield').value;
         var str1 = "?msg=" + msg ;
        xmlhttp.open("GET","messagedatabase.php?"+str1,true);
        xmlhttp.send();
        document.getElementById("messagefield").value = "";

    }
    e.preventDefault();

}

setInterval(function(){document.getElementById("messagefield").innerHTML.value = "";
  if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementsByClassName("chatsection")[0].innerHTML = this.responseText;
                var msgs = document.getElementsByClassName("msg");
                var last = msgs[msgs.length - 1];
                last.scrollIntoView();
            }

            else {
              
            }
        }

        xmlhttp.open("GET", "logs.php");
        xmlhttp.send();
}, 1000);
}

/*$(document).ready(function(e){
  $.ajaxSetup({cache:false});
  setInterval(function(){
    $('#chatsec').load('logs.php');
  },1000);
});
*/
</script>
  
</head>
<body background-color="red">
   
  <div class="form">
   
  	<div class="chatsection" id="chatsec" style = "overflow: auto;">

  	</div>
  	<div class="messagesection" >
      <form method="post" action = "" >
  		<table border="0" cellspacing="0" cellpadding="0" width="100%">
  			<tr>
  				<td width="80%"><input type="text" name="message" id="messagefield" placeholder="Enter message"></td>
  				<td width="20%"><input type="submit" class="sendbutton" name="submit" value="Send " ></td>
  			</tr>
  		</table>
    </form>

  	</div>
      
    
</div>


</body>

</html>

<?php } ?>


