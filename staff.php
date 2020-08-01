<?php


?>



<html>
	<head>
	
		<link rel="stylesheet" href="css/style.css" media="all" />
	<style>
button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color:black;
  background-color:white;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px black;
  font-color:black;
}

button:hover {background-color:green}

button:active {
  background-color: green;
  box-shadow: 0 5px black;
  transform: translateY(4px);
}
div.quotes {
  position:absolute;
  left: 500px;
  top: 600px;
  line-height: 40px;
  text-align: justify;
  width: 700px;
  font-size:40px;
  font-weight:bold;
}

div.sanchead{
position:absolute;
left:300px;
top:100px;
font-size: 90px;
font-family:Comic Sans MS;
color:white;
}

</style>
		
	</head>
	
	<body>
	
			
			<br>
					<div class="menubar">
						
							<button onclick="location.href='main.php'">Home</button>
					<button onclick="location.href='s_view.php'">Staff Data</a></button>
							<button onclick="location.href='t_view.php'">Tourist Data</button>
							<button onclick="location.href='a_view.php'">Animal Data</button>
							<button onclick="location.href='stats.php'">Statistics</button>
							<button onclick="location.href='login.php'">Logout</li></button>
						
			
					</div>
					
				
			<div id="left">	
			
				<div id="sidebar">
					
						
							<br><br><button onclick="location.href='s_ops.php'">Staff</button><br><br>
							<button  onclick="location.href='t_ops.php'">Tourists</button><br><br>
							
							<button onclick="location.href='stats.php'">Statistics</button><br><br>
							<button  onclick="location.href='a_ops.php'">Animals</button><br>
						
				</div>
			</div>	
				<div id="right">

				</div>

			
		</div>
<div class="quotes"><font face="Tempus Sans ITC" color="white">THERE IS NO WI-FI IN THE FOREST,BUT I PROMISE YOU'LL FIND A BETTER CONNECTION.</font></div>	
<div class="sanchead">
				 Wildlife Sanctuary
				
			</div>

				
					<p>
					<form method="post"action="stest.php"><br>
					<font face="Algerian" size="5" color="silver">

					<center>
					<?php
					$db = new mysqli();
					$db->connect("localhost", "root", "", "sanc");
					
					if ($db->connect_errno > 0) {
						die('Unable to connect to database [' . $db->connect_error . ']');
					}
					
					// GET LAST UNIQUE ID
					$query  = "SELECT MAX(TRIM(LEADING '' FROM `s_id`)) as emp_id FROM `staff`;";
					$result = $db->query($query) or die('There was an error running the query [' . $db->error . ']');
					
					// ADD +1 WITH LAST UNIQUE ID
					$row = $result->fetch_assoc();
					$last_emp_id = empty($row['emp_id'])?0:$row['emp_id'];
					$next_emp_id = ($last_emp_id+1);
					
					
					session_start();
					
					
											$_SESSION['s_id'] = $next_emp_id;
					
					
												echo" <br><br> Staff Id  ::  $next_emp_id";
				
					?>

					<br><br>Staff Name : <input type="text" name="s_name"><br>
					<br>Occupation : <select name="s_occ">
						<option value="vet">VET</option>
						<option value="guide">GUIDE</option>
						<option value="keeper">KEEPER</option>
						<option value="manager">MANAGER</option>
						<option value="security">SECURITY</option></select><br>
						<br>Staff Salary : <input type="text"name="s_sal"><br>

<br>
						<br><h4>Note : Staff ID will be <br>generated automatically!!</h4>
						<br>
						<input type="submit">&nbsp;&nbsp;
						<input type="reset">
					</form>
					</center>
					</font>
					
					</p>
					
				</div>
					
				
			
			
					
		</div>
	</body>
</html>	