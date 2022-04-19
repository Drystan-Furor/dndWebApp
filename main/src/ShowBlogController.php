<?php
/**
 * De index controller behandeld de requests voor de route "/".
 */

class ShowBlogController extends AdminBlogsController
{
    public function index() 
    {
        $blog = Database::raw('select * from blogs where id = ' . $_REQUEST['id'])->asObject();
        $this->view('showblog.php', $blog);
    }
}