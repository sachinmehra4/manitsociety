<?php
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $sno=$_POST['sno'];
        $email=$_POST['email'];
        $branch=$_POST['branch'];
        
        
        $servername="localhost";
        $username="root";
        $passward="";
        $database="toorya";
      
        $conn=mysqli_connect($servername,$username,$passward,$database);
      
    
     $sql="INSERT INTO `toorya` ( `name`, `scholar no`, `email`, `branch`, `time`) VALUES ( '$name', '$sno', '$email', '$branch', current_timestamp())";
     $result=mysqli_query($conn,$sql);
     if($result){
       echo'<div class="alert alert-success mt-5" role="alert">
       <h4 class="alert-heading">Well done!</h4>
       <p> you successfully registered</p>
  
     </div>';
     }

    }
?>



<!doctype html>
<html lang="en">
 <style>
    
   .cont{
    
    padding-bottom: 700px;
    border: 2px solid red;
    background-color: black;
    margin-top:0;
    
   }
  .logo{
    width: 50%;
    float: left;
    padding: 20px;
    margin-top: 50px;
    
  }
  form{
    color: white;
  }
  button{
   background-color:green;
  }
  img{
    border-radius:50%;
  }
 </style>    


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Tooryanaad!</title>
  </head>
  <body>
    <?php include 'main/nav.php'?>
    <div class="cont ">
      <div class="logo">
      <form action="registration.php" method="POST">
        <div class="form-group">
         <label for="name">Name</label><br>
         <input type="text" id="name" name="name" >
        </div>
        <div class="form-group">
         <label for="sno">Scholar Number</label><br>
         <input type="number"  id="sno" name="sno" >
        </div>
        <div class="form-group">
         <label for="email">Email address</label><br>
         <input type="email"  id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
         <label for="branch">Branch</label><br>
         <input type="text"  id="branch" name="branch" >
        </div>
        <button type="submit" >Submit</button> 
      </form>
      </div>
      <div class="logo">
      <img src="download.png" width="400px"height="400px">
     </div>
    </div>
    <?php include 'main/footer.html'?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>