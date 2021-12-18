<?php
 session_start();
 
 if(isset($_SESSION['uid']))
 {
     echo "";
 }
else
{
    header('location:../login.php');
}

?>  
<?php 
    include("header.php");
    include("titlehead.php");

?>

<form method="POST" action="addstudent.php" enctype="multipart/form-data">
<table border="2" align="center" width=50% bgcolor="cyan">

            <tr>
                  <td>1.</td><td>Roll number</td>
                  <td><input type="text" name="rollno" placeholder="Enter Roll Number" required></td>
            </tr>

            <tr>
                  <td>2.</td><td>Full Name</td>
                  <td><input type="text" name="fullname" placeholder="Enter Full Name" required></td>
            </tr>

            <tr>
                  <td>3.</td><td>City</td>
                  <td><input type="text" name="city" placeholder="Enter City" required></td>
            </tr>

            <tr>
                  <td>4.</td><td>Parents contact number</td>
                  <td><input type="text" name="pcontctno" placeholder="Enter parents contact Number" required></td>
            </tr>

            <tr>
                  <td>5.</td><td>Standard</td>
                  <td><input type="text" name="std" placeholder="Enter Standard" required></td>
            </tr>

            <tr>
                  <td>6.</td><td>Image</td>
                  <td><input type="file" name="simg" required></td>
            </tr>

            <tr>
              <td colspan="3" align="center">  <input type="submit" name="submit" value="Submit"></td>
            </tr>
</table>
</form>
</body>
</html>
<?php
      if(isset($_POST['submit']))
      {
            include("../dbconn.php");
            $rollno=$_POST['rollno'];
            $name=$_POST['fullname'];
            $city=$_POST['city'];
            $pcontact=$_POST['pcontctno'];
            $standard=$_POST['std'];
            $img=$_FILES['simg']['name'];
            $tempname=$_FILES['simg']['tmp_name'];

            move_uploaded_file($tempname,"../dataimg/$img");
            



            $qry="INSERT INTO `student` (`roll no`, `name`, `city`, `parents no`, `standard`,`image`) VALUES 
            ('".$rollno."','".$name."','".$city."','".$pcontact."','".$standard."','".$img."')";
            
            $run=mysqli_query($conn,$qry);
            
            
            if($run==true)
            {
                  ?>
                  <script>
                  alert('Information saved successfully into the Database!!')
                  </script>
                  <?php
                  
            }else {
                  ?>
                  <script>
                  alert('Wrong Information!!')
                  </script>
                  <?php
            }









      }

      


?>

  