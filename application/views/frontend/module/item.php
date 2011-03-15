<?php defined('SYSPATH') OR die('No direct access allowed.');?>
<div class="module_head">
	<div class="module_title">
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
	</div>
</div>
<div class="module_desc">
	<?php
		echo $module->description;
	?>
</div>
<div class="module_foot">
	<div class="module_github">
		<span class="gst">Github Info : </span>
			<?php
				echo '<ul>';
				echo '<li class="mod_create">'.html::anchor($module->url,date('d-M-Y',$module->created_at),array('target'=>'_blank')).'</li>';
				echo '<li class="mod_watch">'.html::anchor($module->url.'/watchers',$module->info->watchers,array('target'=>'_blank')).'</li>';
				echo '<li class="mod_forks">'.html::anchor($module->url.'/network',$module->info->forks,array('target'=>'_blank')).'</li>';
				echo '</ul>';
			?>
	</div>
	<div class="module_site">
		<span class="gst">Site Info : </span>
	</div>
</div>