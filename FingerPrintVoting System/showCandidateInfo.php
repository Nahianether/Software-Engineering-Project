<?php
  session_start();
 
  $user=$_SESSION['user'];
 $pass=$_SESSION['pass'];
 $fp=$_SESSION['FP'];
 $pic=$_SESSION['pic'];
  $party=$_SESSION['party'];
// $_SESSION['voter']=$row["V_NID"];
// $_SESSION['comment']=$row["Comment"];
  $symbol=$_SESSION['symbol'];
 
 $nid=$_SESSION['nid'];
 $location=$_SESSION['address'];
  ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>ieatwebsites.com</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <style>
   table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

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
	
	
  <?php
/*
$conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "fingerprint");
  $query = "SELECT * FROM voter WHERE V_Pass='$pass' AND V_NID='$user'";
  $result=mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($result);
 */
 ?>

  <label type="name" style="position:absolute;top:20%;left:60%;font-size:30px "><u>Candidate Information</u></label> 

  <label type="election" style="position:absolute;top:30%;left:55%;font-size:20px">

  <table width="400">
    <tr>
      <th>Name</th>
      <td><center><?php echo $user ?></center></td>
    </tr>
    <tr>
      <th>Symbol</th>
      <td><center><?php echo $symbol ?></center></td>
    </tr>
    <tr>
      <th>NID</th>
      <td><center><?php echo $nid ?></center></td>
    </tr>
    <tr>
      <th>&nbspLocation&nbsp</th>
      <td><center><?php echo $location ?></center></td>
    </tr>
    <tr>
      <th>&nbspParty&nbsp</th>
      <td><center><?php echo $party ?></center></td>
    </tr>
    
  </table>
</label>

  <!--
  <label type="name" style="position:absolute;top:250px;left:1050px;font-size:20px ">Name:<?php echo $user ?></label> 
   <label type="name" style="position:absolute;top:280px;left:1050px;font-size:20px ">Symbol:<?php echo $symbol ?></label> 
    <label type="name" style="position:absolute;top:310px;left:1050px;font-size:20px ">NID:<?php echo $nid ?></label> 
	<label type="name" style="position:absolute;top:280px;left:1050px;font-size:20px ">Symbol:<?php echo $symbol ?></label>
  <label type="name" style="position:absolute;top:340px;left:1050px;font-size:20px ">Address:<?php echo $location ?></label> 
  
-->

 <button type="button" style="position:absolute;top:50%;left:60%;font-size:80% "><a href='candidateHome.php'>Back To Home  /  প্রথম পৃষ্ঠায় ফিরে যান</a></button> 
 
 

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
