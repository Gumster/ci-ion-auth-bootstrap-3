<?php $this->load->view('_blocks/header'); ?>
<div id="content" class="container">

<p><?php echo lang('index_subheading');?></p>

<?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

<p><?php echo anchor('auth/create_user', lang('index_create_user_link'), array('class' => 'btn btn-default')); ?>
 &nbsp; <?php echo anchor('auth/create_group', lang('index_create_group_link'), array('class' => 'btn btn-default')); ?></p>

<table class="table table-striped table-hover">
    <thead>
	<tr>
		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('index_groups_th');?></th>
		<th><?php echo lang('index_status_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
	</tr>
    </thead>
    <tbody>
	<?php foreach ($users as $user):?>
		<tr>
			<td><?php echo $user->first_name;?></td>
			<td><?php echo $user->last_name;?></td>
			<td><?php echo $user->email;?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link'), array('class' => 'btn btn-danger')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'), array('class' => 'btn btn-danger'));?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit', array('class' => 'btn btn-primary')) ;?></td>
		</tr>
	<?php endforeach;?>
    </tbody>
</table>



<?php $this->load->view('_blocks/footer'); ?>

