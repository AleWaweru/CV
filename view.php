<?php
//require_once("dbconnect.php");
$query = "select * from dbport";
$result = mysqli_query($conn, $query);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />

    <title>View Records</title>


</head>

<body class="bd-dark">
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table bordered">
                        <tr>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Message</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        <?php
                        while ($raw = mysqli_fetch_assoc($result)) {
                            $fname = $raw['firstname'];
                            $lname = $raw['lastname'];
                            $message = $raw['subject'];

                        ?>
                            <tr>
                                <td><?php echo $fname ?></td>
                                <td><?php echo $lname ?></td>
                                <td><?php echo $message ?></td>
                                <td><a href="edit.php?GetName=<?php echo $fname ?>">Edit</a></td>
                                <td><a href="edit.php?del=<?php echo $lname ?>">Delete</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>