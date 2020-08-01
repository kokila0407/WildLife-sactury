<?php


?>



<!DOCTYPE>

<html>
	<head>
		
		<link rel="stylesheet" href="css/style.css" media="all" />
		<style>
th, td {
    text-align:left;
padding:8px;
color:black;
}
tr{
background-color:yellow;
}

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
  top: 900px;
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
table.tt{border-collapse:collapse; width:30%; position:absolute; top:250px; left:500px; background-color:black;}
table.ee{border-collapse:collapse; width:30%; position:absolute; top:600px; left:500px; background-color:black;}
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
				<div id="right">

				
<div style="overflow-x:auto;">					
<table class="tt">
					<?php
						
						global $server;
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "sanc";
						
						// Create connection
						$conn = new mysqli("localhost", "root", "", "sanc");
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 
						
						$sqli = "SELECT s_id, s_name, s_occ,s_sal FROM staff";
						$result = $conn->query($sqli);
						
						if ($result->num_rows > 0) {
							echo "<br><br><tr><th>Staff ID</th><th>Name</th><th>Occupation</th><th>Salary</th></tr>";
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo "<tr><td>" . $row["s_id"]. "</td><td>" . $row["s_name"].  "</td><td>". $row["s_occ"]."</td><td>". $row["s_sal"]."</td></tr>";
							}
							echo"</table>";
						} else {
							echo "<br><br><h4>Staff Data<br>0 Results</h4>";
						}
						
						$conn->close();
						echo"<br><br>";
						$conn2 = new mysqli("localhost", "root", "", "sanc");
						// Check connection
						if ($conn2->connect_error) {
							die("Connection failed: " . $conn2->connect_error);
						} 
						
						$sql2 = "SELECT t_id, t_fare, t_donate,t_guide,g_fare FROM tour";
						$result = $conn2->query($sql2);
						
						if ($result->num_rows > 0) {
							echo "<table class='ee'><tr><th>Ticket ID</th><th>Ticket fare</th><th>Tourist Donation</th><th>Tour Guide</th><th>Guide fare</th></tr>";
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo "<tr><td>" . $row["t_id"]. "</td><td>" . $row["t_fare"].  "</td><td>". $row["t_donate"]."</td><td>". $row["t_guide"]."</td><td>". $row["g_fare"]."</td></tr>";
							
							}
							echo "</table>";
						} else {
							echo "<br><br><h4>Tourist Data <br> 0 Results</h4>";
						}
						
						$conn2->close();
						

					
					?>

					
					
				</div>
					
				
			
			
					
			
		</div>
	</body>
</html>	