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
    
    width: 30%;    
    
  
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
   if(isset($_POST['submit'])){

       $user1=$_POST['user'];
       $_SESSION['user1']=$user1;
        $pass1=$_POST['pass'];

        $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "fingerprint");
 
  $query = "SELECT * FROM voter  WHERE V_Pass='$pass1' AND V_NID='$user1' AND V_Address like '%$eid%'";
 //sql query to fetch information of registerd user and finds user match.
$result=mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($result);
 //echo $row['V_Name'];
 ?>
 <table id="t01" style="position:absolute;top:35%;left:50%"  >
  <tr>
   <th>Vote</th> 
    <th>Name</th> 
  
    <th>Symbol</th> 
  <th>Party</th> 
    
  </tr>
  <tr>  
    <?php

  $query1 = "SELECT * FROM candidate WHERE C_Location like '%$loca%'";
  $result1=mysqli_query($conn,$query1);

    while($row1=mysqli_fetch_assoc($result1)){  
                               // $row = mysqli_fetch_assoc($result);             
                $c=$row1["C_Name"];
                $cin=$row1["C_NID"];
                echo "<tr>"; 
        echo "<td>";
                //$_SESSION['cin']=$cin;
                //echo $_SESSION['cin'];
                ?>
                
                
               <form action="takeVote3.php" method="post">  
                
                <input type="radio" name="loca" value="<?php echo $cin ?>"></input>
                
                
                <?php 
                  echo "<td>" . $row1['C_Name'] . "</td>"; 
echo "<td>" . $row1['Symbol'] . "</td>"; 
echo "<td>" . $row1['C_Party'] . "</td>";         

echo "</td>"; 
echo "</tr>";  
                 }

?>
<a href="takeVote3.php"><br><input type="submit" value="Submit" name="submit" style="position:absolute;top:80%;left:60%;width: 10%"></a>
</form> 
<?php

      }
    ?>

    
  </tr> 
  
  
</table>









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
