<?php

require_once('dbconnect.php');

if(isset($_POST['fname']) && isset($_POST['phoneNumber']) && isset($_POST['Em']) && isset($_POST['addr']) && isset($_POST['gend']) && isset($_POST['ssn']) && isset($_POST['fdes']) && isset($_POST['pass']))
{
	



  $a = $POST['fname'];
   
   $b = $POST['phoneNumber'];

   $c = $POST['Em'];

   $d = $POST['addr'];

   $e = $POST['gend'];

    $f = $POST['ssn'];

     $g = $POST['fdes'];


      $h = $POST['pass'];

    $sql = " INSERT INTO registration VALUES ( '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h' ) ";



   $result = mysqli_query($conn, $sql);
	
	
	if(mysqli_affected_rows($conn)){
	
		header("Location: index.php");
		
	}
	else{
		echo "Insertion Failed";
		header("Location: P_Registration.php");
	}
	
}

   
 

?>