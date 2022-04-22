<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "formdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

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
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td><td>" . $row['phone'] . "</td><td>" . $row['addr'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>
</body>

</html>