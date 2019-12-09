<?php
  session_start();
 
  $user=$_SESSION['user'];
 $pass=$_SESSION['pass'];
 $fp=$_SESSION['FP'];
 $pic=$_SESSION['pic'];
// $_SESSION['voter']=$row["V_NID"];
// $_SESSION['comment']=$row["Comment"];
  $symbol=$_SESSION['symbol'];
  $party=$_SESSION['party'];
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
<body>

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

    <img src="fingerprints-FB-1.jpg" width="750" height="843" style="position:absolute;top:98px;left:118px;filter:blur(5px);-webkit-filter:blur(1px);" />

    </div>

    <label type="name" style="position:absolute;top:20%;left:68%;font-size:30px "><u>Candidate Rating</u></label> 
   
   
        <?php
		   
$conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "fingerprint");
  $query = "SELECT * FROM review WHERE C_NID='$nid'";
  $result=mysqli_query($conn,$query);
 
 $var=0;
 $sum=0;
 ?>

<label type="name" style="position:absolute;top:40%;left:69%;font-size:20px">

 <?php
  if(mysqli_num_rows($result)<=0){
	  echo "No reviews given on you";
  }
  else{
    echo "Your Rating Is:";
 while($row = mysqli_fetch_assoc($result)){
    $sum=$sum+$row["Review"];
    //echo $sum;
	 
	  $var=$var+1;
	  
 }


$avg=$sum/$var;
echo $avg."(/5)";
  }
		 mysqli_close($conn);
		?>

  
</label>


<button type="button" name="button" style="position:absolute;height:6%;top:60%;width:13.1%;left:67.5%;"><a href="candidateHome.php">Back To Home/ প্রথম পৃষ্ঠায় ফিরে যান</a></button>


			</div>


</label>


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
