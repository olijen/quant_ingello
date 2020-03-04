<?php

include $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "application" . DIRECTORY_SEPARATOR . "models" . DIRECTORY_SEPARATOR . "model_dove.php";

class Controller_Dove extends Controller
{
    //!!!!!!!!!!!!!!!!
    //любой метод виполняется здесь только при условии, что существует токен авторизации
    //!!!!!!!!!!!!!!!!

    //метод для показа всех продуктов
    public function action_index()
    {

        $dove = new Model_Dove();
        $doves = $dove->findAll();

        if ($doves === false) {
            echo 'Голубить нечего!';
        }
        else {
            $this->view->generate(
                'dove_list_view.php',
                'template_view.php',
                ['title' => 'Продукты', 'doves' => $doves]
            );
        }
    }

    //показивем продукт, id получаем из GET массива
    public function action_dove_show(){
        if(isset($_GET['id']) && is_numeric($_GET['id'])){
            $dove_id = $_GET['id'];
            $dove = new Model_Dove();
            $dove_template = $dove->findOne(['id' => $dove_id]);
            $this->view->generate(
                'dove_view.php',
                'template_view.php',
                ['dove' => $dove_template]
            );
        }
        else {
            echo "Не вибран соответствующий продукт";
        }
    }

    public function search(){
        $dove = new Model_Dove();
        $dove ->findAll($_POST);
    }

    public function action_add_record_form()//insert
    {
        $dove = new Model_Dove();
        $htmlForm = $dove->generateForm();
        $this->view->generate('addrecord_view.php', 'template_view.php', $htmlForm);
    }

    public function action_add_record()//insert
    {
        $dove = new Model_Dove();// {title: null, price: null}
        $dove->load($_POST);// {title: qweqwe, price: 120}
        $dove->newSave();
    }

    public function action_update_dove_form()
    {
        $dove = new Model_Dove();
        $dove_template = $dove->findOne(['id' => $_GET['id']]);
        $dove->map($dove_template);
        $htmlForm = $dove->generateForm(true);
        $this->view->generate('update_view.php',
            'template_view.php', $htmlForm);
    }

    public function action_update_dove()
    {
        $dove = new Model_Dove();// {title: null, price: null}
        //$dove->findOne(['id' => $_POST['id']]);// {title: qweqwe, price: 120}
        $dove->load($_POST);
        $dove->newSave();
    }

    public function action_delete_dove(){
        if(isset($_GET['id']) && is_numeric($_GET['id'])){
            $dove_id = $_GET['id'];
            $dove = new Model_Dove();
            $dove_template = $dove->findOne(['id' => $dove_id]);
            $dove->load($dove_template);
            $dove->delete();
        }
        else {
            echo "Не вибран соответствующий продукт";
        }
    }
}
