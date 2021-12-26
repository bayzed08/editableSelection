<?php
include("../db_connect.php");
$username = $_POST['name'];
$country = $_POST['country'];
$sql = "insert into countryUser(fullname,country,entryDate) values('$username','$country',now())";
$connect->query($sql);
echo "Successfully Added";
