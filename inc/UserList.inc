<?php
foreach ($rows as $userId => $row){
			   echo "<a href='user.php?userid=". $row['userId'] . "&username=". $row['username']. " '>" . $row['userId'] . ". " .  $row['username']. "</a>";
			   echo "</br >";
			   echo "</br >";  
		   }//end foreach