<?php
include("../dbconn.php");
$rollno=$_POST['rollno'];
$name=$_POST['fullname'];
$city=$_POST['city'];
$pcontact=$_POST['pcontctno'];
$standard=$_POST['std'];
$id=$_POST['sid'];
$img=$_FILES['simg']['name'];
$tempname=$_FILES['simg']['tmp_name'];

move_uploaded_file($tempname,"../dataimg/$img");




$qry="UPDATE `student` SET  `roll no` = '$rollno', `name` = '$name', `city` = '$city', 
`parents no` = '$pcontact', `standard` = '$standard', `image` = '$img' WHERE `student`.`id` = $id;";

$run=mysqli_query($conn,$qry);
//var_dump($run);


if($run==true)
{
      ?>
      <script>
      alert('Information updated successfully into the Database!!');
      window.open('updateform.php?sid=<?php echo $id;?>','_self'); 
      </script> 
      <?php 
}
?>