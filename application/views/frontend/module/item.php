<?php defined('SYSPATH') OR die('No direct access allowed.');?>
<div class="module_head">
	<div style="font-size:1.7em">
				<?php echo html::anchor(
			Route::url('modules', array(
				'developer' => $module->developer->username
			)),
			$module->developer->username);
		?> /
		<?php echo html::anchor(
			Route::url('modules', array(
				'developer' => $module->developer->username,
				'module' => $module->name
			)),
				$module->name);
		?>
	</div>
</div>
<div class="module_desc">
	<?php
		echo $module->description;
	?>
</div>
<div class="module_foot">

</div>