<?php
include('connection.php');
error_reporting(0);
$idno = $_GET['idno'];
$un = $_GET['un'];
$em = $_GET['em'];
$ph = $_GET['ph'];
$a = $_GET['a'];

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
}
?>

<!doctype html>
<html>

<head>
    <!--bootstrap 5.1 !-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>FORM</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center col-md-6 offset-md-3 my-5">
            <div class="card border-info" style="max-width: 30rem;">
                <div class="card-header bg-info text-white">
                    <h1 class="text-center">Form</h1>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type=hidden name=id value="<?php "$idno" ?>">
                        <div class="mb-3">
                            <label class="form-label">Name </label>
                            <input class="form-control" type="text" value="<?php echo "$un" ?>" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email </label>
                            <input class="form-control" type=" email" name="email" value="<?php echo "$em" ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">phoneNo </label>
                            <input class="form-control" type=" text" name="phone" value="<?php echo "$ph" ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address </label>
                            <input class="form-control" type="text" name="address" value="<?php echo "$a" ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" type="submit" name="submit">Submit Changes</button>

                        <button type="button" class="btn btn-primary" onclick="window.location.href='displaynew.php'"> Done </button>
                        <!--  <button onclick="window.location.href='/displaynew.php'" class="btn btn-primary" type="submit" name="submit">Update</button>-->

                </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>