<?php defined('SYSPATH') OR die('No direct access allowed.');?>
<?php echo html::anchor(
	Route::url('modules', array('developer' => $module->developer->username)),
	$module->developer->username
);?>/<?php echo html::anchor(
	Route::url('modules', array('developer' => $module->developer->username, 'module' => $module->name)),
	$module->name
);
?>
