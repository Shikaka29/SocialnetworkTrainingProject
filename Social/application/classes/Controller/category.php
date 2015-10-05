<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Category extends Controller_Template
{
	public $template = 'basic2';

	public function action_showcat()
	{
		$url = $this->request->param('id');
		
		$data = array();
		
		$tree = new Model_Tree();

		$data['category'] = $tree->categoryInfoByUrl($url);
		if(!$data['category'])
		{
			throw new HTTP_Exception_404('Запрашиваемая категория не найдена');
		}

		$data['materials'] = $tree->contentСategoryById($data['category']['id']);

		$this->template->content =  View::factory('catview', $data);
	}
}