<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('frontend.css');
		echo $this->fetch('css');
		
		echo $this->Html->script('frontend.js');
		echo $this->fetch('script');
		
		echo $this->fetch('meta');
		
		
	?>
</head>
<body>

	<?php echo $this->Session->flash(); ?>

	<?php echo $this->fetch('content'); ?>
	
	<?php echo $this->element('sql_dump'); ?>

</body>
</html>