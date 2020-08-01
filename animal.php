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

					<p>
						<form method="post"action="atest.php"><br>
						<font face="algerian" size="5" color="white">

						<center>
							<?php
								$id = "";
								$db = new mysqli();
								$db->connect("localhost", "root", "", "sanc");
								
								if ($db->connect_errno > 0) {
									die('Unable to connect to database [' . $db->connect_error . ']');
								}
								else{
								// GET LAST UNIQUE ID
								$query  = "SELECT MAX(TRIM(LEADING '' FROM `a_id`)) as emp_id FROM `animal`;";
								$result = $db->query($query) or die('There was an error running the query [' . $db->error . ']');
								
								// ADD +1 WITH LAST UNIQUE ID
								$row = $result->fetch_assoc();
								$last_emp_id = empty($row['emp_id'])?0:$row['emp_id'];
								$next_emp_id = ($last_emp_id+1);
								$id=$next_emp_id ;
								session_start();


								$_SESSION['a_id'] = $id;


									echo" <br>Animal Id  ::  $id";
								}	
							?>
 
								<br><br>Animal Species : <input type="text" name="a_sp"><br><br>
									Animal Type :
									<input type="radio" name="type" value="herbivore" checked> herbivore<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="radio" name="type" value="carnivore"> carnivore<br>

								<br>
									Animal Feed : <input type="text"name="a_feed"><br>
								<br>
									Feed Cost : <input type="text" name="a_cost"><br>

								<br><h4>Note: Animal ID will be <br>generated automatically!!</h4>
								<br>
								<input type="submit">&nbsp;
								<input type="reset">
						</form>
						</center>
						</font>
						

					</p>
				</div>
					
				
			
			
					
			
		</div>
	</body>
</html>	