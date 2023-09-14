<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        p {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
        #largerNumber{
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
<h1>Comparison Tool</h1>
<form method="POST" action="">
    <label for="num1">Number one:</label>
    <input type="number" name="num1" required><br><br>

    <label for="num2">Number two:</label>
    <input type="number" name="num2" required><br><br>

    <input type="submit" value="Compare">
</form>
<div id = largerNumber>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        // Use the ternary operator to determine the larger number
        $largerNumber = ($num1 > $num2) ? $num1 : $num2;

        // Display the result
        echo "<h2>Result:</h2>";
        echo "<p>The larger number is: $largerNumber</p>";
    }
    ?>
</div>
</body>
</html>