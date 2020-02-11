<?php

include $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "application" . DIRECTORY_SEPARATOR . "models" . DIRECTORY_SEPARATOR . "model_methods.php";

class Controller_authoriz extends Controller
{

    function action_authotiz_form()
    {
        $this->view->generate('authotiz_view.php', 'template_view.php');
    }

    function action_authotiz()
    {
        /* TODO:
            1. Получаем $person = Page::GetInfo('persone', ['username' => $user, 'pwd' => $pwd]); if ($person == false) {Не аутентифицированы} else {...}
            2. Если нейм и пароль совпал - генерируем случайный токен (аналог пропускного билета)
            3. Этот токен записываем в БД
            4. "Отдаём" токен пользователю - через куки
            5. Перед любым действием (action) кроме логина и обработчика формы логина - нужно проверить есть ли у поьзователя доступ.
         */
        $data = Page::getInfo('persone', $_POST['user'], $_POST['pass']);
        setcookie("user", $data['id'], time() + 60 * 60 * 24 * 30, "/");
    }
}