
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
    include("../dbconn.php");

    $sid=$_GET['sid'];

    $sql="SELECT * FROM `student` WHERE `id`='$sid'";
    $run=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($run)
?>


<form method="POST" action="updatedata.php" enctype="multipart/form-data">
<table border="2" align="center" width=50% bgcolor="violet" style="margin-top:10px">

            <tr>
                  <td>1.</td><td>Roll number</td>
                  <td><input type="text" name="rollno" value=<?php echo $data['roll no'] ?> required></td>
            </tr>

            <tr>
                  <td>2.</td><td>Full Name</td>
                  <td><input type="text" name="fullname" value=<?php echo $data['name'] ?> required></td>
            </tr>

            <tr>
                  <td>3.</td><td>City</td>
                  <td><input type="text" name="city" value=<?php echo $data['city'] ?> required></td>
            </tr>

            <tr>
                  <td>4.</td><td>Parents contact number</td>
                  <td><input type="text" name="pcontctno" value=<?php echo $data['parents no'] ?> required></td>
            </tr>

            <tr>
                  <td>5.</td><td>Standard</td>
                  <td><input type="text" name="std" value=<?php echo $data['standard'] ?> required></td>
            </tr>

            <tr>
                  <td>6.</td><td>Image</td>
                  <td><input type="file" name="simg" required ></td>
            </tr>

            <tr>
             <input type="hidden" name="sid" value="<?php echo $data['id'] ?>"></td>
              <td colspan="3" align="center">  <input type="submit" name="submit" value="Submit"></td>
            </tr>
</table>
</form>
