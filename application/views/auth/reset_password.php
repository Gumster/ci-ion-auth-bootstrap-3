<?php $this->load->view('_blocks/header'); ?>
<div id="content" class="container">
<h1><?php echo lang('reset_password_heading');?></h1>

<?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

<?php echo form_open('auth/reset_password/' . $code, array('class' => 'form-horizontal'));?>

	<div class="form-group">
		<label class="col-sm-2"  for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label>
                <div class="col-sm-10"><?php echo form_input($new_password, NULL, 'class="form-control"');?></div>
	</div>

	<div class="form-group">
            <label class="col-sm-2"><?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?></label> 
		<div class="col-sm-10"><?php echo form_input($new_password_confirm, NULL, 'class="form-control"');?></div>
	</div>

	<?php echo form_input($user_id);?>
	<?php echo form_hidden($csrf); ?>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <?php echo form_submit(array('name' => 'submit', 'id' => 'submitter', 'class' => 'btn btn-primary btn-large', 'value' => 'Reset'));?>
            </div>
        </div>

<?php echo form_close();?>

<?php $this->load->view('_blocks/footer'); ?>