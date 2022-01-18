
<!DOCTYPE html>
<html>
<head>
  <title>WRITE YOUR BLOGS HERE</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url('bank/blog1.jpg');background-repeat: no-repeat;background-size:cover;">
<?php
  if(isset($_POST['submit'])){

                                    include_once 'dbconfig.php';
                                    include_once 'dbOperation.php';

                                    $dbObj = new Employees($DB_con);
                                    $bname=$_POST['bname'];
                                    $fname=$_POST['fname'];
                                    $email=$_POST['email'];
                                    $Content=$_POST['Content'];
                                    $photo = $_FILES["photo"]["name"];
                                    $photo_tmp = $_FILES["photo"]["tmp_name"];
                                    $dir ="bank/";
                                    if( move_uploaded_file($photo_tmp, $dir.$photo))
                                
                                         $dbObj->addEmployees($bname,$fname,$email,$photo,$Content);
                                         
                                        
                                }


                            
   ?>
     <div><br>
           <h2 style="text-align:center;color:white;text-shadow: 0 0 20px rgb(5, 245, 141)">CREATE YOUR OWN BLOG AND GET IT PUBLISHED BY US </h2>
       </div><hr><br>
       <div class="container jumbotron" style="text-align:center;background-image:url('bank/blog2.jpg');background-repeat: no-repeat;background-size:cover;">
       <form action="#" method="post" enctype="multipart/form-data">

       <label style="margin-left:-230px;text-shadow: 0 0 20px rgb(5, 245, 141);color:white"><b>WRITE YOUR NAME:</b></label>
       <input style="margin-left:250px;" type="text" name="bname" value="" required>
       <br><br><br>

       <label style="margin-left:-250px;text-shadow: 0 0 20px rgb(5, 245, 141);color:white"><b>WHAT'S YOUR BLOG HEADING:</b></label>
       <input style="margin-left:200px;" type="text" name="fname" value="" required>
       <br><br><br>
     
      <label style="margin-left:-230px;text-shadow: 0 0 20px rgb(5, 245, 141);color:white"><b>WRITE YOUR EMAIL:</b></label>
       <input style="margin-left:250px;" type="text" name="email" value="" required>
       <br><br><br>

       <label style="margin-left:-230px;text-shadow: 0 0 20px rgb(5, 245, 141);color:white"><b>UPLOAD YOUR PROFILE PHOTO</b></label>
       <input style="margin-left:250px;;text-shadow: 0 0 20px rgb(5, 245, 141);color:white" type="file" name="photo" value="" required>
       <br><br><br>

       <label style="margin-left:-150px;text-shadow: 0 0 20px rgb(5, 245, 141);color:white"><b>WRITE YOUR BLOG...</b></label>
      <textarea style="margin-left:250px;" type="text" name="Content" rows="8" cols="55"></textarea>
       <br>
       <br><br><br>
       <button type="submit" name="submit" value="submit" style="background-color:pink;border:1px solid red;border-radius:5px;padding:5px">SUBMIT</button>
    
       </form>
       </div>
</body>
</html>