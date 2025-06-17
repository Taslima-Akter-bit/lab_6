<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
        $students = [
            [
            'name'=> 'Alice',
            'program'=>'BIP',
            'age'=>21
            ],
            [
            'name'=> 'Bob',
            'program'=>'BIs',
            'age'=>20
            ],
            [
            'name'=> 'Raju',
            'program'=>'BIt',
            'age'=>22
            ],
        ];
    ?>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php
            foreach ($students as $student) {
                echo "<tr>";
                echo "<td>{$student['name']}</td>";
                echo "<td>{$student['program']}</td>";
                echo "<td>{$student['age']}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
