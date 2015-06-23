<div class="geofenceStates form">
<?php echo $this->Form->create('GeofenceState'); ?>
	<fieldset>
		<legend><?php echo __('Edit Geofence State'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GeofenceState.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('GeofenceState.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Geofence States'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Geofences'), array('controller' => 'geofences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Geofence'), array('controller' => 'geofences', 'action' => 'add')); ?> </li>
	</ul>
</div>
