<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($message)){
        echo $message;
    }
     ?>
    <form action="<?=base_url('Student_reg/update_password/')?>" method="POST">
    <table>
        <h3>Change password</h3>
    <tr>
                <td><label for="old_password">Old Password</label></td>
                <td><input type="password" name="old_password" >
                <span><?= form_error('old_password');?></span></td>
            </tr>
            <tr>
                <td><label for="new_password">New Password</label></td>
                <td><input type="password" name="new_password" >
                <span><?= form_error('new_password');?></span></td>
            </tr>
            <tr>
                <td><label for="confirm_password">Confirm Password</label></td>
                <td><input type="password" name="confirm_password" >
                <span><?= form_error('confirm_password');?></span></td>
            </tr>
            <tr>
                 <td> <button>Submit</button></td>
            </tr>
            
    </table>

    </form>
    
</body>
</html>