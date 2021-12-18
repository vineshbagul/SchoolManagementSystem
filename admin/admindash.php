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
   

?>

    <div class="admintitle" align="center">
    <h4><a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h4>
        <h1> Welcome to Admin Dashboard</h1>
       
    </div>

    <div class="dashboard">
        <table border="2" align="center" width=30% >
            <tr>
                  <td>1.</td><td><a href="addstudent.php">Insert student details  </a></td>
            </tr>
            <tr>
                   <td>2.</td><td><a href="updatestudent.php">Update student details  </a></td>
            </tr>
            <tr>
                   <td>3.</td><td><a href="deletestudent.php">Delete student details  </a></td>
            </tr>
            <tr>
                   <td>3.</td><td><a href="allstudentlist.php">All student details  </a></td>
            </tr>
        </table>



    </div>
    
</body>
</html>