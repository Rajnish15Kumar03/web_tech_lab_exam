
<!DOCTYPE html>
<html>
<head>
    <title>College Student Grade</title>

    <style>
        table {
            border-collapse: collapse;
            width: 400px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: lightgray;
        }
    </style>
</head>
<body>

    <h2>College Student Result Form</h2>

    <form method="POST">

        <label>Student Name:</label>
        <input type="text" name="name" required>
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

        <input type="submit" name="submit" value="Calculate Grade">

    </form>

    <?php

    if (isset($_POST['submit'])) {

        $name = htmlspecialchars($_POST['name']);

        $english = (float) $_POST['english'];
        $math = (float) $_POST['math'];
        $computer = (float) $_POST['computer'];

        $average = ($english + $math + $computer) / 3;

        if ($average >= 80) {
            $grade = "A";
        } elseif ($average >= 60) {
            $grade = "B";
        } elseif ($average >= 40) {
            $grade = "C";
        } else {
            $grade = "F";
        }

        echo "<h2>Student Result</h2>";

        echo "<table>";

        echo "<tr>
                <th>Details</th>
                <th>Marks / Result</th>
              </tr>";

        echo "<tr>
                <td>Student Name</td>
                <td>" . $name . "</td>
              </tr>";

        echo "<tr>
                <td>English</td>
                <td>" . $english . "</td>
              </tr>";

        echo "<tr>
                <td>Mathematics</td>
                <td>" . $math . "</td>
              </tr>";

        echo "<tr>
                <td>Computer Science</td>
                <td>" . $computer . "</td>
              </tr>";

        echo "<tr>
                <td>Average Marks</td>
                <td>" . number_format($average, 2) . "</td>
              </tr>";

        echo "<tr>
                <td>Grade</td>
                <td>" . $grade . "</td>
              </tr>";

        echo "</table>";

    }

    ?>

</body>
</html>