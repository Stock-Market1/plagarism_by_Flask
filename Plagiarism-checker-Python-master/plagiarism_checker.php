<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Plagiarism Checker</title>
</head>
<body>

<?php
    // Execute the Python script and capture its output
    $output = shell_exec("C:/xampp/htdocs/Plagiarism-checker-Python-master/Plagiarism-checker-Python-master/app.py");

    // Parse the output into an array of tuples
    $plagiarism_results = array();
    $lines = explode("\n", $output);
    foreach ($lines as $line) {
        $fields = explode(",", $line);
        if (count($fields) == 3) {
            $plagiarism_results[] = $fields;
        }
    }

    // Display the results in a table
    echo "<table>";
    foreach ($plagiarism_results as $result) {
        echo "<tr><td>{$result[0]}</td><td>{$result[1]}</td><td>{$result[2]}</td></tr>";
    }
    echo "</table>";
?>

</body>
</html>
