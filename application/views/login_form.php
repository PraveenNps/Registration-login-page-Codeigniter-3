<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/style_login_form.css');?>">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url('Student_reg/login_user/')?>" method="POST">
        <h1>LOGIN</h1>
        <table>
            <tr>
                <td><label for="">Username</label></td>
                <td><input type="email" name="email" >
                <span><?= form_error('email');?></span></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="password" name="password">
                <span><?= form_error('password');?></span></td>
            </tr>
            <tr>
                 <td> <button>login</button></td>
            </tr>
        </table>
        
        
    
    
    
    
   

    </form>
</body>
</html>