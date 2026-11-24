<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q1</title>
</head>
<body>
    <h2>Student Details</h2>
    <?php
        // Replace the sample values below with your own details.
        $name = "AHMAD NASIHIN BIN SHAHARUDIN";
        $matricNumber = "CI250021";
        $course = "BIC21203 Web Development";
        $yearOfStudy = "2026";
        $address = "KKTU";
    ?>
    <table>
        <tr><th>Name</th><td><?php echo htmlspecialchars($name); ?></td></tr>
        <tr><th>Matric Number</th><td><?php echo htmlspecialchars($matricNumber); ?></td></tr>
        <tr><th>Course</th><td><?php echo htmlspecialchars($course); ?></td></tr>
        <tr><th>Year of Study</th><td><?php echo htmlspecialchars($yearOfStudy); ?></td></tr>
        <tr><th>Address</th><td><?php echo htmlspecialchars($address); ?></td></tr>
    </table>
</body>
</html>

