<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration Form</title>
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
    .form-group {
        margin-bottom: 20px;
    }
    label {
        font-weight: bold;
    }
    input[type="text"], input[type="email"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    input[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Student Registration Form</h2>
    <form action="process.php" method="POST">
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="text" id="id" name="id" required>
        </div>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="rollno">rollNo:</label>
            <input type="text" id="rollno" name="rollno" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">
        </div>

        <div class="form-group">
            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
        </div>
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
