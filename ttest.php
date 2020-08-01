<?php


?>



<!DOCTYPE>

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
  top: 400px;
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
				
			</div><br><br><br><br><br><br><br>
				<font face="algerian" size="5" color="silver">
				
					<?php $tn = $tf = $td = $tg =$i ="";

						$tf= $_POST["t_fare"];
						
						$td= $_POST["t_donate"];
						
						$tg= $_POST["t_guide"];
						
						$gf= $_POST["g_fa"];
						
						session_start();	
						$tn= $_SESSION['t_id'];
						$conn=new mysqli("localhost", "root", "","sanc");
						
								if(mysqli_connect_error()){
									echo "connection failed";
									die();
								}
								else{
									echo "<br><br><h4>Connection to database successful:</h4><br>";
									$sql="INSERT INTO tour(t_id,t_fare,t_donate,t_guide,g_fare) VALUES('$tn','$tf','$td','$tg','$gf')";
									if ($conn->query($sql) ){
										echo "  <h4><b>Tour details added</h4>";
									}
									else
									{
									  echo "<h4><b>Tourist Error</h4>";
									}    
								}

   
						
   

				
					?>
				</div>
					
				
			
			
					
			
		</div>
	</body>
</html>	