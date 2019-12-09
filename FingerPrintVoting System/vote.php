
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

    <img src="fingerprints-FB-1.jpg" width="750" height="843" style="position:absolute;top:98px;left:118px;filter:blur(5px);-webkit-filter:blur(1px);" />

    </div> 
   

        <?php 

$conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "fingerprint");

  $query = "SELECT * FROM admin  WHERE A_Location like '%$add%'";
  $result=mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($result); 

   $a=$row["VotingLine"]; 
if($a==0) 
{  
?> 
   <label type="name" style="position:absolute;top:20%;left:63%;font-size:30px "><h4>Voting Line Is Closed Now </h4></label>
    
<button type="button" style="position:absolute;top:500px;left:1270px;font-size:20px "><a href='voterHome.php'>Back to Home</a></button> 	
 <?php

} 
	  	   
	   else 
{	 
        
 	?> 	
	 
	   <label type="name" style="position:absolute;top:20%;left:63%;font-size:30px "><h4>Voting Line Is Open Now </h4></label>  
	   
	   	   <label type="name" style="position:absolute;top:30%;left:50%;font-size:30px "><u>Give Your Vote: </u></label> 
	   
 
	   

	  <?php 

$conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "fingerprint");
  $query = "SELECT result.C_NID,R_Count,C_Name
FROM result,candidate
WHERE result.C_NID=candidate.C_NID 
ORDER by R_Count DESC";
  $result=mysqli_query($conn,$query);
 
 ?> 
 
      <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 3px solid black;
    border-collapse: collapse;
}  
#t01 td, #t01 th {
    border: 2px solid #ddd;
    padding: 20px;
}

th, td {
    padding: 15px;
    text-align: right;
} 
th 
{ 
    
	 text-align: center;
}
table#t01 { 
    
    width: 47%;    
    
	
}
</style>
</head>
<body>

 

<br>

<table id="t01" style="position:absolute;top:35%;left:50%"  >
  <tr>
   <th>Vote</th> 
    <th>Name</th> 
	
    <th>Symbol</th> 
	<th>Party</th> 
    
  </tr>
  <tr>  
  <?php  
  $aa=0;
  $query = "SELECT * FROM candidate WHERE C_Location like '%$add%'";
  $result=mysqli_query($conn,$query);
   while($row=mysqli_fetch_assoc($result)){  
                               // $row = mysqli_fetch_assoc($result);							
								$c=$row["C_Name"];
								$cin=$row["C_NID"];
								//$_SESSION['cin']=$cin;
								//echo $_SESSION['cin']; 
								
								
							

				  


				echo "<tr>"; 
				echo "<td>";
				
				?> 
				<form action="vote2.php" method="post"> 
				 
				 <input type="radio" name="loca" value="<?php echo $cin ?>"></input><br>
				 
				  
				  
								
               <?php  
   
echo "<td>" . $row['C_Name'] . "</td>";	
echo "<td>" . $row['Symbol'] . "</td>";	
echo "<td>" . $row['C_Party'] . "</td>";			   

echo "</td>"; 
echo "</tr>";    


      
	 


 
   }
?>  
 <a href="vote2.php"><br><input type="submit" value="Submit" name="submit" style="position:absolute;top:520px;left:70%;font-size:120%"></a>
</form> 
<?php

 



 
?>
    
    
  </tr> 
  
  
</table>
<button type="button" style="position:absolute;top:600px;left:1230px;font-size:20px "><a href='voterHome.php'>Back to Home</a></button> 

</body>
</html>

 
 

  
 <?php 
}
 mysqli_close($conn);
 ?>

   

  
</div>

<lside>

</lside>

<rside>

</rside>

<footer>

</footer>


</body>
</html>
