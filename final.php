<html>
<head>
<title>Internal Marks</title>
</head>
<body>
	<h4><?php echo "Internal"."Marks"; ?></h4>
	
	<form action="" method="get">
		Student Register#: 
		
		<input type="text" name="r">
		<input type="submit" value="Submit">
	</form>
	
	<?php	
	if(isset($_GET['r'])) {
		
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'studentdb'; 
	
	$connection = mysqli_connect($servername,$username,$password, $database);
		if($connection==false){
			die("Could not connect to DB");
		}	
	
	} else die();
	?>
	
	<?php
	
	$qry = "SELECT * FROM students WHERE id=".$_GET['r'];
	$result = mysqli_query($connection,$qry);
	
	if($result==false){
		die("Error in Query");
	}
	
	$row = mysqli_fetch_array($result);
		
	?>
	
	<h4>Student Name: <?php 
	echo $row['firstname'] ." ". $row['surname'];  
	?>  
	</h4>
	<table style="border: 1px solid black; width:50%" border="1px">
		<tbody>
			<tr> <th>Subject</th> <th>Marks</th> </tr>
			<tr>
				<td>Programming, Data Structures II</td>
				<td><b>
				<?php echo $row['sub1']; ?></b></td>
			</tr>
			<tr>
				<td>Computer Architecture</td>
				<td><b><?php echo $row['sub2']; ?></b></td>
			</tr>
			<tr>
				<td>Analog, Digital Comm</td>
				<td><b><?php echo $row['sub3']; ?></b></td>
			</tr>
			<tr>
				<td>Environmental Science</td>
				<td><b><?php echo $row['sub4']; ?></b></td>
			</tr>
			<tr>
				<td>DBMS</td>
				<td><b><?php echo $row['sub5']; ?></b></td>
			</tr>
		</tbody>
	</table>
</body>
</html>
