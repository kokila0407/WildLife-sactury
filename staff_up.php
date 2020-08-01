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

					<center>
						<font face ="Algerian" size="5" color="white">
							<form method="post" action="staff_uptest.php">
								<br><br>Staff Id : <input type="text" name ="s_id">
								<br>
								<br>
								<br>
								<h4>Enter the Name, Occupation and Salary <br> of staff you want to update</h4>
								<br><br>
								Staff Name : <input type="text" name="s_name">
								<br>
								<br>
								Occupation : <select name="s_occ">
						<option value="vet">VET</option>
						<option value="guide">GUIDE</option>
						<option value="keeper">KEEPER</option>
						<option value="manager">MANAGER</option>
						<option value="security">SECURITY</option></select><br>
						<br>
								
								Staff Salary : <input type="text" name="s_sal">
								<br><br>
								<input type="submit">
							</form>
						</font>
					</center>
				</div>
					
				
			
			
					
			
		</div>
	</body>
</html>	