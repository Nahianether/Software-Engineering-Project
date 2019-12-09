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
  
  
   <?php   
              
   

      $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "fingerprint");
 //sql query to fetch information of registerd user and finds user match.
  $query="Select * from candidate where C_Location LIKE '%$loca%'";
   
    $result=mysqli_query($conn,$query);
	
	?>
	
     <div style="position:absolute;top:30%;left:55%;font-size:30px">
	 <u>Select Candidate To Show Information</u>
	 <br><br><br>
     <form action="showCandidateInfoA-1.php" method="post">
	 <?php
    while($row=mysqli_fetch_assoc($result)){
		$cin=$row["C_NID"];
    ?>
     
				 
				 <input type="radio" name="loca" value="<?php echo $cin ?>"><?php echo $row["C_Name"] ?></input><br>
    <?php 

    }
	?>
	<a href="showCandidateInfoA-1.php"><br><input type="submit" value="Submit" name="submit" style="position:absolute;left:25%;font-size:20px"></a>
	</form>
	</div>
	<?php
  
  
  
  

?>
  
  

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
