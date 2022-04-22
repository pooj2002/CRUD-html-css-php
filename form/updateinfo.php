<?php
include('connection.php');
error_reporting(0);
$idno = $_GET['idno'];
$un = $_GET['un'];
$em = $_GET['em'];
$ph = $_GET['ph'];
$a = $_GET['a'];
//echo "$idno";
echo " ";
echo "$un";

if (isset($_REQUEST['submit'])) {
    $un = $_POST['name'];
    $em = $_POST['email'];
    $ph = $_POST['phone'];
    $a = $_POST['address'];
    $id_no = $_REQUEST['id'];

    $query = "UPDATE forms SET username = '$un', email = '$em', phone = '$ph', addr = '$a' Where id = '$idno'";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Record Updated";
        echo "$idno";
    } else {
        echo "error in updating Record";
    }
} else {
    echo "submit not set";
}
?>
<meta http-equiv="refresh" content="2; url =http://localhost/form/displaynew.php" />