<?php
// define("DB_SERVER", "localhost");
// define("DB_USER", "root");
// define("DB_PASSWORD", "");
// define("DB_DATABASE", "nife");
// echo "string";
// $conn= mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE); 
// if(!$conn) echo "not connected";
//     $Name=$_POST['Name'];
//     $Email=$_POST['Email'];
//     $Company=$_POST['Company'];
//     $Case_for_usingnife=$_POST['Case_for_usingnife'];
//     $Case_for_usingnife=$_POST['Case_for_usingnife'];
// $sql="INSERT INTO form(Name,Email,Company,Case_for_usingnife,use_case_current)VALUES('$Name','$Email','$Company','$Case_for_usingnife','$Case_for_usingnife')";
// if(mysqli_query($conn,$sql))
//   {
//   echo "inserted";
//   } 
$errors = '';
$myemail = 'saurabht462@gmail.com';//<-----Put Your email address here.
if(empty($_POST['Name'])  || 
   empty($_POST['Email']) || 
   empty($_POST['Company'])|| 
   empty($_POST['Case_for_usingnife']) || 
   empty($_POST['use_case_current']))
{
    $errors .= "\n Error: all fields are required";
}

$Name = $_POST['Name']; 
$email_address = $_POST['Email']; 
$Company = $_POST['Company']; 
$Case_for_usingnife = $_POST['Case_for_usingnife']; 
$use_case_current = $_POST['use_case_current']; 
$to = $myemail; 
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $Name \n Email: $email_address \n Company: $Company \n Which usecase do you want implement on NIFE?: $Case_for_usingnife \n What are you using currently for your use case?: $use_case_current \n" ; 

$headers = "From: $myemail\n"; 
$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

?>
