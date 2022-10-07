<?php
header("Location: product.php");
$servername = "localhost";
$username = "id19668682_root";
$password = "Yag/L0[4|u&X|usf";
$dbname = "id19668682_listdb";
$sku = $_POST['SKU'];
$fname = $_POST['name'];
$price = $_POST['price'];
$vfirst = $_POST['height'];
$vsecond = $_POST['width'];
$vthird = $_POST['length'];
$size = $_POST['size'];
$weight = $_POST['weight'];

if($vfirst == null)
{
    $vfirst = '0';
}
if($vsecond == null)
{
    $vsecond = '0';
}
if($vthird == null)
{
    $vthird = '0';
}
if($size == null)
{
    $size = '0';
}
if($weight == null)
{
    $weight = '0';
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO list_table (sku, fname, price,vfirst,vsecond,vthird,size,weight) VALUES ('$sku', '$fname', '$price', '$vfirst','$vsecond','$vthird','$size','$weight')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$referer = $_SERVER['HTTP_REFERER'];


$conn->close();
?>

