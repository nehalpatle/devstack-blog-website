<html>
  <head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
<?php
class Employees
{
    private $db;
 
    function __construct($DB_con)
    {
      $this->db = $DB_con;

    }

     public function addEmployees($bname,$fname,$email,$photo,$Content)
    {

      try
      {

        $stmt = $this->db->prepare("INSERT INTO blogg (bname,name,email,photo,Content) VALUES (:bname,:name,:email,:photo,:Content)");
        $stmt->bindParam(':bname', $bname);
        $stmt->bindParam(':name', $fname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':photo', $photo);
        $stmt->bindParam(':Content', $Content);
        if($stmt->execute())
          echo "<script>window.location='blog.php';</script>";
        else
          echo '<div class="alert alert-danger">Failed to add..!!</div>';
      }catch(PDOException $e){
           echo $e->getMessage();
      }

    }


public function getEmployeesDetails()
      {
        try {
          $qry = "SELECT * FROM blogg ORDER BY blog_id  DESC";
          $stmt = $this->db->prepare($qry);
          $stmt->execute();
          $i = 1;
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)){


            echo '<div class="media border p-3 container-fluid jumbotron">';


            echo '<h6>'.$i.'</h6>';
            echo '<img class="mr-3 mt-3" style="border:1px solid black;border-radius:50%;" src="bank/'.$row['photo'].'" width="200px" height="200px">'.'<br>';


            echo '<div class="media-body" >';
              
              echo '<br>'.'<h3 style="text-align:center;text-transform:uppercase;text-shadow: 0 0 25px red">'.$row['name'].'</h3>'.'<hr>'.'<br>';
              
              echo '<p>'.'<b>'.$row['Content'].'</b>'.'</p>'.'<br>'.'<hr>'.'<br>';
              echo '<h5 style="text-transform:uppercase">'."BY-: ".$row['bname'].'</h5>';
              echo '<h6>'.$row['email'].'</h6>'.'<br>';
            
          //echo '<td>'.$row['resume'].'</td>';


          //echo '<h5><a href="deleteblog.php?blog_id='.$row['blog_id'].'&table=service&link=contactdetails.php" onclick=\'return confirm("Are you sure you want to delete?");\'>Delete</a></h5>';
           echo '</div>';
            echo '</div>';
            $i++;
          }
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function deleteStaff($blog_id)
    {

      try
      {

        $qry = "DELETE FROM blogg WHERE blog_id=:blog_id";
        $stmt = $this->db->prepare($qry);
        $stmt->execute([':blog_id' => $blog_id]);
        if($stmt->execute())
          echo "<script>alert('Record  Deleted Successfully..!!'); window.location='bloggingweb.php';</script>";
        else
          echo "<script>alert('Failed to Delete Record..!!'); window.location='bloggingweb.php';</script>";

      }catch(PDOException $e){
           echo $e->getMessage();
      }
    }


    
    
}

?>
</body>
</html>