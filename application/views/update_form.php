<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($data)){
        //print_r($data);
        ?>
        <form action="<?= base_url('Student_reg/updatedata/'.$data->id)?>" method ="post">
 <h3>Update</h3>
 <table>
   
     <tr>
        <td for=""><label for="">Name</label></td>
        <td><input type="text" name="studentname" value="<?=$data->Student_Name?>"></td> 
     </tr>
     <tr>
        <td for=""><label for="">Roll Number</label></td>
        <td><input type="text" name="rollnumber" value="<?=$data->Student_RollNumber?>" ></td> 
     </tr>
     <tr>
        <td for=""><label for="">Class</label></td>
        <td><input type="text" name="class" value="<?=$data->Class?>"></td> 
     </tr>
     <tr>
        <td for=""><label for="">Mark</label></td>
        <td><input type="number" name="mark" value="<?=$data->Mark?>"></td> 
     </tr>
     
      <tr>
        <td></td>
        <td><button type="submit" name="Update" value="Update">Update</button></td> 
     </tr>

 </table>
</form>
        <?php
    }
    ?>
    
</body>
</html>