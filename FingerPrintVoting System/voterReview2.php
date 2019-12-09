
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
$cin=$_SESSION['cin'];
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
    height:99px;
    width: 100%;
  }
  footer{
    /* Purple Gradient: */
    background: #373232;
    height:53px;
    width: 100%;
    position:absolute;
    top:896px;
  }
  lside{
    /* Purple Gradient: */
    background: #E5E5E5;
    height:850px;
    width: 116px;
    position:absolute;
    top:100px;
  }
  rside{
    /* Purple Gradient: */
    background: #E5E5E5;
    height:850px;
    width: 116px;
    position:absolute;
    top:100px;
    left:1786px;
  }

  </style>

</head>

<body>
<!-- <body>  -->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <div class="navbar-brand" href="#">

    <img src="Fingerlogo.jpg" width="100" height="99" style="position:absolute;top:0px;left:630px;" />

    </div>
      <label type="name" style="position:absolute;top:30px;left:750px;color: white;font-size: 30px;">Fingerprint Voting System</label>
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
<!--
    <img src="fingerprints-FB-1.jpg" width="750" height="843" style="position:absolute;top:98px;left:118px;filter:blur(5px);-webkit-filter:blur(1px);" />
-->
    </div>


    <div>
	 
	

	  <?php
		
		


if(isset($_POST['submit'])){
 echo "hello";
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $loc=$_POST['location'];
 echo $loc;
 $db = mysqli_select_db($conn, "fingerprint"); 
 
 
 
 
     
$radioVal = $_POST["gender"];

if($radioVal == "1")
{
     $query ="INSERT INTO review(Review_No,C_NID,V_NID,Review) VALUES ('','$cin','$nid','1')"; 
 
}
else if($radioVal == "1.5")
{
     $query ="INSERT INTO review(Review_No,C_NID,V_NID,Review) VALUES ('','$cin','$nid','1.5')"; 
 
}
else if ($radioVal == "2")
{
     $query ="INSERT INTO review(Review_No,C_NID,V_NID,Review) VALUES ('','$cin','$nid','2')"; 
}
else if ($radioVal == "2.5")
{
     $query ="INSERT INTO review(Review_No,C_NID,V_NID,Review) VALUES ('','$cin','$nid','2.5')"; 
} 
else if ($radioVal == "3")
{
     $query ="INSERT INTO review(Review_No,C_NID,V_NID,Review) VALUES ('','$cin','$nid','3')"; 
}
else if ($radioVal == "3.5")
{
     $query ="INSERT INTO review(Review_No,C_NID,V_NID,Review) VALUES ('','$cin','$nid','3.5')"; 
}
else if ($radioVal == "4")
{
     $query ="INSERT INTO review(Review_No,C_NID,V_NID,Review) VALUES ('','$cin','$nid','4')"; 
}  
else if ($radioVal == "4.5")
{
     $query ="INSERT INTO review(Review_No,C_NID,V_NID,Review) VALUES ('','$cin','$nid','4.5')"; 
} 
else if ($radioVal == "5")
{
     $query ="INSERT INTO review(Review_No,C_NID,V_NID,Review) VALUES ('','$cin','$nid','5')"; 
} 
else if ($radioVal == "5.5")
{
     $query ="INSERT INTO review(Review_No,C_NID,V_NID,Review) VALUES ('','$cin','$nid','5.5')"; 
}




 
 $result=mysqli_query($conn,$query);
 
 header("Location:voterHome.php");
 
 
 }
 
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
