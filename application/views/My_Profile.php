<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="result">
<tr>
           
            
            <th>ROll Namber</th>
            <th>Class</th>
            <th>Mark</th>
            <th>Update</th>
            <th>Delete</th>
            
            <?php
     
     if(isset($data)){
                 ?>
                 <tr>
                    <h3>Hello <?=$data->Student_Name ?></h3>
                    
                    <td><?=$data->Student_RollNumber?></td>
                    <td><?=$data->Class?></td>
                    <td><?=$data->Mark?></td>
                    <td ><a href="<?php echo  base_url('/Student_reg/update/'.$data->id); ?>"><button>Update</button></a></td>
                    <td> <a href="<?php echo base_url('/reg/delete/'.$data->id);?>"><button>Delete</button></a></td>
                    
                 </tr>
                 

<?php


            }
            
        
        
     ?>   
     
            
        </tr>
        
</table>





    
</body>
</html>