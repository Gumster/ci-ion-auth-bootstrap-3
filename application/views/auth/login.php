<?php $this->load->view('_blocks/header'); ?>
<div id="content" class="container">
    
    <p><?php echo lang('login_subheading'); ?></p>

    <?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

    <?php echo form_open("auth/login", array('class' => 'form-horizontal')); ?>
    <?php $error = (isset($field['name'])) ? form_error($field['name']) : NULL; ?>
    <div class="control-group <? if (!empty($error)): ?>error<? endif; ?>">
        <div class="form-group">
            <?php echo form_label($this->lang->line('login_identity_label'), 'identity', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3"><?php echo form_input($identity, NULL, 'class="form-control"'); ?></div>
        </div>

        <div class="form-group">
            <?php echo form_label($this->lang->line('login_password_label'), 'password', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3"><?php echo form_input($password, NULL, 'class="form-control"'); ?></div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-3">
            <div class="checkbox">
            <label>
                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?> <?php echo $this->lang->line('login_remember_label'); ?>
            </label>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10"><?php echo form_submit(array('class' => 'btn btn-primary btn-large', 'name' => 'login', 'value' => 'Login')); ?></div>
        </div>
    </div>
    <?php echo form_close(); ?>

    <p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>


<?php $this->load->view('_blocks/footer'); ?>
