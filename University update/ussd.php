<?php

$host="localhost";
$user="root";
$pass="";
$db="updates";

$opening_date=$_POST["Opening_date"];
$closing_date=$_POST["Closing_date"];
$exam_start_date=$_POST["Exams_start_date"];
$exam_end_date=$_POST["Exams_end_date"];
$proposal_date=$_POST["Project_proposal_date"];
$defense_date=$_POST["Project_defense_date"];
$career_date=$_POST["Career_date"];
//$first_yr=$_POST["first_year"];
//$second_yr=$_POST["second_year"];
//$third_yr=$_POST["third_year"];
//$fourth_yr=$_POST["fourth_year"];


// Create connection
$conn = new mysqli($host, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO keydates(opening_date, closing_date, exam_start_date, exam_end_date, project_proposal_date, project_defense_date, career_date) VALUES ($opening_date,$closing_date,$exam_start_date,$exam_end_date,$proposal_date,$defense_date,$career_date)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>