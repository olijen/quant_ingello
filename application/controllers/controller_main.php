<?php

include $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "application" . DIRECTORY_SEPARATOR . "models" . DIRECTORY_SEPARATOR . "model_methods.php";
include $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "application" . DIRECTORY_SEPARATOR . "models" . DIRECTORY_SEPARATOR . "model_product.php";

class Controller_Main extends Controller
{
    function action_index()
    {
        $products = SQL::select('product',$fieldValue = [], ['price' => 1000]);

        if ($products === false) {

        }
        $this->view->renderObjects(
            ['title' => 'Продукты', 'objects' => $products]
        );
    }

    function action_add_record_form()
    {
        $this->view->generate('addrecord_view.php', 'template_view.php');

    }

    function action_add_record()
    {
        $add = SQL::select('product', $_POST);
        de($add);
    }
    //TODO разработать автозагрузчик классов


//    function __construct()
//    {
//        $this->model = new Model_Portfolio();
//        $this->view = new View();
//    }
//
//    function action_index()
//    {
//        $data = $this->model->get_data();
//        $this->view->generate('portfolio_view.php', 'template_view.php', $data);
//    }
}