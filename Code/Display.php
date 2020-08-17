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
$first_line =1;
$f_name="Student.csv";
if(!file_exists($f_name))
{
	echo $success="<br><br><p style='text-align:center ; color:rgb(255,0,0) ; font-size:20px;'>File Does Not Exist</p>";
	exit(0);
}
		$file_open = fopen("Student.csv", "r");
		while ($row = fgetcsv($file_open))
		{
			if($first_line == 1){ $first_line++; continue; }
			$id=$row[0];
			$name = $row[1] ;
			$gender = $row[2] ;
			$dob = $row[3] ;
			$city = $row[4] ;
			$state = $row[5] ;
			$email = $row[6];
			$quali = $row[7] ;
			$stream = $row[8] ;
			$success="	
						<style>
						.tab{
						  border: 1px solid rgb(0, 0, 153);
						  border-collapse: collapse;
						  width:300px;
						}
						</style>
						<br><br><table style='margin-left:auto ; margin-right:auto ;'
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
		echo $success;
		}
		fclose($file_open);		 
	

?>

