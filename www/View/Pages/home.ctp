<div class="container" role="main">
	<div class="row">
		<div class="col-md-12 col-lg-12">
			<H1>Hello World</H1>

				<p>
				<?php
				if (version_compare(PHP_VERSION, '5.2.8', '>=')):
					echo '<div class="alert alert-success" role="alert"> <i class="fa fa-check"></i> ';
						echo __d('cake_dev', 'Your version of PHP is 5.2.8 or higher.');
					echo '</div>';
				else:
					echo '<div class="alert alert-warning" role="alert">';
						echo __d('cake_dev', 'Your version of PHP is too low. You need PHP 5.2.8 or higher to use CakePHP.');
					echo '</div>';
				endif;
				?>
				</p>
				<p>
					<?php
					if (is_writable(TMP)):
						echo '<div class="alert alert-success" role="alert"> <i class="fa fa-check"></i> ';
							echo __d('cake_dev', 'Your tmp directory is writable.');
						echo '</div>';
					else:
						echo '<div class="alert alert-warning" role="alert">';
							echo __d('cake_dev', 'Your tmp directory is NOT writable.');
						echo '</div>';
					endif;
					?>
				</p>
				<p>
					<?php
					$settings = Cache::settings();
					if (!empty($settings)):
						echo '<div class="alert alert-success" role="alert"> <i class="fa fa-check"></i> ';
							echo __d('cake_dev', 'The %s is being used for core caching. To change the config edit %s', '<em>' . $settings['engine'] . 'Engine</em>', 'APP/Config/core.php');
						echo '</div>';
					else:
						echo '<div class="alert alert-warning" role="alert">';
							echo __d('cake_dev', 'Your cache is NOT working. Please check the settings in %s', 'APP/Config/core.php');
						echo '</div>';
					endif;
					?>
				</p>
				<p>
					<?php
					$filePresent = null;
					if (file_exists(APP . 'Config' . DS . 'database.php')):
						echo '<div class="alert alert-success" role="alert"> <i class="fa fa-check"></i> ';
							echo __d('cake_dev', 'Your database configuration file is present.');
							$filePresent = true;
						echo '</div>';
					else:
						echo '<div class="alert alert-warning" role="alert">';
							echo __d('cake_dev', 'Your database configuration file is NOT present.');
							echo '<br/>';
							echo __d('cake_dev', 'Rename %s to %s', 'APP/Config/database.php.default', 'APP/Config/database.php');
						echo '</div>';
					endif;
					?>
				</p>
				<?php
				if (isset($filePresent)):
					App::uses('ConnectionManager', 'Model');
					try {
						$connected = ConnectionManager::getDataSource('default');
					} catch (Exception $connectionError) {
						$connected = false;
						$errorMsg = $connectionError->getMessage();
						if (method_exists($connectionError, 'getAttributes')):
							$attributes = $connectionError->getAttributes();
							if (isset($errorMsg['message'])):
								$errorMsg .= '<br />' . $attributes['message'];
							endif;
						endif;
					}
					?>
					<p>
						<?php
							if ($connected && $connected->isConnected()):
								echo '<div class="alert alert-success" role="alert"> <i class="fa fa-check"></i> ';
									echo __d('cake_dev', 'CakePHP is able to connect to the database.');
								echo '</div>';
							else:
								echo '<div class="alert alert-warning" role="alert">';
									echo __d('cake_dev', 'CakePHP is NOT able to connect to the database.');
									echo '<br /><br />';
									echo $errorMsg;
								echo '</div>';
							endif;
						?>
					</p>
				<?php
				endif;
				?>

		</div><!-- COL END -->
	</div><!-- ROW END -->
</div>