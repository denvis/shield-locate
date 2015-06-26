<div class="geofenceStates index">
	<h2><?php echo __('Geofence States'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('geofence_id'); ?></th>
			<th><?php echo $this->Paginator->sort('trigger'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($geofenceStates as $geofenceState): ?>
	<tr>
		<td><?php echo h($geofenceState['GeofenceState']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($geofenceState['User']['id'], array('controller' => 'users', 'action' => 'view', $geofenceState['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($geofenceState['Geofence']['name'], array('controller' => 'geofences', 'action' => 'view', $geofenceState['Geofence']['id'])); ?>
		</td>
		<td><?php echo h($geofenceState['GeofenceState']['trigger']); ?>&nbsp;</td>
		<td><?php echo h($geofenceState['GeofenceState']['created']); ?>&nbsp;</td>
		<td><?php echo h($geofenceState['GeofenceState']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $geofenceState['GeofenceState']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $geofenceState['GeofenceState']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $geofenceState['GeofenceState']['id']), array(), __('Are you sure you want to delete # %s?', $geofenceState['GeofenceState']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Geofence State'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Geofences'), array('controller' => 'geofences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Geofence'), array('controller' => 'geofences', 'action' => 'add')); ?> </li>
	</ul>
</div>
