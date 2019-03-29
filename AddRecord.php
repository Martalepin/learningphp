<?php
$link = mysqli_connect("localhost", "root", " ", "hardwarestore");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// attempt insert query execution
$sql = "INSERT INTO customers (ID,FirstName, LastName) VALUES ('16', 'Marta', 'Pineda')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
