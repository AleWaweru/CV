 <?php
    //if (isset($_POST["submit"])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $message = $_POST['subject'];

    $conn = new mysqli('localhost', 'root', '', 'portfolio');
    if ($conn->connect_error) {
        die('connection Failed : ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO dbport(First_Name, Last_Name, Message) 
            VALUES(?, ?, ?)");
        $stmt->bind_param("sss", $fname, $lname, $message);
        $stmt->execute();

        echo "Submitted Successfully..";
        $stmt->close();
        $conn->close();
    }
    ?>
