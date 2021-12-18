<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System</title>
</head>
<body>


<h3 align="right" style="margin-right:20px;"><a href="login.php">Admin login </a></h3>

<h1 align="center">Welcome to student management system</h1>

<form method="POST" action="index.php">
<table style="width:30%;" align="center" border="2" bgcolor="plum">
<tr> 
<td colspan="2" align="center">Student Information:-</td>
</tr>

<tr>
    <td align="left">Choose Standard</td>
    <td>
        <select name="std">
            <option >1</option>
            <option >2</option>
            <option >3</option>
            <option >4</option>
            <option >5</option>
            <option >6</option>
            <option >7</option>
            <option >8</option>
            <option >9</option>
            <option >10</option>
            <option >11</option>
            <option >12</option>
        </select>
    </td>
</tr>

<tr>
    <td align="left">Enter Rollno.</td>
    <td><input type="text" name="RollNo" required></td>
</tr>

<tr>
<td colspan="2" align="center" ><input type="submit" name="submit" value="Show Information" ></td>
</tr>
</table>
</body>
</html>
<?php
 if(isset($_POST['submit']))
 {
     $standard=$_POST['std'];
     $rollno=$_POST['RollNo'];
    include('dbconn.php');
    include('function.php');
     

    showdetails($standard,$rollno);
 }
?>
