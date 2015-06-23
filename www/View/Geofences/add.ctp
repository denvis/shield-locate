<div class="geofences form">
<?php echo $this->Form->create('Geofence'); ?>
	<fieldset>
		<legend><?php echo __('Add Geofence'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('latitiude');
		echo $this->Form->input('longitude');
		echo $this->Form->input('radius');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Geofences'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Geofence States'), array('controller' => 'geofence_states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Geofence State'), array('controller' => 'geofence_states', 'action' => 'add')); ?> </li>
	</ul>
</div>
