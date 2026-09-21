<!DOCTYPE html>
<html>
<head>
    <title>Student Marks Result</title>
</head>
<body>

    <h2>Student Marks Form</h2>

    <form method="POST">

        <label>Student Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label>Roll Number:</label>
        <input type="text" name="roll" required>
        <br><br>

        <label>English Marks:</label>
        <input type="number" name="english" min="0" max="100" required>
        <br><br>

        <label>Mathematics Marks:</label>
        <input type="number" name="math" min="0" max="100" required>
        <br><br>

        <label>Computer Science Marks:</label>
        <input type="number" name="computer" min="0" max="100" required>
        <br><br>

        <input type="submit" name="submit" value="Calculate Result">

    </form>

    <?php

    if (isset($_POST['submit'])) {

        $name = htmlspecialchars($_POST['name']);
        $roll = htmlspecialchars($_POST['roll']);

        $english = (float) $_POST['english'];
        $math = (float) $_POST['math'];
        $computer = (float) $_POST['computer'];
    
        $total = $english + $math + $computer;

        $percentage = ($total / 300) * 100;

        if ($percentage >= 40) {
            $result = "Pass";
        } else {
            $result = "Fail";
        }

        echo "<h2>Student Result</h2>";

        echo "Student Name: " . $name . "<br>";
        echo "Roll Number: " . $roll . "<br>";
        echo "Total Marks: " . $total . " / 300<br>";
        echo "Percentage: " . number_format($percentage, 2) . "%<br>";
        echo "Result: " . $result;

    }

    ?>

</body>
</html>