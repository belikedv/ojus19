<html>
<head>
		<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "7797";
$dbname ="ojus";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
	
if (isset($_POST['standup'])){
		    $name=$_POST['name'];
			$contact=$_POST['contact'];
			$year=$_POST['year'];
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			$sql = "INSERT INTO standupcomedy(name,contact,year) VALUES ('$name','$contact','$year');";

			if(mysqli_query($conn, $sql)){
			 echo "
			 		<center>
			 		<div class=\"phpbody\" style=\" padding: 0px;
												  background: #044F67;
												  color: #f1f1f1;
												  text-align: center;
												  font-size: 15px;
												  overflow: hidden;
												  position: fixed;
												  top: 0;
												  width: 100%;
												  height: auto;
												  float:left;\">
			 		 <h2>Ojus 2019</h2>
					</div><br<br><br><br><br><br>
			 			<h4>You have Successfuly registered for Standup Comedy<h4> <h3>$name<h3><br>
						 			ALL THE BEST<br><br>

						 		
						 		<a href=\"index.html\"><img style=\"width: 30px; float:center; margin-right: 20px;\" src=\"home.png\"></a>
						 		

						 		<a href=\"extra.html\"><img style=\"width: 30px; float:center; margin-right: 20px;\" src=\"menu.png\"></a>
			 		</center>
			 	";} 
			else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
}

if (isset($_POST['pubg'])){
					$teamname=$_POST['teamname'];
					$name1=$_POST['name1'];
					$year1=$_POST['year1'];
					$contact1=$_POST['contact1'];
					$name2=$_POST['name2'];
					$year2=$_POST['year2'];
					$name3=$_POST['name3'];
					$year3=$_POST['year3'];
					$name4=$_POST['name4'];
					$year4=$_POST['year4'];
					$name5=$_POST['name5'];
					$year5=$_POST['year5'];
					if (!$conn) {
			    			die("Connection failed: " . mysqli_connect_error());
					}
					$sql1 = "INSERT INTO pubg(teamname,name1,year1,contact1,name2,year2,name3,year3,name4,year4,name5,year5) VALUES ('$teamname','$name1','$year1','$contact1','$name2','$year2','$name3','$year3','$name4','$year4','$name5','$year5');";
						if(mysqli_query($conn, $sql1)){
						 echo "
						 	<html>
						 		<center>
						 		<div class=\"phpbody\" style=\" padding: 0px;
															  background: #044F67;
															  color: #f1f1f1;
															  text-align: center;
															  font-size: 15px;
															  overflow: hidden;
															  position: fixed;
															  top: 0;
															  width: 100%;
															  height: auto;
															  float:left;\">
						 		 <h2>Ojus 2019</h2>
								</div><br<br><br><br><br><br>
						 			<h4>You have Successfuly registered for Pub-G</h4><h3>$teamname<h3><br>
						 			ALL THE BEST<br><br>

						 		
						 		<a href=\"index.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"home.png\"></a>
						 		

						 		<a href=\"extra.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"menu.png\"></a>
						 		</center>
						 	</html>";} 
						else {
						    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
}

if (isset($_POST['mtwi'])){
		    $name=$_POST['name'];
			$contact=$_POST['contact'];
			$year=$_POST['year'];
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			$sql = "INSERT INTO mtwi(name,contact,year) VALUES ('$name','$contact','$year');";

			if(mysqli_query($conn, $sql)){
			 echo "
			 	<html>
			 		<center>
			 		<div style=\" padding: 0px;
												  background: #044F67;
												  color: #f1f1f1;
												  text-align: center;
												  font-size: 15px;
												  overflow: hidden;
												  position: fixed;
												  top: 0;
												  width: 100%;
												  height: auto;
												  float:left;\">
			 		 <h2>Ojus 2019</h2>
					</div><br<br><br><br><br><br>
			 			<h4>You have Successfuly registered for Minute To Win it </h4><h3>$teamname<h3><br>
						 			ALL THE BEST<br><br>

						 		
						 		<a href=\"index.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"home.png\"></a>
						 		

						 		<a href=\"extra.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"menu.png\"></a>
			 		</center>
			 	</html>";} 
			else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
}
if (isset($_POST['mrms'])){
		    $name=$_POST['name'];
			$contact=$_POST['contact'];
			$year=$_POST['year'];
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			$sql = "INSERT INTO mrms(name,contact,year) VALUES ('$name','$contact','$year');";

			if(mysqli_query($conn, $sql)){
			 echo "
			 	<html>
			 		<center>
			 		<div style=\" padding: 0px;
												  background: #044F67;
												  color: #f1f1f1;
												  text-align: center;
												  font-size: 15px;
												  overflow: hidden;
												  position: fixed;
												  top: 0;
												  width: 100%;
												  height: auto;
												  float:left;\">
			 		 <h2>Ojus 2019</h2>
					</div><br<br><br><br><br><br>
			 			<h4>You have Successfuly registered for Mr and Ms Apsit</h4> <h3>$teamname<h3><br>
						 			ALL THE BEST<br><br>

						 		
						 		<a href=\"index.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"home.png\"></a>
						 		

						 		<a href=\"extra.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"menu.png\"></a>
			 	</html>";} 
			else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
}
if (isset($_POST['hunt'])){
					$teamname=$_POST['teamname'];
					$name1=$_POST['name1'];
					$year1=$_POST['year1'];
					$contact1=$_POST['contact1'];
					$name2=$_POST['name2'];
					$year2=$_POST['year2'];
					$name3=$_POST['name3'];
					$year3=$_POST['year3'];
					$name4=$_POST['name4'];
					$year4=$_POST['year4'];
					
					if (!$conn) {
			    			die("Connection failed: " . mysqli_connect_error());
					}
					$sql1 = "INSERT INTO hunt(teamname,name1,year1,contact1,name2,year2,name3,year3,name4,year4) VALUES ('$teamname','$name1','$year1','$contact1','$name2','$year2','$name3','$year3','$name4','$year4');";
						if(mysqli_query($conn, $sql1)){
						 echo "
						 	<html>
						 		<center>
						 		<div style=\" padding: 0px;
															  background: #044F67;
															  color: #f1f1f1;
															  text-align: center;
															  font-size: 15px;
															  overflow: hidden;
															  position: fixed;
															  top: 0;
															  width: 100%;
															  height: auto;
															  float:left;\">
						 		 <h2>Ojus 2019</h2>
								</div><br<br><br><br><br><br>
						 			<h4>You have Successfuly registered for Tressure Hunt</h4> <h3>$teamname<h3><br>
						 			ALL THE BEST<br><br>

						 		
						 		<a href=\"index.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"home.png\"></a>
						 		

						 		<a href=\"extra.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"menu.png\"></a>
						 		</center>
						 	</html>";} 
						else {
						    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
}

if (isset($_POST['quiz'])){
					$teamname=$_POST['teamname'];
					$name1=$_POST['name1'];
					$year1=$_POST['year1'];
					$contact1=$_POST['contact1'];
					$name2=$_POST['name2'];
					$year2=$_POST['year2'];
					$name3=$_POST['name3'];
					$year3=$_POST['year3'];
					$name4=$_POST['name4'];
					$year4=$_POST['year4'];
					
					if (!$conn) {
			    			die("Connection failed: " . mysqli_connect_error());
					}
					$sql1 = "INSERT INTO quiz(teamname,name1,year1,contact1,name2,year2,name3,year3,name4,year4) VALUES ('$teamname','$name1','$year1','$contact1','$name2','$year2','$name3','$year3','$name4','$year4');";
						if(mysqli_query($conn, $sql1)){
						 echo "
						 	<html>
						 		<center>
						 		<div style=\" padding: 0px;
															  background: #044F67;
															  color: #f1f1f1;
															  text-align: center;
															  font-size: 15px;
															  overflow: hidden;
															  position: fixed;
															  top: 0;
															  width: 98.5%;
															  height: auto;
															  float:left;\">
						 		 <h2>Ojus 2019</h2>
								</div><br<br><br><br><br><br>
						 			<h4>You have Successfuly registered for Quiz</h4><h3>$teamname<h3><br>
						 			ALL THE BEST<br><br>

						 		
						 		<a href=\"index.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"home.png\"></a>
						 		

						 		<a href=\"extra.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"menu.png\"></a>
						 		</center>
						 	</html>";} 
						else {
						    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
}

if (isset($_POST['dance'])){
					$teamname=$_POST['teamname'];
					$name1=$_POST['name1'];
					$year1=$_POST['year1'];
					$contact1=$_POST['contact1'];
					$name2=$_POST['name2'];
					$year2=$_POST['year2'];
					$name3=$_POST['name3'];
					$year3=$_POST['year3'];
					$name4=$_POST['name4'];
					$year4=$_POST['year4'];
					$name5=$_POST['name5'];
					$year5=$_POST['year5'];
					if (!$conn) {
			    			die("Connection failed: " . mysqli_connect_error());
					}
					$sql1 = "INSERT INTO dance(teamname,name1,year1,contact1,name2,year2,name3,year3,name4,year4,name5,year5) VALUES ('$teamname','$name1','$year1','$contact1','$name2','$year2','$name3','$year3','$name4','$year4','$name5','$year5');";
						if(mysqli_query($conn, $sql1)){
						 echo "
						 	<html>
						 		<center>
						 		<div style=\" padding: 0px;
															  background: #044F67;
															  color: #f1f1f1;
															  text-align: center;
															  font-size: 15px;
															  overflow: hidden;
															  position: fixed;
															  top: 0;
															  width: 100%;
															  height: auto;
															  float:left;\">
						 		 <h2>Ojus 2019</h2>
								</div><br<br><br><br><br><br>
						 			<h4>You have Successfuly registered for Dancing Competition</h4> <h3>$teamname<h3><br>
						 			ALL THE BEST<br><br>

						 		
						 		<a href=\"index.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"home.png\"></a>
						 		

						 		<a href=\"extra.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"menu.png\"></a>
						 		</center>
						 	</html>";} 
						else {
						    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
}

if (isset($_POST['sing'])){
		    $name=$_POST['name'];
			$contact=$_POST['contact'];
			$year=$_POST['year'];
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			$sql = "INSERT INTO singing(name,contact,year) VALUES ('$name','$contact','$year');";

			if(mysqli_query($conn, $sql)){
			 echo "
			 	<html>
			 		<center>
			 		<div style=\" padding: 0px;
												  background: #044F67;
												  color: #f1f1f1;
												  text-align: center;
												  font-size: 15px;
												  overflow: hidden;
												  position: fixed;
												  top: 0;
												  width: 100%;
												  height: auto;
												  float:left;\">
			 		 <h2>Ojus 2019</h2>
					</div><br<br><br><br><br><br>
						 			<h4>You have Successfuly registered for Singing Competition</h4><h3>$teamname<h3><br>
						 			ALL THE BEST<br><br>

						 		
						 		<a href=\"index.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"home.png\"></a>
						 		

						 		<a href=\"extra.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"menu.png\"></a>
			 		</center>
			 	</html>";} 
			else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
}

if (isset($_POST['drama'])){
					$teamname=$_POST['teamname'];
					$name1=$_POST['name1'];
					$year1=$_POST['year1'];
					$contact1=$_POST['contact1'];
					$name2=$_POST['name2'];
					$year2=$_POST['year2'];
					$name3=$_POST['name3'];
					$year3=$_POST['year3'];
					$name4=$_POST['name4'];
					$year4=$_POST['year4'];
					$name5=$_POST['name5'];
					$year5=$_POST['year5'];
					if (!$conn) {
			    			die("Connection failed: " . mysqli_connect_error());
					}
					$sql1 = "INSERT INTO drama(teamname,name1,year1,contact1,name2,year2,name3,year3,name4,year4,name5,year5) VALUES ('$teamname','$name1','$year1','$contact1','$name2','$year2','$name3','$year3','$name4','$year4','$name5','$year5');";
						if(mysqli_query($conn, $sql1)){
						 echo "
						 <?
						 	<head>
								<link href=index.css >
								</head>
						 		<center>
						 		<div style=\"padding: 0px;
															  background: #044F67;
															  color: #f1f1f1;
															  text-align: center;
															  font-size: 15px;
															  overflow: hidden;
															  position: fixed;
															  top: 0;
															  width: 100%;
															  height: auto;
															  float:left;\">
						 		 <h2>Ojus 2019</h2>
								</div><br<br><br><br><br><br>
						 			<h4>You have Successfuly registered for Drama</h4><h3>$teamname<h3><br>
						 			ALL THE BEST<br><br>

						 		
						 		<a href=\"index.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"home.png\"></a>
						 		

						 		<a href=\"extra.html\"><img style=\"width: 30px; float:center; margin-right: 20px; color:blue;\" src=\"menu.png\"></a>
						 		</center>
						 	?>";} 
						else {
						    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
}

mysqli_close($conn);

?>
</body>
</html>