
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
    border: 3px solid black;
    border-collapse: collapse;
}  
#t01 td, #t01 th {
    border: 2px solid #ddd;
    padding: 10px;
}


th 
{ 
    
   text-align: center;
}
table#t01 { 
    
    width: 30%;    
  
  
}
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
    <div class="col-sm-8">



      <div class="navbar-brand" href="#">

    <img src="fingerprints-FB-1.jpg" width="750" height="843" style="position:absolute;top:98px;left:118px;filter:blur(5px);-webkit-filter:blur(1px);" />

    </div> 


  <!--
	   <label type="name" style="position:absolute;top:20%;left:75%;font-size:30px "><h4><u>Winner: </u></h4></label>  
	   
     -->
	   	   
	  

<div> 
	  <?php 

$conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "fingerprint");

 $query="Select * from result where R_Location like '%$location%'";
 $result=mysqli_query($conn,$query);

 

  $row=mysqli_fetch_assoc($result);

  if($row['Published']==0){
     $query = "SELECT * from result,candidate where result.C_NID=candidate.C_NID and R_Location Like '$location' ORDER by R_Count DESC";


   $result=mysqli_query($conn,$query);
 
 ?> 
 

<label type="name" style="position:absolute;top:40%;left:72%;font-size:30px "><u>Result History: </u></label> 


<br>

<table id="t01"  style="position: absolute;top:50%;left:62.5%"  >
  <tr>
   
    <th>Name</th> 
	<th>Vote</th>
  <th>Area</th>    
  </tr>
  <tr> 
  <?php
   while($row1 = mysqli_fetch_array($result))
{
echo "<tr>";

echo "<td>" . $row1['C_Name'] . "</td>";
echo "<td>" . $row1['R_Count'] . "</td>";
echo "<td>" . $row1['R_Location'] . "</td>";
echo "</tr>";
} 
?>
    
    
  </tr> 
  
  
</table>
<?php

}
else if($row['Published']==1){
  ?>
  <div>
    
    <div style="position: absolute;top:20%;left:68%;font-size:30px">
     
     <u>Winner</u><br></div>
     <br>
     <div style="position: absolute;top:35%;left:64%;font-size:30px">Winner is


<?php
 

  $query="Select * from Winner Where Location like '%$location%'";
   
      $result=mysqli_query($conn,$query);
      $row=mysqli_fetch_assoc($result);
      $id=$row['C_NID'];
       $query="Select * from Candidate Where C_NID='$id'";
   
      $result=mysqli_query($conn,$query);
      $row=mysqli_fetch_assoc($result);

      echo $row['C_Name'];
    }



?>

  </div>
      
    
  </div>




<button type="button" style="position:absolute;top:80%;left:72%;font-size:20px "><a href='candidateHome.php'>Back to Home</a></button> 


 
 

  
 <?php
 mysqli_close($conn);
 ?>

   

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
