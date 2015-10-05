<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Materials extends Controller_Template
{

    public $template = 'basic2';

    public function action_category()
    {
        $url = $this->request->param('id');
        $data = array();

        $category = new Model_Category('tree');
        $material = new Model_Material();

        $category_id = $category->getCategoryIdByUrl($url);
        $category_info = $category->getCategoryInfoByUrl($url);
        if(!$category_id)
        {
            throw new HTTP_Exception_404('ошибка, ссылка не найдена.');
        }

        $data['materials'] = $material->getMaterialsByCategory($category_id);
        $data['category_name'] = $category_info['name'];
        $this->template->content =  View::factory('materialsview', $data);
    }

    public function action_showcontent()
    {
        $data = array();

        $id = $this->request->param('id');

        $material = new Model_Material();

        $data = $material->showMaterialById($id);

        if(!$data)
        {
            throw new HTTP_Exception_404('Запрашиваемая статья не найдена');
        }

        $this->template->content =  View::factory('contentview', $data);
    }

}