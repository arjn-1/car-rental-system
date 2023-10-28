<html>
    <form action="deleteadmin.php" method="post">
    <table>
        <tr>
            
            <td>Email: </td>
                <td><input type=email name="email" size=30></td>
            
        </tr>
    </table>
    <input type=submit name="upload" value="UPLOAD">
    </form>
    </html>

<?php
include("config.php");


if(isset($_POST['upload'])){
$f=$_POST['email'];

}
?>