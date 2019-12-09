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
<h1 align="center">Voter Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="submit">
 <a href=adminLogin.php>Login with Admin Account</a><br>
 <a href=candidateLogin.php>Login with Candidate Account</a> <br>
 <a href=volunteerLogin.php>Login with Volunteer Account</a>


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
 $query = "SELECT * FROM voter,candidate WHERE V_Pass='$pass' AND V_NID='$user'";
 //sql query to fetch information of registerd user and finds user match.
$result=mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($result);
 
 $_SESSION['user']=$row["V_Name"];
 $_SESSION['pass']=$row["V_Pass"];
 $_SESSION['FP']=$row["V_FP"];
 $_SESSION['pic']=$row["V_Pic"];
 $_SESSION['age']=$row["Age"];
 $_SESSION['F_Name']=$row["V_Father_Name"];
  $_SESSION['M_Name']=$row["V_Mother_Name"];
 $_SESSION['dob']=$row["V_DOB"];
 $_SESSION['BP']=$row["Blood"];
 $_SESSION['nid']=$row["V_NID"];
 $_SESSION['address']=$row["V_Address"];
 if(mysqli_num_rows($result)>0){
 header("Location: voterHome.php"); // Redirecting to other page
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