<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>To Do | Login</title>
    </head>
 
    <body>
		<?php $this->load->view('includes/menu.php'); ?>
        <div id="wrapper">
            <div class="login_panel">
                <?php echo form_open('users/login'); ?>
                    <table style="padding:40px">
                        <tr>
                            <td width="80px">Username</td>
                            <td>
                                <?php 
                                    $data = array ('name' => 'username',
                                        'id' => 'username',
                                        'style' => 'width: 200px',
                                    );
                                    echo form_input($data); 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><?php echo form_password('password', '', 'id="password"'); ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <?php echo form_submit('submit', 'Login'); ?>
                                <?php echo form_reset('reset', 'Reset'); ?>
                            </td>
                        </tr>
                    </table>
                <?php echo form_close(); ?>
            </div>
        </div>
    </body>
</html>