<?php
/**
 * Created by IntelliJ IDEA.
 * User: vmadmin
 * Date: 22.08.2018
 * Time: 15:52
 */

class WEBSITEController
{
    /**
     * index-page Ｗ　Ｅ　Ｂ　Ｓ　Ｉ　Ｔ　Ｅ: Shows everything you need to know about the whole website
     * Dispatcher: /
     */
    public function index()
    {
        $view = new View('website');
        $view->title = '【Ｗ　Ｅ　Ｂ　Ｓ　Ｉ　Ｔ　Ｅ】';
        $view->heading = 'Ｗ　Ｅ　Ｂ　Ｓ　Ｉ　Ｔ　Ｅ';
        $view->display();
    }
}