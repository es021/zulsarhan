<?php

	
	//echo "select * from user WHERE first_name = '".$_POST['id']"'";
    if (isset($_POST['id']) && isset($_POST['last_name']))
    {
        //echo "<strong>Post received.</strong> <br/> <br/> <strong>Name:</strong> " . $_POST['name'] . "<br/><strong>Info:</strong> " . $_POST['info'];
		
		$servername = "localhost";
		$username = "may1631";
		$password = "ljstd7pi";
		$dbname = "may1631_db";
		$db = mysql_connect($servername,$username,$password);
		if (!$db) {
			die('Could not connect to db: ' . mysql_error());
		}
 
    //Select the Database
    mysql_select_db($dbname,$db);
    
    //Replace * in the query with the column names.
	
    $result = mysql_query("select * from user WHERE first_name = '".$_POST['id']."'", $db);
	
	 //Create an array
    $json_response = array();
    
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $row_array['id'] = $row['id'];
        $row_array['first_name'] = $row['first_name'];

        
        //push the values in the array
        array_push($json_response,$row_array);
    }
    echo json_encode($json_response);
    
    //Close the database connection
    fclose($db);
	}
    else
    {
        echo "Post not received.";
    }
?>