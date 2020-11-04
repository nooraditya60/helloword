<?php
$connect = mysqli_connect("localhost", "root", "", "kpi_ku");
$number = count($_POST["sop"]);
if($number > 1)
{
	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["sop"][$i] != '' ))
		{
			$sql = "INSERT INTO tbl_sop(sop)  VALUES('".mysqli_real_escape_string($connect, $_POST["sop"][$i])."')";
			mysqli_query($connect, $sql);
		}
	}
	echo "Data Inserted";
}
else
{
	echo "Please Enter Name";
}