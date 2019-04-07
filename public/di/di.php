<?php

class Database
{
    public function query()
    {
        return 'query';
    }
}

class Paginate
{
    public function page()
    {
        return 'page';
    }
}


class Vcode
{
    public function code()
    {
        return 'code';
    }
}

class Controller
{
    public function index($db, $page, $code)
    {

        echo $db->query() . '--' . $page->page() . '--' . $code->code();
    }
}

$db = new Database();
$page = new Paginate();
$code = new Vcode();

// PHP 5.4  反射 
(new Controller())->index($db, $page, $code);