<?php

function get_information(){
    $host="dannextech.com";
    $user="dannexte";
    $pass="*******";
    $db="dannexte_asiko";
    
    // Create connection
    $conn = new mysqli($host, $user, $pass, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT DISTINCT * FROM info";
    $result = $conn->query($sql);
    
    
    
    
            if ($result->num_rows > 0) {
                return $result;
            } else {
                return "nothing";
            }
            $conn->close();
}
	  
// Reads the variables sent via POST from our gateway
	$sessionId   = $_POST["sessionId"];
	$serviceCode = $_POST["serviceCode"];
	$phoneNumber = $_POST["phoneNumber"];
	$text        = $_POST["text"];
	if ( $text == "" ) {
	     // This is the first request. Note how we start the response with CON
	     $response  = "CON What information do you need from MMUST information log\n";
	     $response .= "1. Key dates \n";
	     $response .= "2. Fee totals";
	}
	else if ( $text == "1" ) {
	  // Business logic for first level response
	  $response = "CON Choose account information you want to view \n";
	  $response .= "1. Opening date\n";
	  $response .= "2. Closing date\n";
	  $response .= "3. Exam start date\n";
	  $response .= "4. Exam end date\n";
	  $response .= "5. Project proposal date\n";
	  $response .= "6. Project defense date\n";
	  $response .= "7. Career date";
	  
	  
	 }
	 else if($text == "2") {
	  // Business logic for first level response
	  // This is a terminal request. Note how we start the response with END
	  //$response = "END Your phone number is $phoneNumber";
	  $response = "CON Choose year you want to view \n";
	  $response .= "1. First year\n";
	  $response .= "2. Second year\n";
	  $response .= "3. Third year\n";
	  $response .= "4. Fourth year\n";
	 }
	 else if($text == "1*1") {
	  // This is a second level response where the user selected 1 in the first instance
	  //$accountNumber  = "ACC1001";
	  // This is a terminal request. Note how we start the response with END
	  $result = get_information();
	  
	  // output data of each row
        		while($row = $result->fetch_assoc()) {
        			/*echo $row['opening_date']."<br/>";
        			echo $row['closing_date']."<br/>";
        			echo $row['exam_start_date']."<br/>";
        			echo $row['exam_end_date']."<br/>";
        			echo $row['project_proposal_date']."<br/>";
        			echo $row['project_defense_date']."<br/>";
        			echo $row['career_date']."<br/>";
        			echo $row['first_year']."<br/>";
        			echo $row['second_year']."<br/>";
        			echo $row['third_year']."<br/>";
        			echo $row['fourth_year']."<br/>";*/
                    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                    $response = "END The opening is ".$row['opening_date'];
        			 }
	  
	 }
	    
	 else if ( $text == "1*2" ) {
	  
	     // This is a second level response where the user selected 1 in the first instance
	     //$balance  = "KES 10,000";
	     // This is a terminal request. Note how we start the response with END
	     $result = get_information();
	  
	  // output data of each row
        		while($row = $result->fetch_assoc()) {
        			/*echo $row['opening_date']."<br/>";
        			echo $row['closing_date']."<br/>";
        			echo $row['exam_start_date']."<br/>";
        			echo $row['exam_end_date']."<br/>";
        			echo $row['project_proposal_date']."<br/>";
        			echo $row['project_defense_date']."<br/>";
        			echo $row['career_date']."<br/>";
        			echo $row['first_year']."<br/>";
        			echo $row['second_year']."<br/>";
        			echo $row['third_year']."<br/>";
        			echo $row['fourth_year']."<br/>";*/
                    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                     $response = "END The closing date is ".$row['closing_date'];
        			 }
	  
	    
	}


	 else if ( $text == "1*3" ) {
	  
	     // This is a second level response where the user selected 1 in the first instance
	     //$balance  = "KES 10,000";
	     // This is a terminal request. Note how we start the response with END
	     
	     $result = get_information();
	  
	  // output data of each row
        		while($row = $result->fetch_assoc()) {
        			/*echo $row['opening_date']."<br/>";
        			echo $row['closing_date']."<br/>";
        			echo $row['exam_start_date']."<br/>";
        			echo $row['exam_end_date']."<br/>";
        			echo $row['project_proposal_date']."<br/>";
        			echo $row['project_defense_date']."<br/>";
        			echo $row['career_date']."<br/>";
        			echo $row['first_year']."<br/>";
        			echo $row['second_year']."<br/>";
        			echo $row['third_year']."<br/>";
        			echo $row['fourth_year']."<br/>";*/
                    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                    $response = "END The exam start date is ".$row['exam_start_date'];
        			 }
	  
	     
	     
	}
		    
	 else if ( $text == "1*4" ) {
	  
	     // This is a second level response where the user selected 1 in the first instance
	     //$balance  = "KES 10,000";
	     // This is a terminal request. Note how we start the response with END
	     $result = get_information();
	  
	  // output data of each row
        		while($row = $result->fetch_assoc()) {
        			/*echo $row['opening_date']."<br/>";
        			echo $row['closing_date']."<br/>";
        			echo $row['exam_start_date']."<br/>";
        			echo $row['exam_end_date']."<br/>";
        			echo $row['project_proposal_date']."<br/>";
        			echo $row['project_defense_date']."<br/>";
        			echo $row['career_date']."<br/>";
        			echo $row['first_year']."<br/>";
        			echo $row['second_year']."<br/>";
        			echo $row['third_year']."<br/>";
        			echo $row['fourth_year']."<br/>";*/
                    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                    $response = "END The exam end date is ".$row['exam_end_date'];
        			 }
	  
	     
	     
	}
		    
	 else if ( $text == "1*5" ) {
	  
	     // This is a second level response where the user selected 1 in the first instance
	     //$balance  = "KES 10,000";
	     // This is a terminal request. Note how we start the response with END
	     
	     $result = get_information();
	  
	  // output data of each row
        		while($row = $result->fetch_assoc()) {
        			/*echo $row['opening_date']."<br/>";
        			echo $row['closing_date']."<br/>";
        			echo $row['exam_start_date']."<br/>";
        			echo $row['exam_end_date']."<br/>";
        			echo $row['project_proposal_date']."<br/>";
        			echo $row['project_defense_date']."<br/>";
        			echo $row['career_date']."<br/>";
        			echo $row['first_year']."<br/>";
        			echo $row['second_year']."<br/>";
        			echo $row['third_year']."<br/>";
        			echo $row['fourth_year']."<br/>";*/
                    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                    $response = "END The project proposal date is ".$row['project_proposal_date'];
        			 }
	  
	     
	     
	}
		    
	 else if ( $text == "1*6" ) {
	  
	     // This is a second level response where the user selected 1 in the first instance
	     //$balance  = "KES 10,000";
	     // This is a terminal request. Note how we start the response with END
	     
	     	     $result = get_information();
	  
	  // output data of each row
        		while($row = $result->fetch_assoc()) {
        			/*echo $row['opening_date']."<br/>";
        			echo $row['closing_date']."<br/>";
        			echo $row['exam_start_date']."<br/>";
        			echo $row['exam_end_date']."<br/>";
        			echo $row['project_proposal_date']."<br/>";
        			echo $row['project_defense_date']."<br/>";
        			echo $row['career_date']."<br/>";
        			echo $row['first_year']."<br/>";
        			echo $row['second_year']."<br/>";
        			echo $row['third_year']."<br/>";
        			echo $row['fourth_year']."<br/>";*/
                    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                    $response = "END The project defense date is ".$row['project_defense_date'];
        			 }
	     
	     
	     
	}
		    
	 else if ( $text == "1*7" ) {
	  
	     // This is a second level response where the user selected 1 in the first instance
	     //$balance  = "KES 10,000";
	     // This is a terminal request. Note how we start the response with END
	     
	     	     $result = get_information();
	  
	  // output data of each row
        		while($row = $result->fetch_assoc()) {
        			/*echo $row['opening_date']."<br/>";
        			echo $row['closing_date']."<br/>";
        			echo $row['exam_start_date']."<br/>";
        			echo $row['exam_end_date']."<br/>";
        			echo $row['project_proposal_date']."<br/>";
        			echo $row['project_defense_date']."<br/>";
        			echo $row['career_date']."<br/>";
        			echo $row['first_year']."<br/>";
        			echo $row['second_year']."<br/>";
        			echo $row['third_year']."<br/>";
        			echo $row['fourth_year']."<br/>";*/
                    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                     $response = "END The career date is".$row['career_date'];
        			 }
	 }
        			 
         else if ( $text == "2*1" ) {
	  
	     // This is a second level response where the user selected 1 in the first instance
	     //$balance  = "KES 10,000";
	     // This is a terminal request. Note how we start the response with END
	     
	     	     $result = get_information();
	  
	  // output data of each row
        		while($row = $result->fetch_assoc()) {
        			/*echo $row['opening_date']."<br/>";
        			echo $row['closing_date']."<br/>";
        			echo $row['exam_start_date']."<br/>";
        			echo $row['exam_end_date']."<br/>";
        			echo $row['project_proposal_date']."<br/>";
        			echo $row['project_defense_date']."<br/>";
        			echo $row['career_date']."<br/>";
        			echo $row['first_year']."<br/>";
        			echo $row['second_year']."<br/>";
        			echo $row['third_year']."<br/>";
        			echo $row['fourth_year']."<br/>";*/
                    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                     $response = "END The total fees for first year ".$row['first_year'];
        			 }
         }
        			 
         else if ( $text == "2*2" ) {
	  
	     // This is a second level response where the user selected 1 in the first instance
	     //$balance  = "KES 10,000";
	     // This is a terminal request. Note how we start the response with END
	     
	     	     $result = get_information();
	  
	  // output data of each row
        		while($row = $result->fetch_assoc()) {
        			/*echo $row['opening_date']."<br/>";
        			echo $row['closing_date']."<br/>";
        			echo $row['exam_start_date']."<br/>";
        			echo $row['exam_end_date']."<br/>";
        			echo $row['project_proposal_date']."<br/>";
        			echo $row['project_defense_date']."<br/>";
        			echo $row['career_date']."<br/>";
        			echo $row['first_year']."<br/>";
        			echo $row['second_year']."<br/>";
        			echo $row['third_year']."<br/>";
        			echo $row['fourth_year']."<br/>";*/
                    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                     $response = "END The total fees for second year ".$row['second_year'];
        			 }
         }
        			 
         else if ( $text == "2*3" ) {
	  
	     // This is a second level response where the user selected 1 in the first instance
	     //$balance  = "KES 10,000";
	     // This is a terminal request. Note how we start the response with END
	     
	     	     $result = get_information();
	  
	  // output data of each row
        		while($row = $result->fetch_assoc()) {
        			/*echo $row['opening_date']."<br/>";
        			echo $row['closing_date']."<br/>";
        			echo $row['exam_start_date']."<br/>";
        			echo $row['exam_end_date']."<br/>";
        			echo $row['project_proposal_date']."<br/>";
        			echo $row['project_defense_date']."<br/>";
        			echo $row['career_date']."<br/>";
        			echo $row['first_year']."<br/>";
        			echo $row['second_year']."<br/>";
        			echo $row['third_year']."<br/>";
        			echo $row['fourth_year']."<br/>";*/
                    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                     $response = "END The total fees for third year ".$row['third_year'];
        			 }
         }
        			 
         else if ( $text == "2*4" ) {
	  
	     // This is a second level response where the user selected 1 in the first instance
	     //$balance  = "KES 10,000";
	     // This is a terminal request. Note how we start the response with END
	     
	     	     $result = get_information();
	  
	  // output data of each row
        		while($row = $result->fetch_assoc()) {
        			/*echo $row['opening_date']."<br/>";
        			echo $row['closing_date']."<br/>";
        			echo $row['exam_start_date']."<br/>";
        			echo $row['exam_end_date']."<br/>";
        			echo $row['project_proposal_date']."<br/>";
        			echo $row['project_defense_date']."<br/>";
        			echo $row['career_date']."<br/>";
        			echo $row['first_year']."<br/>";
        			echo $row['second_year']."<br/>";
        			echo $row['third_year']."<br/>";
        			echo $row['fourth_year']."<br/>";*/
                    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                     $response = "END The total fees for fourth year ".$row['fourth_year'];
        			 }			 
	     
	    
	}
	//
	// Print the response onto the page so that our gateway can read it
	header('Content-type: text/plain');
	echo $response;
	// DONE!!!

?>