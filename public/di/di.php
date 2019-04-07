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
    private $db;
    private $page;
    private $code;

    public function __construct($db, $page, $code)
    {
        $this->db = $db;
        $this->page = $page;
        $this->code = $code;
    }

    public function index()
    {

        echo $this->db->query() . '--' . $this->page->page() . '--' . $this->code->code();
    }
}

$db = new Database();
$page = new Paginate();
$code = new Vcode();

// PHP 5.4  反射
(new Controller($db, $page, $code))->index();