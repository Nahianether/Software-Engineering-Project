
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

    <img src="fingerprints-FB-1.jpg" width="35%" height="86%" style="position:absolute;top:10.5%;left:6.1%;filter:blur(5px);-webkit-filter:blur(1px);" />

    </div>


    <div >
   <label type="name" style="position:absolute;top:20%;left:62.5%;font-size:20px "><u>Election Information</u><br></label>
    
    <?php 
    echo "in";

$conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "fingerprint");
  $query = "SELECT * FROM election WHERE E_Date>=now() and VotingLine=0 and Area_Info Like '%$add%'";
  $result=mysqli_query($conn,$query);
 //$row = mysqli_fetch_assoc($result);
 $var=1;
 ?>
 

  <label type="election" style="position:absolute;top:30%;left:48%;font-size:20px">

 

   
    <?php
    if(mysqli_num_rows($result)>0){

  while($row=mysqli_fetch_assoc($result)){
   
 
   echo "Election no-".$var.":"."<br>";
   ?>
    <table style="width: 100%">
   <tr>
      <th>&nbspElection type&nbsp</th>
      <th>&nbspCandidate Count&nbsp</th>
      <th>&nbspBooth Count&nbsp</th>
      <th>&nbspArea Info&nbsp</th>
      <th>&nbspElection Date&nbsp</th>
    </tr>
   

    <tr>
      <td><center><?php echo $row["E_Type"] ?></center></td>
      <td><center><?php echo $row["Can_Count"] ?></center></td>
      <td><center><?php echo $row["BoothCount"] ?></center></td>
      <td><center><?php echo $row["Area_Info"] ?></center></td>
      <td><center><?php echo $row["E_Date"] ?></center></td>
    </tr>

  
   <?php
   /*
   echo "&nbsp&nbsp&nbspElection Type: ".$row["E_Type"].";";
   echo "&nbsp&nbspCandidate Count: ".$row["Can_Count"].";" ;
   echo nl2br("&nbsp&nbspBooth Count: ".$row["BoothCount"].";\n");
   echo "&nbsp&nbsp&nbspArea Info: ".$row["Area_Info"].";";
   echo "&nbsp&nbspElection Date: ".$row["E_Date"].";";
   */
   $var=$var+1;
   

 ?>
</table>

   <br><br><br>
 
   <?php
    
 }
}
else{
  echo "No Election Is Going to Happen Now";
  
}


  mysqli_close($conn);
 ?>
 <br><br><br>
  
 <button type="button" name="button"  style="position:absolute;width:15%;left:40%;"><a href="voterHome.php">Back To Home  /  প্রথম পৃষ্ঠায় ফিরে যান</a></button>

</label>
 
  
 
 

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


<?php 

$conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "fingerprint");
 
 ?>

</body>
</html>
