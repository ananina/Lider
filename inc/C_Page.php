<?php
require_once("/model/model.php");


class C_Page extends C_Base
{
    public function action_index()
    {
        $this->content = $this->template("view/main.php"/*, ['brands' => $brands]*/);
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