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
               session_start();
               
   

      $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "fingerprint");
 //sql query to fetch information of registerd user and finds user match.
  
  
  $A_NID= $_SESSION['nid'];
   //echo $A_NID;
 // echo "0 result"; 
  
  
 
  $query = " 
      UPDATE admin
SET VotingLine = '1'
WHERE A_NID =$A_NID;
  ";   
	 
	  $result=mysqli_query($conn,$query);
      //$row = mysqli_fetch_assoc($result);
  
  
  
  

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


    <div >
      <button type="button" name="button" style="position:absolute;height:6%;width:13.1%;top:32%;left:63%;"><a href="adminHomeOpen.php">Open Voting Line  /   ভোটিং লাইন খুলুন</a></button>
      <button type="button" name="button" style="position:absolute;height:6%;width:13.1%;top:42%;left:63%;"><a href="showElectionInfoA.php">Show Election Info  /   নির্বাচন তথ্য দেখান</button>
      <button type="button" name="button" style="position:absolute;height:6%;width:13.1%;top:52%;left:63%;">Show Candidate Info  /  প্রার্থী তথ্য দেখান</button>
      <button type="button" name="button" style="position:absolute;height:6%;width:13.1%;top:62%;left:63%;">Logout  /  প্রস্থান</button>
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
