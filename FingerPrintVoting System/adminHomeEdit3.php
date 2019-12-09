 <?php
  session_start();
  $user=$_SESSION['user'];
$pass=$_SESSION['pass'];
 $loca=$_SESSION['loc'];
  ?>


 <?php   
              
   

      $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "fingerprint");
 //sql query to fetch information of registerd user and finds user match.
  
  
  //$A_NID= $_SESSION['nid'];
   //echo $A_NID;
 // echo "0 result"; 
  
  
 
  $query = "Delete from election where Area_Info like '%$loca%' and VotingLine=1";   
   
    $result=mysqli_query($conn,$query);
      //$row = mysqli_fetch_assoc($result);
    header("Location:adminHome3.php");
  
  
  
  

?>