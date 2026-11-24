<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q2</title>
</head>
<body>
    <h2>Student List</h2>
    <?php
        $students = [
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Bob',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
            ]
        ];
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo htmlspecialchars($student['name']); ?></td>
                <td><?php echo htmlspecialchars($student['program']); ?></td>
                <td><?php echo htmlspecialchars((string) $student['age']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>