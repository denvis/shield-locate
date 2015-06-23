<div class="geofenceStates form">
<?php echo $this->Form->create('GeofenceState'); ?>
	<fieldset>
		<legend><?php echo __('Add Geofence State'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('geofence_id');
		echo $this->Form->input('state');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Geofence States'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Geofences'), array('controller' => 'geofences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Geofence'), array('controller' => 'geofences', 'action' => 'add')); ?> </li>
	</ul>
</div>
