<?php
// Pastikan ID yang diberikan valid
if (isset($_GET['id']) && !empty($_GET['id'])) {
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

    // Prepare SQL statement to retrieve data from 'responses' table based on ID
    $stmt = $conn->prepare("SELECT * FROM responses WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Set parameter from GET data
    $id = $_GET['id'];

    // Execute prepared statement
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<h2>Hasil Kuisioner untuk " . $row['nama'] . "</h2>";
            echo "<p>Jenis Kelamin: " . $row['jenis_kelamin'] . "</p>";
            echo "<p>Umur: " . $row['umur'] . "</p>";
            echo "<h3>Nilai Pertanyaan:</h3>";
            echo "<ul>";
            echo "<li>1. Saya gelisah. Saya tidak dapat diam untuk waktu lama: " . $row['n1'] . "</li>";
            echo "<li>2. Saya sering merasa tidak berdaya atau tidak memiliki harapan: " . $row['n2'] . "</li>";
            // Tambahkan tambahan pertanyaan lainnya di sini
            echo "</ul>";
        }
    } else {
        echo "Data tidak ditemukan.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "ID tidak valid.";
}
?>
