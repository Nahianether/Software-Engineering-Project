<?php
  session_start();
  $user=$_SESSION['user'];
$pass=$_SESSION['pass'];
 $loca=$_SESSION['loc'];
  ?>

<!doctype html>

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
    <div style="position: absolute;top:40%;left: 55%;font-size: 40px">

    <?php

      $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
      $db = mysqli_select_db($conn, "fingerprint");
 //sql query to fetch information of registerd user and finds user match.
      $query="Update admin set VotingLine=2 where A_location like '%$loca%'";
   
      $result=mysqli_query($conn,$query);

      $query="Select * from result where R_Location like '%$loca%' Order By R_Count DESC";
   
      $result=mysqli_query($conn,$query);

      $row=mysqli_fetch_assoc($result);

     
       $winloc=$row['R_Location'];
       $winid=$row['C_NID'];
       $winCount=$row['R_Count'];


      $query="INSERT INTO `winner`(`W_ID`, `Location`, `C_NID`,`Count`) VALUES ('','$winloc','$winid',$winCount)";
   
      $result=mysqli_query($conn,$query);

       $query="Update Result set Published=1 Where R_Location like '%$loca%'";
   
      $result=mysqli_query($conn,$query);


    ?>
    Result is Successfully Published

  
  </div>
  <button type="button" style="position:absolute;top:50%;left:65%;font-size:80% "><a href='adminHome4.php'>Back To Home  /  প্রথম পৃষ্ঠায় ফিরে যান</a></button> 

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
