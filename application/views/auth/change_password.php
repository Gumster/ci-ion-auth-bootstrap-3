<?php $this->load->view('_blocks/header'); ?>
<div id="content" class="container">


<?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

<?php echo form_open("auth/change_password", array('class' => 'form-horizontal'));?>

      <div class="form-group">
            <?php echo form_label($this->lang->line('change_password_old_password_label'), 'old_password', array('class' => 'col-sm-2 control-label'));?> 
          <div class="col-sm-10"><?php echo form_input($old_password, NULL, 'class="form-control"');?></div>
      </div>

      <div class="form-group">
            <label class="col-sm-2 control-label" for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> 
            <div class="col-sm-10"><?php echo form_input($new_password, NULL, 'class="form-control"');?></div>
      </div>

      <div class="form-group">
            <?php echo form_label($this->lang->line('change_password_new_password_confirm_label'), 'new_password_confirm', array('class' => 'col-sm-2 control-label'));?> 
            <div class="col-sm-10"><?php echo form_input($new_password_confirm, NULL, 'class="form-control"');?></div>
      </div>
    
    
     <?php echo form_input($user_id);?>

      
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10"><?php echo form_submit(array('class' => 'btn btn-primary btn-large', 'name' => 'change', 'value' => 'Change'));?></div>
      </div>

<?php echo form_close();?>


<?php $this->load->view('_blocks/footer'); ?>
