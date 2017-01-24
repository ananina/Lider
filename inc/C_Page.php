<?php
require_once("/model/model.php");


class C_Page extends C_Base
{
    public function action_index()
    {
        $q = 'SELECT `category`.`id_category`,`category`.`category`,`subcategory`.`id`,`subcategory`.`subCategory` FROM `category` LEFT JOIN `subcategory` ON `category`.`id_category` = `subcategory`.`id_category`';
        $model = model::GetInstance();
        $data = $model->leftjoin($q);
        $category = [];
        $subcategory = [];
        foreach($data as $value){
            $category[$value['id_category']] = $value['category'];
            if($value['id'] != null){
                array_push($subcategory,['id_category' => $value['id_category'], 'id' => $value['id'], 'subCategory' => $value['subCategory']]);
            }
        }
        $this->content = $this->template("view/main.php", ['category' => $category, 'subcategory' => $subcategory]);
    }

    public function action_open()
    {
        $pageName = $this->params[2];
        $model = model::GetInstance();
        $params = $model->get_all($pageName, $pageName, 'asc');
        //$content = $this->template("view/modal.php");
        $this->content = $this->template("view/$pageName.php", ["params" => $params, "content" => $content]);
    }
}