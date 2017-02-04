<?php
/**
 * Created by PhpStorm.
 * User: ndodwaria
 * Date: 2/3/17
 * Time: 6:22 PM
 */
    session_start();
	//if(isset($_SESSION['user']))
    //{
        require 'conn.php';

        $sql = "SELECT * FROM USER";
        $result = $conn->query($sql);
        //echo $result." ";
        if ($result->num_rows > 0) {
            // output data of each row
            ?>
            <center><table style="border: 3px solid black; background:#33404d;color:white;">
                    <tr><th>ID</th><th>USERNAME</th><th>NAME</th><th>ROLL NO</th><th>EMAIL</th>
                    <?php
                    while($row = $result->fetch_assoc()) {

                        ?>
                        <tr><td><?php echo $row["ID"]."" ?></td><td><?php echo $row["USERNAME"]."" ?></td>
                            <td><?php echo $row["NAME"]."" ?></td><td><?php echo $row["ROLL_NO"]."" ?></td>
                            <td><?php echo $row["EMAIL"]."" ?></td></tr><br>
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
        $conn->close();
        //echo $drname."<br>";
    /*}
    else
        header("Location: index.php");
	?>*/