
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


    
	
	    <?php
		
		
	 //echo $_POST['loca'];
     $_SESSION['cin']=$_POST['loca'];
	// echo $_SESSION['cin'];
	 $cin=$_SESSION['cin']; 
	 


if(isset($_POST['submit'])){
 echo "hello";
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $loc=$_POST['location'];
 //echo $loc;
 $db = mysqli_select_db($conn, "fingerprint");  
 
 
         $query="SELECT * 
FROM vote 
WHERE V_NID='$nid' and VoteDone=1"; 
 $result=mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($result); 
 
 
 if($row["VoteDone"]==1)
	{   
        
		 
        // echo "Already Vote DOne Already Vote DOne Already Vote DOne Already Vote DOne"; 
		?> 
		<div style="position:absolute;top:35%;left:60%;font-size:180% ">
	 <label type="name" >Already Vote Done</label> 
	 
	 
	 </div>   
	 
	 <button type="button" style="position:absolute;top:55%;left:62%;font-size:20px "><a href='voterHome.php'>Back to Home</a></button> 
	 
	 <?php
	}  
	
	
else
{
    
	
	
    $query ="INSERT INTO vote(Vt_ID,VoteDone,V_NID,C_NID) VALUES ('','1','$nid','$cin')"; 
 
    



 
 $result=mysqli_query($conn,$query);  




?> 
<div style="position:absolute;top:35%;left:59%;font-size:180% "> 



	 <label type="name" >successfully Vote Done</label> 
	 
	 
	 </div>   
	 
	 <button type="button" style="position:absolute;top:55%;left:62%;font-size:20px "><a href='voterHome.php'>Back to Home</a></button> 
	 

<?php	 
 
 
 
 
}
	
 
// header("Location:voterHome.php");
 
 
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

