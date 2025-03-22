<?php
    include('connect.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $insert = "INSERT INTO users VALUES (NULL,'$name', $age, '$address')";
        $insertSQL = mysqli_query($connect, $insert);

        echo "<script>alert('Data Added')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        form {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px; 
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: calc(100% - 12px); 
            padding: 8px;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; 
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
          margin-bottom: 1rem;
          text-decoration: none;
          color: #007bff;
        }

        a:hover{
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <a href="index.php">&lt;- Back</a>
    <form action="add.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name"><br>

        <label for="age">AGE</label>
        <input type="number" name="age" id="age"><br>
        
        <label for="address">Address</label>
        <input type="text" name="address" id="address"><br>
        
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>