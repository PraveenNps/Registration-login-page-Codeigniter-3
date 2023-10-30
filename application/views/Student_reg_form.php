<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/style_reg_form.css');?>">
    <title>Document</title>
</head>
<body>


    <form action="<?= base_url('Student_reg/savedata/')?>" enctype="mltipart/" method ="POST" >
        
    <h3>REGISTRATION</h3>
        
        <table>
            <tr>
                <td><label for="">Student Name</label></td>
                <td><input type="text"  name="studentname">
                <span><?= form_error('studentname');?></span></td>
            </tr>
            <tr>
                <td><label for="">Roll Number</label></td>
                <td><input type="text"  name="studentrollnumber">
                <span><?= form_error('studentrollnumber'); ?></span></td>
                
            </tr>

            <tr>
                <td><label for="">Class</label></td>
                <td><input type="text"  name="studentclass">
                <span><?= form_error('studentclass'); ?></span></td>
                
            </tr>

            <tr>
                <td><label for="">Mark</label></td>
                <td><input type="text"  name="studentmark">
                <span><?= form_error('studentmark'); ?></span></td>
                

            </tr>
            <tr>
                <td><label for="">Email</label></td>
                <td><input type="text"  name="studentemail">
                <span><?= form_error('studentemail'); ?></span></td>
                
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="text"  name="studentpassword">
                <span><?= form_error('studentpassword'); ?></span></td>
                
            </tr>
            <td></td>
           <td><button type="submit" name="submit" value="Submit">Submit</button></td> 
        </tr>
        <td></td>
           <td> <a href="<?= base_url('Student_reg/login/');?>">login</a> </td> 
        </tr>

        </table>
        
       
        
        
    </form>
    <?php echo form_close(); ?>
</body>
</html>