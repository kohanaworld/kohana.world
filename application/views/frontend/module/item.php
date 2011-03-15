<?php defined('SYSPATH') OR die('No direct access allowed.');?>
<div>
	<?php echo html::anchor(
		Route::url('modules', array(
			'developer' => $module->developer->username,
			'module' => $module->name
		)),
		$module->name);
	?>
</div>
<div></div>
<div>
	<?php echo html::anchor(
		Route::url('modules', array(
			'developer' => $module->developer->username
		)),
		$module->developer->username);
	?>
</div>