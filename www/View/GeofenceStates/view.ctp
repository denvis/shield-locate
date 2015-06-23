<div class="geofenceStates view">
<h2><?php echo __('Geofence State'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($geofenceState['GeofenceState']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($geofenceState['User']['id'], array('controller' => 'users', 'action' => 'view', $geofenceState['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geofence'); ?></dt>
		<dd>
			<?php echo $this->Html->link($geofenceState['Geofence']['name'], array('controller' => 'geofences', 'action' => 'view', $geofenceState['Geofence']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($geofenceState['GeofenceState']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($geofenceState['GeofenceState']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($geofenceState['GeofenceState']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Geofence State'), array('action' => 'edit', $geofenceState['GeofenceState']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Geofence State'), array('action' => 'delete', $geofenceState['GeofenceState']['id']), array(), __('Are you sure you want to delete # %s?', $geofenceState['GeofenceState']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Geofence States'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Geofence State'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Geofences'), array('controller' => 'geofences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Geofence'), array('controller' => 'geofences', 'action' => 'add')); ?> </li>
	</ul>
</div>
