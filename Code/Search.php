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
$isThere = false;
$f_name="Student.csv";
		if(!file_exists($f_name))
		{
			echo $success="<br><br><p style='text-align:center ; color:rgb(255,0,0) ; font-size:20px;'>File Does Not Exist</p>";
			exit(0);
		}
if(isset($_POST["submit"]))
{
	if(	!empty($_POST["id"]))
	{
		$id = $_POST["id"];
		$file_open = fopen("Student.csv", "r");
		while ($row = fgetcsv($file_open))
		{
		  if($row[0] == $id && $row[0] != null)
		  {
			$name = $row[1];
			$gender = $row[2];
			$dob = $row[3];
			$city = $row[4];
			$state = $row[5];
			$email = $row[6];
			$quali = $row[7] ;
			$stream = $row[8];
			$success="	
						<style>
						.tab{
						  border: 1px solid rgb(0, 0, 153);
						  border-collapse: collapse;
						}
						</style>
						<table style='margin-left:auto ; margin-right:auto ;'
						cellspacing='3' align='center' cellpadding='5' class='tab'	>
							<tr>
								<td class='tab'><label>ID : </label></td>
								<td class='tab'><label>{$id}</label></td>
							</tr>
							<tr>
								<td class='tab'><label>Name : </label></td>
								<td class='tab'><label>{$name}</label></td>
							</tr>
							<tr>
								<td class='tab'><label>Gender : </label></td>
								<td class='tab'><label>{$gender}</label></td>
							</tr>
							<tr>
								<td class='tab'><label>DOB : </label></td>
								<td class='tab'><label>{$dob}</label></td>
							</tr>
							<tr>
								<td class='tab'><label>City : </label></td>
								<td class='tab'><label>{$city}</label></td>
							</tr>
							<tr>
								<td class='tab'><label>State : </label></td>
								<td class='tab'><label>{$state}</label></td>
							</tr>
							<tr>
								<td class='tab'><label>Email ID : </label></td>
								<td class='tab'><label>{$email}</label></td>
							</tr>
							<tr>
								<td class='tab'><label>Qualification : </label></td>
								<td class='tab'><label>{$quali}</label></td>
							</tr>
							<tr>
								<td class='tab'><label>Stream : </label></td>
								<td class='tab'><label>{$stream}</label></td>
							</tr>
						</table>
					  ";
			$isThere=true;
		  }
		}
		if(!$isThere)
		{
			$success="<br><br><p style='text-align:center ; color:rgb(255,0,0) ; font-size:20px;'>No Student With Matching ID</p>";
		}
		fclose($file_open);
		 
	}
	else
	{
		$success="<br><br><p style='text-align:center ; color:rgb(255,0,0) ; font-size:20px;'>ID field cannot be blank</p>";
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
  <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript" ></script>
 </head>
 <body>
	<h1 style="color:rgb(0,0,153) ; text-align:center">Search</h1>
	<div>
		<form method="post" action="Search.php">
		<table cellspacing="3" align="center" cellpadding="8" style="border:0px solid black">
			<tr>
				<td><label>Student ID</label></td>
				<td><input type="text" name="id" placeholder="Enter ID" pattern="[0-9]*" title="Valid ID" style="height:20px"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"  value="Submit" style="width:80px ; height:30px"/></td>
			</tr>
		</table>
		</form>
	</div><br><br>

	<?php echo $success; ?>
	<script>
	jQuery(document).ready(function($) {
	  if (window.history && window.history.pushState) {
		window.history.pushState('forward', null, './login.html');
		$(window).on('popstate', function() {
		  window.location = "login.html";
		});
	  }
	});
	</script>
</body>
</html>