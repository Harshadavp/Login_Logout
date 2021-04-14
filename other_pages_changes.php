<?php
   session_start();
	 if ($_SESSION['client'] == null && $_SESSION['clientP'] == null) {
	    header("Location:login.php");
   }

    //for log out button  
    echo '<a href="logout.php">Click Here for Logout</a>';
?>
