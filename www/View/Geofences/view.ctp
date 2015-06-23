<div class="geofences view">
<h2><?php echo __('Geofence'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($geofence['Geofence']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($geofence['Geofence']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latitiude'); ?></dt>
		<dd>
			<?php echo h($geofence['Geofence']['latitiude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitude'); ?></dt>
		<dd>
			<?php echo h($geofence['Geofence']['longitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Radius'); ?></dt>
		<dd>
			<?php echo h($geofence['Geofence']['radius']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Geofence'), array('action' => 'edit', $geofence['Geofence']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Geofence'), array('action' => 'delete', $geofence['Geofence']['id']), array(), __('Are you sure you want to delete # %s?', $geofence['Geofence']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Geofences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Geofence'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Geofence States'), array('controller' => 'geofence_states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Geofence State'), array('controller' => 'geofence_states', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Geofence States'); ?></h3>
	<?php if (!empty($geofence['GeofenceState'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Geofence Id'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($geofence['GeofenceState'] as $geofenceState): ?>
		<tr>
			<td><?php echo $geofenceState['id']; ?></td>
			<td><?php echo $geofenceState['user_id']; ?></td>
			<td><?php echo $geofenceState['geofence_id']; ?></td>
			<td><?php echo $geofenceState['state']; ?></td>
			<td><?php echo $geofenceState['created']; ?></td>
			<td><?php echo $geofenceState['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'geofence_states', 'action' => 'view', $geofenceState['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'geofence_states', 'action' => 'edit', $geofenceState['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'geofence_states', 'action' => 'delete', $geofenceState['id']), array(), __('Are you sure you want to delete # %s?', $geofenceState['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Geofence State'), array('controller' => 'geofence_states', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
