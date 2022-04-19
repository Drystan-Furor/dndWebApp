<?php
/**
 * De index controller behandeld de requests voor de route "/".
 */

class NewPageController extends AdminPagesController
{
    public function index() 
    {
        $page = Database::raw('select * from pages where id = ' . $_REQUEST['id'])->asObject();
        $this->view('newpage.php', $page);
    }
}