<?php
function showdetails($standard,$rollno)
{
    include('dbconn.php');

    $sql="SELECT * FROM `student` WHERE `roll no`='$rollno' AND `standard`='$standard'";
    $run=mysqli_query($conn,$sql);
    

    if(mysqli_num_rows($run)>0)
    {
            $data=mysqli_fetch_assoc($run);
            
            ?>
                <table border="1" style="width:50%" align="center";>
                    <tr>
                        <th colspan='3'>Student Information</th>
                    </tr>
                    <tr>
                        <td rowspan='5'><img src="dataimg/<?php echo $data['image'];?>"style="max-height:20px max-width:40px;"/> </td>
                        <th>Roll number</th>
                        <td><?php echo $data['roll no']; ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $data['name']; ?> </td>
                    </tr>
                    <tr>
                        <th>standard</th>
                        <td><?php echo $data['standard']; ?> </td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td><?php echo $data['city']; ?> </td>
                    </tr>
                    <tr>
                        <th>Parents contact number</th>
                        <td><?php echo $data['parents no']; ?> </td>
                    </tr>
                </table>
                <?php
                
    }
    
    else
    {
        ?>
        <script>
        alert('There is no information about student!!');
        </script>
        
        <?php
    }
}
?>
