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
    <form>
    <table>
        <tr><td><label for="to">To</label></td>
            <td><input id="to" type="text" name="to"></td></tr>
        <tr><td><label for="links" >Link </label></td>
            <td><input id="links" type="url" name="links"></td></tr>
        <tr><td><label for="image">Choose Image </label></td>
            <td><input id="image" type="file" name="image"></td></tr>
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
