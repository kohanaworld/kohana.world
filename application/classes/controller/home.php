<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Template Controller home
 *
 * @package   Kohana-world.com site
 * @author    Kohana-World Development Team
 * @license   MIT License
 * @copyright 2011 Kohana-World Development Team
 */
class Controller_Home extends Controller_Template {

	public function action_index()
	{
		StaticCss::instance()->addCss('/media/css/module_list.css');
		StaticCss::instance()->addCss('/media/css/pagination.css');
		$this->template->content = Request::factory(Route::get('modules')->uri())->execute()->body();
		//$this->template->sidebar = Request::factory(Route::get('modules')->uri(array('action' => 'last')))->execute()->body();
	}
} // End Controller_Home