
<?php
session_start();
$user=$_SESSION['user'];
 $pic=$_SESSION['pic'];
$fname= $_SESSION['F_Name'];
$mname= $_SESSION['M_Name'];
$dob= $_SESSION['dob'];
$bp= $_SESSION['BP'];
$nid=$_SESSION['nid'];
$add= $_SESSION['address'];
?><!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>ieatwebsites.com</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <style>
  nav{
   /* Purple Gradient: */
   background: #373232;
    height:10.5%;
    width: 100%;
    position:absolute;
  }
  footer{
    /* Purple Gradient: */
    background: #373232;
    height:5%;
    width: 100%;
    position:absolute;
    top:95%;
  }
  lside{
    /* Purple Gradient: */
    background: #E5E5E5;
    height:850px;
    width: 6%;
    position:absolute;
    top:10.5%;
  }
  rside{
    /* Purple Gradient: */
    background: #E5E5E5;
    height:850px;
    width: 6%;
    position:absolute;
    top:10.5%;
    left:94%;
  }

  </style>

</head>

<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <div class="navbar-brand" href="#">

    <img src="Fingerlogo.jpg" width="5.5%" height="100%" style="position:absolute;top:0%;left:33%;" />

    </div>
    <label type="name" style="position:absolute;top:30%;left:40%;color: white;font-size: 30px;">Fingerprint Voting System</label>
    </div>

    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-left">



      <div class="navbar-brand" href="#">

    <img src="fingerprints-FB-1.jpg" width="40%" height="86%" style="position:absolute;top:10.5%;left:6.1%;filter:blur(5px);-webkit-filter:blur(1px);" />

    </div> 
	
    <div >   
	   <div> 
	   <label type="name" style="position:absolute;top:148px;left:1150px;font-size:30px "><u>Voter Information</u></label> 
	   
	   </div>

    <div >

	  <?php 

$conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "fingerprint");
  $query = "SELECT * FROM voter WHERE V_Pass='$pass' AND V_NID='$user'";
  $result=mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($result);
 ?>   
 

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 12px;
    text-align: left;
} 
table#t01 { 
    
    width: 40%;    
     
	
}
</style>
</head>
<body>



<table id="t01"  style="position:absolute;top:25%;left:50%"  >
  <tr>
    <th><h1>Name:</h1></th>
    <td><?php echo $user ?></td>
  </tr>
  <tr>
    <th><h1>Father's Name:</h1></th>
    <td><?php echo $fname ?></td>
  </tr>
  <tr>
    <th><h1>Mother's Name:</h1></th>
    <td><?php echo $mname ?></td>
  </tr> 
  <tr>
    <th><h1>Date of Birth:</h1></th>
    <td><?php echo $dob ?></td>
  </tr> 
  <tr>
    <th><h1>Blood Group:</h1></th>
    <td><?php echo $bp ?></td>
  </tr> 
  <tr>
    <th><h1>Address:</h1></th>
    <td><?php echo $add ?></td>
  </tr> 
  <tr>
    <th></h1>NID:</h1></th>
    <td><?php echo $nid ?></td>
  </tr>
</table>



  
  <button type="button" style="position:absolute;top:64%;left:60%;font-size:140% "><a href='voterHome.php'>Back To Home  /  প্রথম পৃষ্ঠায় ফিরে যান</a></button> 
 <?php
 mysqli_close($conn);
 ?>

    </div>








			</div>





    </div>

  </div>
</div>

<lside>

</lside>

<rside>

</rside>

<footer>

</footer>


</body>
</html>
