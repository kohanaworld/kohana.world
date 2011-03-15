<?php defined('SYSPATH') OR die('No direct access allowed.');
$mod_view = View::factory('frontend/module/item')->bind('module', $module);
?>
<h2><?php echo __('developer modules') ?></h2>
<div class="module_list">
	<?php foreach($modules as $module): ?>
		<div class="module"><?php echo $mod_view ?></div>
	<?php endforeach ?>
</div>
<?php echo $pagination ?>
