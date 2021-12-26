
<?php
include("../db_connect.php");
$id = $_POST['idd'];
$sql2 = "DELETE FROM countryUser  WHERE id={$id}";
$query2 = mysqli_query($connect, $sql2);
if ($query2 === true) {
    echo "Successfully data deleted";
} else {
    echo "Failed to delete";
}
?>