<?php
include("db_connect.php");
$sql123 = "SELECT * FROM countryUser ORDER BY id";
$query123 = mysqli_query($connect, $sql123);

$output = "";

while ($row = $query123->fetch_assoc()) :
    $output .= '<tr>
    <td>' . $row["fullName"] . '</td>
    <td>' . $row["country"] . '</td>
    <td>' . $row["isActive"] . '</td>
    <td>
    <button type="button" class="btn btn-primary" name="edit" id="' . $row['id'] . '" onclick="editData(' . $row['id'] . ');">Edit</button>
    <button type="button" class="btn btn-danger" name="delete" id="' . $row['id'] . '" onclick="deleteData(' . $row['id'] . ')">Delete</button>
    </td>
</tr>';
endwhile;


echo $output;
