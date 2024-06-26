<?php
// Check if form is submitted using POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and sanitize input
    $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
    $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
    $umur = isset($_POST['umur']) ? intval($_POST['umur']) : 0;

    // Collect values for n1 to n20
    $n_values = [];
    for ($i = 1; $i <= 20; $i++) {
        $n_values["n$i"] = isset($_POST["n$i"]) ? intval($_POST["n$i"]) : 0;
    }

    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kuisioner_db";

    // Create connection to MySQL database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert data into 'responses' table
    $stmt = $conn->prepare(
        "INSERT INTO responses (nama, jenis_kelamin, umur, n1, n2, n3, n4, n5, n6, n7, n8, n9, n10, n11, n12, n13, n14, n15, n16, n17, n18, n19, n20) 
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );

    // Check for SQL prepare error
    if (!$stmt) {
        die('SQL prepare error: ' . $conn->error);
    }

    // Bind parameters to the prepared statement
    $stmt->bind_param(
        "ssiiiiiiiiiiiiiiiiiiiii",
        $nama, $jenis_kelamin, $umur,
        $n_values['n1'], $n_values['n2'], $n_values['n3'], $n_values['n4'], $n_values['n5'], $n_values['n6'], $n_values['n7'], 
        $n_values['n8'], $n_values['n9'], $n_values['n10'], $n_values['n11'], $n_values['n12'], $n_values['n13'], $n_values['n14'], 
        $n_values['n15'], $n_values['n16'], $n_values['n17'], $n_values['n18'], $n_values['n19'], $n_values['n20']
    );

    // Execute prepared statement and check for success
    if ($stmt->execute()) {
        // Data saved successfully
        echo "Data berhasil disimpan!";
    } else {
        // If there is an error
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

} else {
    // If request method is not POST, show error message
    echo "Invalid request method.";
}
?>
