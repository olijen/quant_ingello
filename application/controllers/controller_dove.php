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
            if($dove_template === false) {
                $response = "Данного голубя не существует";
                $this->view->generate(
                    'message_view.php',
                    'template_view.php',
                    ['message' => $response]
                );
            }
            else
                $this->view->generate(
                'dove_view.php',
                'template_view.php',
                ['dove' => $dove_template]
                );
        }
        else {
            $response = "Не вибран соответствующий продукт";
            $this->view->generate(
                'message_view.php',
                'template_view.php',
                ['message' => $response]
            );
        }
    }

    public function search(){
        $dove = new Model_Dove();
        $dove ->findAll($_POST);
    }

    public function action_add_dove_form()//insert
    {
        $dove = new Model_Dove();
        $htmlForm = $dove->generateForm();
        $this->view->generate('addrecord_view.php', 'template_view.php',
            ['htmlForm' => $htmlForm, 'path' => '/dove/add_dove']);
    }

    public function action_add_dove()//insert
    {
        $dove = new Model_Dove();// {title: null, price: null}
        $dove->load($_POST);// {title: qweqwe, price: 120}
        $dove->newSave();
        $response = "Добавили голубя!";
        $this->view->generate('message_view.php', 'template_view.php', ['message' => $response]);
    }

    public function action_update_dove_form()
    {
        $dove = new Model_Dove();
        $dove_template = $dove->findOne(['id' => $_GET['id']]);
        $dove->map($dove_template);
        //$htmlForm = "<input type='hidden' name='id' value='".$_GET['id']."'>";
        $htmlForm = $dove->generateForm(true);
        $this->view->generate('update_view.php',
            'template_view.php', ['htmlForm' => $htmlForm, 'path' => '/dove/update_dove']);
    }

    public function action_update_dove()
    {
        $dove = new Model_Dove();// {title: null, price: null}
        $dove->load($_POST);
        $dove->newSave();
        header("Location: /dove/dove_show?id={$_POST['id']}");
    }

    public function action_delete_dove(){
        if(isset($_GET['id']) && is_numeric($_GET['id'])){
            $dove_id = $_GET['id'];
            $dove = new Model_Dove();
            $dove_template = $dove->findOne(['id' => $dove_id]);
            if($dove_template === false){
                $response = "Вибран не существующий голубь";
                $this->view->generate('message_view.php', 'template_view.php',
                ['message' => $response]);
            }
            else {
                $dove->load($dove_template);
                $dove->delete();
                $response = "Dovik удален!";
                $this->view->generate('message_view.php', 'template_view.php',
                    ['message' => $response]);
                //header("Location: /dove/index");
            }
        }
        else {
            $response = "Не вибран соотвествующий голубок!";
            $this->view->generate('message_view.php', 'template_view.php',
                ['message' => $response]);
        }
    }
}
