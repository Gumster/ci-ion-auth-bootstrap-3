<?php $this->load->view('_blocks/header'); ?>
<div id="content" class="container">
    
    <p class="pull-right"><a class="btn btn-default" href="<?php echo base_url('auth'); ?>">Back</a></p>
    <p><?php echo lang('create_group_subheading'); ?></p>

    <?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

    <?php echo form_open("auth/create_group", array('class' => 'form-horizontal')); ?>

        <div class="form-group">
            <?php echo form_label($this->lang->line('create_group_name_label'), 'group_name', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3"><?php echo form_input($group_name, NULL, 'class="form-control"'); ?></div>
        </div>

        <div class="form-group">
            <?php echo form_label($this->lang->line('create_group_desc_label'), 'description', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3"><?php echo form_input($description, NULL, 'class="form-control"'); ?></div>
        </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10"><?php echo form_submit(array('name' => 'submit', 'class' => 'btn btn-primary btn-large', 'value' => 'Create')); ?></div>
    </div>
    <?php echo form_close(); ?>


<?php $this->load->view('_blocks/footer'); ?>
