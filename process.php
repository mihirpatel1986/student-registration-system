<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Successful</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 500px;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .success {
        color: green;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $rollno = $_POST["rollno"];
        $course = $_POST["course"];
        $address = $_POST["address"];
        
        echo "<p class='success'>Registration Successful!</p>";
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "student";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO student (id, name, rollno, email, phone, course, address) VALUES ('$id', '$name', '$rollno', '$email', '$phone', '$course', '$address')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div class='record'>";
            echo "<p>ID: " . $row["id"]. "</p>";
            echo "<p>Name: " . $row["name"]. "</p>";
            echo "<p>RollNo: " . $row["rollno"]. "</p>";
            echo "<p>Email: " . $row["email"]. "</p>";
            echo "<p>Phone: " . $row["phone"]. "</p>";
            echo "<p>Course: " . $row["course"]. "</p>";
            echo "<p>Address: " . $row["address"]. "</p>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }

    $sql = "UPDATE student SET name='priyansh' WHERE name='mihir patel'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $sql = "DELETE FROM student WHERE rollno=36";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }



    $conn->close();
    ?>
</div>
</body>
</html>
