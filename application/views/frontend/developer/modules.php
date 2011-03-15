<?php defined('SYSPATH') OR die('No direct access allowed.');
$mod_view = View::factory('frontend/module/item')->bind('module', $module);
?>
<h3><?php echo __('developer modules') ?></h3>
<ul>
	<?php foreach($modules as $module): ?>
		<li><?php echo $mod_view ?></li>
	<?php endforeach ?>
</ul>
<?php echo $pagination ?>
