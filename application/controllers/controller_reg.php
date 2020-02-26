<?php

class Controller_reg extends Controller {

    //метод для вивода всех людей в базе
    function action_index()
    {
        $persones = sql::select('person');
        if ($persones === false) {

        }
        //рендерим все обьекти персон
        $this->view->renderObjects(
            ['title' => 'Персоны', 'objects' => $persones]
        );
    }

    //метод для форми которая добавляет
    function action_add_pers_form()
    {
        $this->view->generate('reg_view.php', 'template_view.php');
    }

    //метод добавления человека в форму
    function action_add_pers(){

//        $name = $_POST['user'];
//        $mail = $_POST['mail'];
//        $password = $_POST['pass'];
//
//            function clean($value =""){
//
//                $value = trim($value);
//                $value= stripslashes($value);
//                $
//            }
        $add = sql::insert('person',$_POST);


    }
}