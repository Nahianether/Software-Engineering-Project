<?php
  session_start();
  $user=$_SESSION['user'];
$pass=$_SESSION['pass'];
 $loca=$_SESSION['loc'];
$eid=$_SESSION['eid'];
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

  input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
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
 //echo "hello";
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 //echo $loc;
 $db = mysqli_select_db($conn, "fingerprint");  
 $nid=$_SESSION['user1'];
 
 
         $query="SELECT * 
FROM vote 
WHERE V_NID='$nid'"; 
 $result=mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($result); 
 
 
 if($row["VoteDone"]==1)
	{   
        
		 
        // echo "Already Vote DOne Already Vote DOne Already Vote DOne Already Vote DOne"; 
		?> 
		<div style="position:absolute;top:35%;left:60%;font-size:180% ">
	 <label type="name" >Already Vote Done</label> 
	 
	 
	 </div>   
	 
	 <button type="button" style="position:absolute;top:55%;left:62%;font-size:20px "><a href='takeVote.php'>Back</a></button> 
	 
	 <?php
	}  
	
	
else
{
    
	
	
    $query ="INSERT INTO vote(Vt_ID,VoteDone,V_NID,C_NID) VALUES ('','1','$nid','$cin')"; 
 
    



 
 $result=mysqli_query($conn,$query);  

 $query1="SELECT * FROM `candidate` WHERE C_NID='$cin'";
 $result1=mysqli_query($conn,$query1);
 $row=mysqli_fetch_assoc($result1);
 $location=$row['C_Location'];

 $query1="SELECT * FROM `result` WHERE C_NID='$cin'";
 $result1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_assoc($result1);
?>

<?php
$count=0;

 if($row1){
 
     $count=$row1['R_Count'];
     $count=$count+1;
     $query1="UPDATE `result` SET R_Count=$count where C_NID='$cin'";
     $result1=mysqli_query($conn,$query1);
 }
 else{


     $query1="INSERT INTO `result`(`R_ID`, `C_NID`, `R_Count`, `R_Location`, `Published`) VALUES ('','$cin',1,'$location',0)";
     $result1=mysqli_query($conn,$query1);
 }



?> 
<div style="position:absolute;top:35%;left:59%;font-size:180% "> 

   
	 <label type="name" >successfully Vote Done</label> 
	 
	 
	 </div>   
	 
	 <button type="button" style="position:absolute;top:55%;left:62%;font-size:20px "><a href='takeVote.php'>Back</a></button> 
	 

<?php	 
 
 
 
 
}
	
 
// header("Location:voterHome.php");
 
 
 }
 
 ?>
  












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
