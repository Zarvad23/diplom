<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    mail("zarifullin.vadim@mail.ru", "Тест", "Текст письма \n 1-ая строчка \n 2-ая строчка \n 3-ая строчка");
}