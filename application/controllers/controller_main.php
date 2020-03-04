<?php

include $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "application" . DIRECTORY_SEPARATOR . "models" . DIRECTORY_SEPARATOR . "model_product.php";

class Controller_Main extends Controller
{
    //!!!!!!!!!!!!!!!!
    //любой метод виполняется здесь только при условии, что существует токен авторизации
    //!!!!!!!!!!!!!!!!

    //метод для показа всех продуктов
    public function action_index()
    {

        $product = new Model_Product();
        $products = $product->findAll();

        if ($products === false) {
            echo 'Продавать нечего!';
        }
        else {
            $this->view->generate(
                'products_view.php',
                'template_view.php',
                ['title' => 'Продукты', 'products' => $products]
            );
        }
    }

    //показивем продукт, id получаем из GET массива
    public function action_product_show(){
        if(isset($_GET['id']) && is_numeric($_GET['id'])){
            $product_id = $_GET['id'];
            $product = new Model_Product();
            $product_template = $product->findOne(['id' => $product_id]);
            $this->view->generate(
                'product_view.php',
                'template_view.php',
                ['product' => $product_template]
            );
        }
        else {
            echo "Не вибран соответствующий продукт";
        }
    }

    public function search(){
        $product = new Model_Product();
        $product ->findAll($_POST);
    }

    public function action_add_record_form()//insert
    {
        $product = new Model_Product();
        $htmlForm = $product->generateForm();
        $this->view->generate('addrecord_view.php', 'template_view.php', $htmlForm);
    }

    public function action_add_record()//insert
    {
        $product = new Model_Product();// {title: null, price: null}
        $product->load($_POST);// {title: qweqwe, price: 120}
        $product->newSave();
    }

    public function action_update_product_form()
    {
        $product = new Model_Product();
        $product_template = $product->findOne(['id' => $_GET['id']]);
        $product->map($product_template);
        $htmlForm = $product->generateForm(true);
        $this->view->generate('update_view.php',
            'template_view.php', $htmlForm);
    }

    public function action_update_product()
    {
        $product = new Model_Product();// {title: null, price: null}
        //$product->findOne(['id' => $_POST['id']]);// {title: qweqwe, price: 120}
        $product->load($_POST);
        $product->newSave();
    }

    public function action_delete_product(){
        if(isset($_GET['id']) && is_numeric($_GET['id'])){
            $product_id = $_GET['id'];
            $product = new Model_Product();
            $product_template = $product->findOne(['id' => $product_id]);
            $product->load($product_template);
            $product->delete();
        }
        else {
            echo "Не вибран соответствующий продукт";
        }
    }
}
