<?php
$mysqli = new mysqli("188.213.5.74", "admin_ilir", "*********", "*********");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Escape user inputs for security, anti SQL injection
$chip = $mysqli->real_escape_string($_REQUEST['chip']);
$valor = $mysqli->real_escape_string($_REQUEST['valor']);

// Attempt insert query execution
$sql = "INSERT INTO mediciones (CHIP, VALOR) VALUES ('$chip', '$valor')";

if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    //header("Location: filneame.php");
}

// Close connection
$mysqli->close();
?>
