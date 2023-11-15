<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['create'])) {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=faculty_evaluation", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Retrieve and validate other form data
        $Uname = validate($_POST['Uname']);
        
        date_default_timezone_set('Asia/Hong_Kong'); // Set the timezone to +08:00 Beijing, Chongqing, Hong Kong
        $Atime = date("g:i:s A");
        
        $Usubject = validate($_POST['Usubject']);
        $subjectc = validate($_POST['subjectc']);
        $Agrade = validate($_POST['Agrade']);
        $Adate = validate($_POST['Adate']);
        $Uobserver = validate($_POST['Uobserver']);

        // Retrieve and validate ratings
        $ratings = array();
        for ($i = 1; $i <= 15; $i++) {
            $ratingName = 'rating' . $i;
            $ratings[$i] = isset($_POST[$ratingName]) ? intval($_POST[$ratingName]) : 0;
        }

        // Calculate totals for each rating
        $total1 = array_sum(array_filter($ratings, function($value) { return $value == 1; }));
        $total2 = array_sum(array_filter($ratings, function($value) { return $value == 2; }));
        $total3 = array_sum(array_filter($ratings, function($value) { return $value == 3; }));
        $total4 = array_sum(array_filter($ratings, function($value) { return $value == 4; }));
        $total5 = array_sum(array_filter($ratings, function($value) { return $value == 5; }));
        $weightedAverage = calculateWeightedAverage($total1, $total2, $total3, $total4, $total5);

        // Prepare the SQL statement to insert data into the database
        $stmt = $pdo->prepare("INSERT INTO evaluation_data (Uname, Atime, Usubject, subjectc, Agrade, Adate, Uobserver, 
            rating1, rating2, rating3, rating4, rating5, rating6, rating7, rating8, rating9, rating10, 
            rating11, rating12, rating13, rating14, rating15, total1, total2, total3, total4, total5, weightedAverage) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if ($stmt->execute([$Uname, $Atime, $Usubject, $subjectc, $Agrade, $Adate, $Uobserver, 
            $ratings[1], $ratings[2], $ratings[3], $ratings[4], $ratings[5], 
            $ratings[6], $ratings[7], $ratings[8], $ratings[9], $ratings[10], 
            $ratings[11], $ratings[12], $ratings[13], $ratings[14], $ratings[15], 
            $total1, $total2, $total3, $total4, $total5, $weightedAverage
        ])) {
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

function calculateWeightedAverage($total1, $total2, $total3, $total4, $total5) {
    $weightedAverage = ($total1 + $total2 + $total3  + $total4  + $total5);
   // $weightedAverage = ($total1 * 1 + $total2 * 2 + $total3 * 3 + $total4 * 4 + $total5 * 5) / ($total1 + $total2 + $total3 + $total4 + $total5);
    return $weightedAverage;
}
?>
