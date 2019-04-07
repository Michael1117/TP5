<?php

class Db
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
    public function code() {
        return 'code';
    }
}

class Controller{
    public function index() {
        $db = new Db();
        $page = new Paginate();
        $code = new Vcode();

        echo $db -> query().'--'.$page->page().'--'.$code->code();
    }
}

// PHP 5.4
(new Controller()) -> index();