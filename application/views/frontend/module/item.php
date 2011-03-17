<?php defined('SYSPATH') OR die('No direct access allowed.');?>
<div class="module_head">
	<?php echo html::anchor(
		Route::url('modules', array(
			'developer' => $module->developer->username
		)),
		$module->developer->username);
		echo ' / ';
		echo html::anchor(
			Route::url('modules', array(
				'developer' => $module->developer->username,
				'module' => $module->name
			)),
				$module->name);
	?>
	<?php
		echo '<span title="'.__('Ratings Data').'">Ratings Data</span>';
		echo '<ul>';
		echo '<li class="mod_github">'.html::anchor($module->url,'&nbsp;',array('target'=>'_blank','title'=>'GitHub.com Info')).'</li>';
		echo '<li class="mod_watch" title="'.__('Watchers').'">'.$module->info->watchers.'</li>';
		echo '<li class="mod_forks" title="'.__('Forks').'">'.$module->info->forks.'</li>';
		echo '</ul>';
	?>
</div>
<div class="module_desc">
	<?php
		echo $module->description;
	?>
</div>
<div class="module_foot">
	<?php
		echo '<ul>';
		echo '<li class="mod_cat">'.html::anchor('#','Category List',array('title'=>__('Category List'))).'</li>';
		echo '<li class="mod_tag">'.html::anchor('#','Tag List',array('title'=>__('Tag List'))).'</li>';
		echo '</ul>';
	?>
</div>