<?php defined('SYSPATH') OR die('No direct access allowed.');?>
<h2><?php echo $module->format('fullname') ?></h2>
<p><?php echo $module->description ?></p>
<h3><?php echo __('module info') ?></h3>
<ul>
	<!-- @TODO it should be a SPANs with icons -->
	<li title="<?php echo __("created at") ?>"><?php echo $module->format('created_at') ?></li>
	<li title="<?php echo __("author") ?>"><?php echo html::anchor(Route::url('modules', array('developer' => $module->developer->username)), $module->developer->username) ?></li>
	<?php if ($module->blog): ?>
	<li title="<?php echo __("module blog") ?>">
		<?php echo html::anchor($module->blog, __("module link")) ?>
	</li>
	<?php endif ?>
</ul>
<h3><?php echo __('github info') ?></h3>
<small><?php echo __("last update") ?>: <?php echo $module->info->format('date_update') ?></small>
<ul>
	<li title="<?php echo __('github link') ?>"><?php echo html::anchor($module->url) ?></li>
	<li title="<?php echo __('github followers') ?>"><?php echo $module->info->format('watchers') ?></li>
	<li title="<?php echo __('github score') ?>"><?php echo $module->info->format('score') ?></li>
	<li title="<?php echo __('github last push at') ?>"><?php echo $module->info->format('pushed_at') ?></li>
	<?php if ($module->has_wiki): ?>
	<li title="<?php echo __("github wiki") ?>">
		<?php echo html::anchor(Route::url('github_links', array('developer' => $module->developer->username, 'module' => $module->name, 'section' => 'wiki')), __("github wiki")) ?>
	</li>
	<?php endif ?>
	<?php if ($module->has_issues): ?>
	<li title="<?php echo __("github issues") ?>">
		<?php echo html::anchor(Route::url('github_links', array('developer' => $module->developer->username, 'module' => $module->name, 'section' => 'issues')), __("github issues")) ?>
	</li>
	<?php endif ?>
	<?php if ($module->has_downloads): ?>
	<li title="<?php echo __("github downloads") ?>">
		<?php echo html::anchor(Route::url('github_links', array('developer' => $module->developer->username, 'module' => $module->name, 'section' => 'downloads')), __("github downloads")) ?>
	</li>
	<?php endif ?>
</ul>

