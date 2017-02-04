<?php
/**
 * Created by PhpStorm.
 * User: ndodwaria
 * Date: 2/3/17
 * Time: 6:22 PM
 */
session_start();
	if(isset($_SESSION['uname']) && isset($_SESSION['pass']))
    {
        require 'conn.php';

        $sql2 = "SELECT * FROM userinfo";
        $result = $conn->query($sql2);

        if ($result->num_rows > 0) {
            // output data of each row
            ?>
            <!--<center><table style="border: 3px solid #f1f1f1;">
                    <tr><th>ID</th><th>Name</th><th>Age</th><th>Email</th><th>Contact</th><th>Field</th><th>Gender</th><th>Date</th><th>Description</th</tr>

                    <?php
                    while($row = $result->fetch_assoc()) {

                        ?>
                        <tr><td><?php echo $row["p_id"]."" ?></td><td><?php echo $row["name"]."" ?></td><td><?php echo $row["age"]."" ?></td>
                            <td><?php echo $row["email"]."" ?></td><td><?php echo $row["contact"]."" ?></td><td><?php echo $row["field"]."" ?></td>
                            <td><?php echo $row["sex"]."" ?></td><td><?php echo $row["dt"]."" ?></td><td><?php echo $row["description"]."" ?></td></tr>
                        <?php
                    }
                    ?>
                </table></center>
            <?php
        } else {
            echo "0 results";
        }
        //echo $drname."<br>";
        $conn->close();
        //echo $drname."<br>";
    }
    else
        header("Location: index.php");
	?>
</body>
</html>