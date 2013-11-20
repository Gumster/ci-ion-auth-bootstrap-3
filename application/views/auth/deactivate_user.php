<?php $this->load->view('_blocks/header'); ?>
<div id="content" class="container">
    
<p class="pull-right"><a class="btn btn-default" href="<?php echo base_url('auth'); ?>">Back</a></p>
<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

<?php echo form_open("auth/deactivate/".$user->id, array('class' => 'form-horizontal'));?>


      <div class="checkbox"><label>
  	<input type="radio" name="confirm" value="yes" checked="checked"> <?php echo $this->lang->line('deactivate_confirm_y_label');?>
    </label></div>
 


      <div class="checkbox"><label>
    <input type="radio" name="confirm" value="no"> <?php echo $this->lang->line('deactivate_confirm_n_label'); ?>
    </label></div>


  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user->id)); ?>

  <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
          <?php echo form_submit(array('name' => 'submit', 'value' => 'Deactivate', 'class' => 'btn btn-danger'));?>
      </div>
  </div>

<?php echo form_close();?>

<?php $this->load->view('_blocks/footer'); ?>
