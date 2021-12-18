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
<table border="2" align="center" width=30% bgcolor="cyan" >
<form action="updatestudent.php" method="POST">
<tr>
    <td>Enter Standard</td>
   <td><input type="number" name="standard" placeholder="Enter standard" required></td>
</tr>
<tr>
    <td>Enter student name</td>
   <td> <input type="text" name="sname" placeholder="Enter student name" required></td>
</tr>
<tr>
    
   <td colspan="2" align="center" > <input type="submit" name="submit" ></td>
</tr>
</form>
</table>
<table border="2" align="center" width="80%" style="margin-top:10px" bgcolor="cyan">
<tr bgcolor=#fff>
    <th>No</th>
    <th>Image</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>Edit</th>
</tr>
    <?php
    if(isset($_POST['submit']))
    {
        include("../dbconn.php");
        $standard=$_POST['standard'];
        $name=$_POST['sname'];

        $sql="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";

        $run=mysqli_query($conn,$sql);
        if(mysqli_num_rows($run)<1)
        {
            echo "<tr><td colspan='5'>********************************No records found************************</td></tr>" ;
        }
        else{
            $count=0;
            while($data=mysqli_fetch_assoc($run))
            {
                $count++;
                ?>
                <tr align="center">
                <td><?php echo $count; ?></td>
                <td><img src="../dataimg/<?php echo $data['image'];?>"style="max-width:100px;"></td>
                <td><?php echo $data['name']?></td>
                <td><?php echo $data['roll no']?></td>
                <td><a href="updateform.php?sid=<?php echo $data['id'] ?>">Edit</td>
                </tr>
                <?php
            }
        }
    }

?>

</table>
