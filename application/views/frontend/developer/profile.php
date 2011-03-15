<?php defined('SYSPATH') OR die('No direct access allowed.');?>
<h2><?php echo $developer->username ?></h2>
<p><?php echo $developer->name ?></p>
<h3><?php echo __('github stats') ?></h3>
<ul>
	<li title="<?php echo __("github link") ?>"><?php echo html::anchor($developer->url) ?></li>
	<li title="<?php echo __("github followers") ?>"><?php echo $developer->info->followers_count ?></li>
	<li title="<?php echo __("github repos") ?>"><?php echo $developer->info->public_repo_count ?></li>
</ul>
<?php echo View::factory('frontend/developer/modules')->set('modules', $modules)->set('pagination', $pagination) ?>
