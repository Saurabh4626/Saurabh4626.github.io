<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "nife");
echo "string";
$conn= mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE); 
	if(!$conn) echo "not connected";
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Company=$_POST['Company'];
    $Case_for_usingnife=$_POST['Case_for_usingnife'];
    $Case_for_usingnife=$_POST['Case_for_usingnife'];
$sql="INSERT INTO form(Name,Email,Company,Case_for_usingnife,use_case_current)VALUES('$Name','$Email','$Company','$Case_for_usingnife','$Case_for_usingnife')";
if(mysqli_query($conn,$sql))
  {
  	echo "inserted";
  }

?>