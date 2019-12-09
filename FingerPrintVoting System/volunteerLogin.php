<?php
  session_start();
  ?>
  
<!doctype html>
<html>
<head>
<title>Login</title>
<style>
.login{
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
</style>
</head>
<body>
<div class="login">
<h1 align="center">Volunteer Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="submit">
<a href=voterLogin.php>Login with Voter Account</a><br>
<a href=candidateLogin.php>Login with Candidate Account</a><br>
<a href=adminLogin.php>Login with Admin Account</a>

<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "fingerprint");
 
  $query = "SELECT * FROM volunteer  WHERE Vl_Pass='$pass' AND V_ID='$user'";
 //sql query to fetch information of registerd user and finds user match.
$result=mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($result);
 $_SESSION['pass']=$row["A_Pass"];
 //$_SESSION['vl']=$row["VotingLine"];
 $_SESSION['loc']=$row["Location"];
 $loc=$row["Location"];
 $_SESSION['nid']=$row["V_ID"];
 $query1 = "SELECT * FROM election WHERE Area_Info like '%$loc%' order by E_Date ASC limit 1";
 //sql query to fetch information of registerd user and finds user match.
$result1=mysqli_query($conn,$query1);
 $row1 = mysqli_fetch_assoc($result1);


 if(mysqli_num_rows($result)>0){

 if($row1["VotingLine"]==0){
 header("Location: volunteerHome1.php");
 }
 else{
 	$_SESSION['eid']=$row['E_ID'];
 	header("Location: volunteerHome2.php");
 } // Redirecting to other page
 }
 else
 {
 $error = "Username or Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>

</body>
</html>