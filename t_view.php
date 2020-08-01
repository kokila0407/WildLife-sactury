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
  top: 500px;
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
table{border-collapse:collapse; width:30%; position:absolute; top:230px; left:500px; background-color:black;}

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
<table>
				
					<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sanc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT t_id, t_fare, t_donate,t_guide,g_fare FROM tour";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<tr><th>Ticket ID</th><th>Ticket fare</th><th>Tourist Donation</th><th>Tour Guide</th><th>Guide fare</th></tr>";
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["t_id"]. "</td><td>" . $row["t_fare"].  "</td><td>". $row["t_donate"]."</td><td>". $row["t_guide"]."</td><td>". $row["g_fare"]."</td></tr>";
	}
	echo "<br><br></table></div>";
} else {
	echo "<br><br><h4>0 Results</h4>";
}

$conn->close();
					?>

									</div>
					
				
			
			
					
			
		</div>
	</body>
</html>	