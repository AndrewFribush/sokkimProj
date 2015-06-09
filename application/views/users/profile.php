<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>To Do | Profile</title>
    </head>
 
    <body>
		<?php $this->load->view('includes/menu.php'); ?>
        <div id="wrapper">
            <div class="login_panel">
                <?php echo validation_errors();
					echo form_open('users/profile'); ?>
                    <table style="padding:40px">
                        <tr>
                            <td width="80px">Name</td>
                            <td>
                                <?php 
                                    $data = array ('name' => 'name',
                                        'id' => 'name',
                                        'style' => 'width: 200px',
										'value' => $row->name
                                    );
                                    echo form_input($data); 
                                ?>
                            </td>
                        </tr>					
                        <tr>
                            <td width="80px">Username</td>
                            <td>
                                <?php 
                                    $data = array ('name' => 'username',
                                        'id' => 'username',
                                        'style' => 'width: 200px',
										'value' => $row->username
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
                                <?php echo form_submit('submit', 'Update'); ?>
                                <?php echo form_reset('reset', 'Reset'); ?>
                            </td>
                        </tr>
                    </table>
                <?php echo form_close(); ?>
            </div>
        </div>
    </body>
</html>