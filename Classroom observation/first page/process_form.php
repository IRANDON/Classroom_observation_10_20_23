<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['create'])) {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=faculty_evaluation", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $Uname = validate($_POST['Uname']);
        $Atime = date("Y-m-d H:i:s"); // Automatically set the current time
        $Usubject = validate($_POST['Usubject']);
        $Agrade = validate($_POST['Agrade']);
        $Adate = validate($_POST['Adate']);
        $Uobserver = validate($_POST['Uobserver']);
        $rating1 = isset($_POST['rating1']) ? intval($_POST['rating1']) : 0;
        $rating2 = isset($_POST['rating2']) ? intval($_POST['rating2']) : 0;
        $rating3 = isset($_POST['rating3']) ? intval($_POST['rating3']) : 0;
        $rating4 = isset($_POST['rating4']) ? intval($_POST['rating4']) : 0;
        $rating5 = isset($_POST['rating5']) ? intval($_POST['rating5']) : 0;

        $stmt = $pdo->prepare("INSERT INTO evaluation_data (Uname, Atime, Usubject, Agrade, Adate, Uobserver, rating1, rating2, rating3, rating4, rating5) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if ($stmt->execute([$Uname, $Atime, $Usubject, $Agrade, $Adate, $Uobserver, $rating1, $rating2, $rating3, $rating4, $rating5])) {
            // Data saved successfully
            echo "Data saved to the database.";
        } else {
            // Error occurred while saving data
            echo "Error: " . $stmt->errorInfo()[2];
        }
    } catch (PDOException $e) {
        // Handle database connection errors
        echo "Database Connection Error: " . $e->getMessage();
    }
}

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
