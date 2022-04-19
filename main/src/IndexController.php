<?php
/**
 * De index controller behandeld de requests voor de route "/".
 */
class IndexController extends Controller
{
    public function index() 
    {
        $page = Database::raw('select * from pages where slug = "home"')->asObject();
        $blogs = Database::raw('SELECT * from blogs')->asArray();

        $this->view('index.php', $page, $blogs);
    }
}