<?php
include("connection.php");
//$_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
if (isset($_REQUEST['submit'])) {
    $sql = "DELETE FROM forms where id = {$_REQUEST['id']}";
    if (mysqli_query($conn, $sql)) {
        echo "Record Deleted!!";
    } else {
        echo "Error in deleting record";
    }
}
?>

<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php

    $sql_query = "SELECT * FROM forms";
    $result = mysqli_query($conn, $sql_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<h2 style='text-align:center'>FORM TABLE</h2>";
        echo "<table class='table table-bordered'>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAILID</th>
                <th>PHONENO</th>
                <th>ADDRESS</th>
                <th>Action</th>
            </tr>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['addr'] . "</td>";
            echo '<td colspan="2" align="center">
                    <form action="" method = "post">
                        <input type=hidden name=id value=' . $row['id'] . '>
                        <input type=submit class = "btn btn-sm btn-danger" name="submit" value = "Delete">
                    </form>
                  </td>';
            echo "<td>
                    <a href = 'update.php?idno=$row[id]&un=$row[username]&em=$row[email]&ph=$row[phone]&a=$row[addr]'>
                    <input type=submit class = 'btn btn-sm btn-primary' name='submit' value = 'Update'>
                    </a>
                </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>
</body>

</html>