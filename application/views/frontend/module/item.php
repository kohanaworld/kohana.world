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
	<span>All Ratings Data</span>
</div>
<div class="module_desc">
	<?php
		echo $module->description;
	?>
</div>
<div class="module_foot">
	<?php
		echo '<ul>';
		echo '<li class="mod_github">'.html::anchor($module->url,'&nbsp;',array('target'=>'_blank','title'=>'GitHub.com Info')).'</li>';
		echo '<li class="mod_watch">'.html::anchor($module->url.'/watchers',$module->info->watchers,array('target'=>'_blank','title'=>__('Watchers'))).'</li>';
		echo '<li class="mod_forks">'.html::anchor($module->url.'/network',$module->info->forks,array('target'=>'_blank','title'=>__('Forks'))).'</li>';
		echo '</ul>';
		echo '<ul style="float:right;">';
		echo '<li class="gst">Site Info : </li>';
		echo '<li class="mod_cat">'.html::anchor('#','Category List',array('title'=>__('Category List'))).'</li>';
		echo '<li class="mod_tag">'.html::anchor('#','Tag List',array('title'=>__('Tag List'))).'</li>';
		echo '</ul>';
	?>
</div>