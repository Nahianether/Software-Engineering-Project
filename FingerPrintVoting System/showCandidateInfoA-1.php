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
  
  
   <?php   
   if(isset($_POST['submit'])){
	   $id=$_POST['loca'];
	   //echo $hi;
	   
   
              
   

      $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "fingerprint");
 //sql query to fetch information of registerd user and finds user match.
  $query="Select * from candidate where C_NID='$id'";
   
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($result);
	
	?>
	<label type="name" style="position:absolute;top:20%;left:60%;font-size:30px "><u>Candidate Information</u></label> 

   <label type="election" style="position:absolute;top:30%;left:55%;font-size:20px">

  <table width="400">
    <tr>
      <th>Name</th>
      <td><center><?php echo $row["C_Name"] ?></center></td>
    </tr>
    <tr>
      <th>Symbol</th>
      <td><center><?php echo $row["Symbol"] ?></center></td>
    </tr>
    <tr>
      <th>NID</th>
      <td><center><?php echo $id ?></center></td>
    </tr>
    <tr>
      <th>&nbspLocation&nbsp</th>
      <td><center><?php echo $row["C_Location"] ?></center></td>
    </tr>
    <tr>
      <th>&nbspParty&nbsp</th>
      <td><center><?php echo $row["C_Party"] ?></center></td>
    </tr>
    
  </table>
</label>
    <button type="button" style="position:absolute;top:50%;left:60%;font-size:80% "><a href='adminHome.php'>Back To Home  /  প্রথম পৃষ্ঠায় ফিরে যান</a></button> 
	<?php
  
  
   }
  

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
