<?php
foreach ($rows as $userId => $row){
			   
			   echo "User ID: " . $row['userId'] ."</br >" . "Name: " . $row['firstname'] ." ". $row['lastname']."</br >". "Phone #: " . $row['phone']."</br >". "Email: " . $row['email'];
			   echo "</br >";  
		   }//end foreach