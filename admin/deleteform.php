<?php
include("../dbconn.php");

$id=$_REQUEST['sid'];




$qry="DELETE FROM `student` WHERE `id`='$id';";

$run=mysqli_query($conn,$qry);
var_dump($run);


if($run==true)
{
      ?>
      <script>
      alert('Information Deleted successfully from the Database!!');
      window.open('deletestudent.php?sid=<?php echo $id;?>','_self'); 
      </script> 
      <?php
}
?>