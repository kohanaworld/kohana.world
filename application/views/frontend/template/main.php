<?php defined('SYSPATH') OR die('No direct access allowed.');
// @TODO its just a draft view to show project data without any design
?>
<p>
	<?php echo html::anchor(Route::url('modules'), __("module list")) ?>
</p>
<?php echo $content;
