<?php include('../includes/config.php'); ?>


<?php
// Preuzimanje promjenljivih pomocu AJAX-a

$first_number=$_POST['first_number']; 
$second_number=$_POST['second_number'];
$result=$_POST['result'];


//SQL skripta za upis podataka u bazu

$sql = "INSERT INTO calc_event (first_number, second_number, result)
VALUES ('$first_number', '$second_number', '$result')";

// Upis podataka u bazu
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
