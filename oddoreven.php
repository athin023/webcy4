<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even Checker</title>
</head>
<body>

    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $number = $_GET["number"];

        if (is_numeric($number)) {
            $result = ($number % 2 == 0) ? "Even" : "Odd";
            echo "<p>The number $number is $result.</p>";
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }
    ?>

</body>
</html>
