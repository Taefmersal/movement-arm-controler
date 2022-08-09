<?php

//connect to database 
$conn = mysqli_connect('localhost', 'root', '');

if (!$conn) {
    die('Connction Failed');
}
$db_select = mysqli_select_db($conn, 'controller');

if (!$db_select) {
    die('could not find cotroller database');
}

$Direct= $_POST['direct'];


switch($Direct){
    case "forward": //button value
        
        break;
    case "backward" :
        
        break;
    case "right" :
       
        break;
    case "left":
        
        break;
    case "stop":
        
        break;
    default:
    echo "failer ";
	
    }


    $query = "INSERT INTO user_choice (direct) VALUES ('$Direct')";

$result =mysqli_query($conn,$query);

if ($result) {

    echo  "$Direct" . "<br>";
    
   
} else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);

?>