<?php
/**
 * Created by PhpStorm.
 * User: ndodwaria
 * Date: 2/3/17
 * Time: 6:31 PM
 */
?>
<center>
<div id="sendNotice" >
    <p style="width: 90%">Send Notice : </p>
    <form action="sendMessage.php" method="POST" enctype="multipart/form-data">
    <table>
        <tr><td><label for="to">To</label></td>
            <td><input id="to" type="text" name="to" value="All"></td></tr>
        <tr><td><label for="title">Title</label></td>
            <td><input id="title" type="text" name="title"></td></tr>            
        <tr><td><label for="link">Url</label></td>
            <td><input id="link" type="url" name="link"></td></tr>
        <tr><td><label for="image">Choose Image </label></td>
            <td> <input type="file" name="fileToUpload" id="fileToUpload" /></td></tr>
         <tr><td><label for="noticetext">Notice </label></td>
             <td><textarea id="noticetext" rows="4" cols="30" name="noticetext" placeholder="Enter your message here"></textarea></td></tr>
    </table>
        <table>
            <tr><td><input id="sendB" type="submit" name="submit" value="Submit"></td></tr>
        </table>
    </form>
</div>
</center>
<?php
