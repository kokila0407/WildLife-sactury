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
  top: 700px;
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

				
					<form method="post"action="ttest.php"><br>
					<font face="algerian" color="white" size="5">
					<center>
						<?php
							$no = $tf = $gf = $td = "";
							$db = new mysqli();
							$db->connect("localhost", "root", "", "sanc");
							
							if ($db->connect_errno > 0) {
								die('Unable to connect to database [' . $db->connect_error . ']');
							}
							else{
							// GET LAST UNIQUE ID
							$query  = "SELECT MAX(TRIM(LEADING '' FROM `t_id`)) as emp_id FROM `tour`;";
							$result = $db->query($query) or die('There was an error running the query [' . $db->error . ']');
							
							// ADD +1 WITH LAST UNIQUE ID
							$row = $result->fetch_assoc();
							$last_emp_id = empty($row['emp_id'])?0:$row['emp_id'];
							$next_emp_id = ($last_emp_id+1);
							$no=$next_emp_id ;
							
							session_start();


							$_SESSION['t_id'] = $no;


								echo" <br>Ticket NO  ::  $no";
							}
								?>
						<br>
							<br>Ticket Fare : <select name="t_fare">
						<option value="300">300</option>
						<option value="500">500</option>
						<option value="1000">1000</option>
						<option value="2000">2000</option>
						<option value="5000">5000</option></select><br><br>
							Tourist Donation : <input type="text"name="t_donate"><br><br>
							Tourist Guide : <select name="t_guide">
							<option value="John">John</option>
							<option value="Gordon">Gordon</option>
							<option value="Oswald">Oswald</option>
							<option value="Shekar">Shekar</option>
							<option value="Joseph">Joseph</option></select></br></br>
							Guide Fare : <select name="g_fa">
							<option value=300>1000</option>
							<option value=1600>1600</option>
							<option value=2000>2000</option> 
							<option value=2800>2800</option>
							<option value=4000>4000</option></select><br>
							<br><h4>Note : Ticket No will be <br>generated automatically!!</h4></input>
						<p><br>
							<input type="submit">&nbsp;
							<input type="reset">
					</form>
					</center>
					</font>
					

				</div>
					
				
			
			
					
			
		</div>
	</body>
</html>	