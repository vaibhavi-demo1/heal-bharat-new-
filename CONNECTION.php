<?php
		$conn= mysqli_connect("localhost", "root", "", "info");
			if (!$conn)
			{
					die("Connection failed: " . mysqli_connect_error());
			}
			

				
			
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			if(empty($_POST['uname']))
			{
			echo "<br><center>Name can't be blank</center>";
			}

			$pattern= '/^([a-zA-Z0-9\._]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';
			if(!preg_match($pattern,$_POST['emailid']))
			{
			echo "<br><center>Enter valid Email id</center>";
		}
		}
		
		if(isset($_POST['submit']))
		{
			$u= $_POST['uname'];
			$e= $_POST['emailid'];
			$m= $_POST['mbNO'];
			
			
			$q= "insert into userinfo values('$u','$e','$m')";
				 if (mysqli_query($conn, $q)) 
			 {
				   echo "<center><b>New record inserted successfully</b></center>";
			 }
			else 
			 {
				 echo "Error: " . $q . "<br>" . mysqli_error($conn);
			 }	
		}
?>