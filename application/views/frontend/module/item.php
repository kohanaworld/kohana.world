<?php defined('SYSPATH') OR die('No direct access allowed.');?>
<div class="module_head">
	<?php echo html::anchor(
		Route::url('modules', array(
			'developer' => $module->developer->username,
			'module' => $module->name
		)),
			'<h1>'.$module->name.'</h1>',
			array('style' => 'font-size:1.7em')
		);
	?>
</div>
<div class="module_desc">
	<?php
		echo $module->description;
	?>
</div>
<div class="module_foot">
	<?php echo html::anchor(
		Route::url('modules', array(
			'developer' => $module->developer->username
		)),
		$module->developer->username);
	?>
</div>