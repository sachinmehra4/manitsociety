<!doctype html>
<html lang="en">
 <style>
     .c1{
         background-color: black;
         margin-top: 2px;
         text-align:center;
         padding:250px;
         color: white;
     }
     
     .ask{
       margin-top: 10px;
       background-color: black;
       padding: 50px;
       text-align: center;
       
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
        <div class="c1">
        <div class="text">  <h5>Contact</h5>
            <p><span><svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg></span>+91 9876453277-R.P.Singh (Co-ordinator)</p>
              <p><span><svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg></span>+91 9876512347-J.S.Sharma (Sub Co-ordinator)</p>
              </div>
    </div>
    <div class="ask">
      <form action="final.php" method="POST">
      <input type="text" id="name" name="name"size="80" placeholder="ask me....." > 
      <button type="submit" >Ask</button> 
      </form>
  
    <?php
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        
        
        $servername="localhost";
        $username="root";
        $passward="";
        $database="ask";
      
        $conn=mysqli_connect($servername,$username,$passward,$database);
      
    
     $sql="INSERT INTO `ask` ( `ques`, `date`) VALUES ('$name', current_timestamp())";
     $result=mysqli_query($conn,$sql);
      
     

    }
   ?>
   
   
  
 </div>
 <?php include 'main/footer.html'?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>