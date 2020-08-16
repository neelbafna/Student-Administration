<?php

$success='';
$id = '';
$name = '';
$gender = '';
$dob = '';
$city = '';
$state = '';
$email = '';
$quali = '';
$stream = '';

if(isset($_POST["submit"]))
{
	if(	!empty($_POST["id"]) &&
	!empty($_POST["name"]) &&
	!empty($_POST["gender"]) &&
	!empty($_POST["date"]) &&
	!empty($_POST["city"]) &&
	!empty($_POST["state"]) &&
	!empty($_POST["email"]) &&
	!empty($_POST["qualification"]) &&
	!empty($_POST["stream"]) )
	{
		$id = $_POST["id"];
		$name = $_POST["name"];
		$gender = $_POST["gender"];
		$dob = $_POST["date"];
		$city = $_POST["city"];
		$state = $_POST["state"];
		$email = $_POST["email"];
		$quali = $_POST["qualification"];
		$stream = $_POST["stream"];
		
		
		$file_open = fopen("Student_Data.csv", "a");

		$form_data = array(
			'id'  => $id,
			'name'  => $name,
			'gender' => $gender,
			'dob' => $dob,
			'city' => $city,
			'state' => $state,
			'email' => $email,
			'qualification' => $quali,
			'stream' => $stream
		   
		  );
		  fputcsv($file_open, $form_data);
			$success = '<label>Registered</label>';
			$id = '';
			$name ='';
			$dob = '';
			$city = '';
			$state ='';
			$email = '';
			$quali = '';
			$stream ='';
	}
	else
	{
		$success = '<label>Error</label>';
	}
  
 
}
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Dashboard</title>
  <style>
	div {
	  margin: auto;
	  width: 400px;
	  border: 2px solid rgb(0, 0, 153);
	  padding: 50px;
	}
	label{
		color: rgb(0,0,153);
		font-size : 20px;
	}
  </style>
 </head>
 <body>
 	<h1 style="color:rgb(0,0,153) ; text-align:center">Register Student</h1>
	<div>
	
		<form method="post" action="Register.php">
		<table cellspacing="3" align="center" cellpadding="8">
			<tr>
				<td><label>Student ID</label></td>
				<td><input type="text" name="id" placeholder="Enter ID" style="height:20px"/></td>
			</tr>
			<tr>
				<td><label>Student Name</label></td>
				<td><input type="text" name="name" placeholder="Enter Name" style="height:20px" /></td>
			</tr>
			<tr>
				<td><label>Gender</label></td>
				<td>
					<input type="radio" id="male" name="gender" value="Male">
					<label for="male" style="color:black ; font-size:15px">Male</label>
					<input type="radio" id="female" name="gender" value="Female">
					<label for="female" style="color:black ; font-size:15px">Female</label>
				</td>
			</tr>
			<tr>
				<td><label>DOB</label></td>
				<td><input type="date" name="date" id="date"></td>
			</tr>
			<tr>
				<td><label>City</label></td>
				<td><input type="text" name="city" placeholder="Enter City" style="height:20px"/></td>
			</tr>
			<tr>
				<td><label>State</label></td>
				<td><input type="text" name="state" placeholder="Enter State" style="height:20px"/></td>
			</tr>
			<tr>
				<td><label>Email ID</label></td>
				<td><input type="email" name="email" placeholder="Enter Email" style="height:20px"/></td>
			</tr>
			<tr>
				<td><label>Qualification</label></td>
				<td><input type="text" name="qualification" placeholder="Enter Qualification" style="height:20px"/></td>
			</tr>
			<tr>
				<td><label>Stream</label></td>
				<td><input type="text" name="stream" placeholder="Enter Stream" style="height:20px"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"  value="Submit" style="width:80px ; height:30px"/></td>
			</tr>
			<tr>
				<td></td>
				<td><?php echo $success; ?></td>
			</tr>
		</table>
		</form>
		
	</div>
</body>
</html>