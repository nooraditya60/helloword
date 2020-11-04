<?php
$connect = mysqli_connect("localhost", "root", "", "tbl_name");
$number = count($_POST["name"],$_POST["selesai"],$_POST["belum_selesai"],$_POST["file"]);
if($number > 1)
{
	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["name"],$_POST["selesai"],$_POST["belum_selesai"],$_POST["file"][$i] != ''))
		{
			$sql = "INSERT INTO tbl_name(name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"],$_POST["selesai"],$_POST["belum_selesai"],$_POST["file"][$i])."')";
			mysqli_query($connect, $sql);
		}
	}
	echo "Data Inserted";
}
else
{
	echo "Please Enter Name";
}