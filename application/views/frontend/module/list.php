<?php defined('SYSPATH') OR die('No direct access allowed.');
$mod_view = View::factory('frontend/module/item')->bind('module', $module);
?>
<h2><?php echo __("module list") ?></h2>
<ul>
	<?php foreach($modules as $module): ?>
		<li><?php echo $mod_view ?></li>
	<?php endforeach ?>
</ul>
<?php echo $pagination ?>