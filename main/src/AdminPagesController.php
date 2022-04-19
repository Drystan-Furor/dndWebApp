<?php

/**
 * De pages controller behandeld de requests voor de route "/admin/pages".
 */

class AdminPagesController extends Controller
{
    public function index()
    {
        // login check, redirect terug naar login
        // wanneer de gebruiker niet is ingelogd.
        if (!isset($_SESSION['user'])) {
            header('location: /login');
        }

        $pages = Database::raw('SELECT * from pages')->asArray();

        $this->view('admin_pages.php', $pages);
    }



    public function edit()
    {
        $page = Database::raw('SELECT * from pages where id = ' . $_REQUEST['id'])->asObject();

        $this->view('admin_page_edit.php', $page);

    }



    public function show() 
    {
        $page = Database::raw('SELECT * FROM pages where id = ' . $_REQUEST['id'])->asObject();

        $this->view('newpage.php', $page);
    }



    public function create()
    {
        $this->view('admin_page_add.php');
    }

    public function store()
    {
        $title = EscapeString::from_Input($_POST['title']);
        $content = EscapeString::from_Input($_POST['content']);
        $slug = EscapeString::from_Input($_POST['slug']);

        Database::raw("INSERT INTO pages (title, content, slug) VALUES ('$title', '$content', '$slug')");

        header('location: /admin/pages');
    }


    public function update()
    {
        $action = $_REQUEST['action'] ?? '';
        $id = $_REQUEST['id'] ?? 0;

        switch ($action) {
        case 'publish':
            Database::raw('UPDATE pages set status = "published" where id = ' . $id);
            break;
        case 'unpublish':
            Database::raw('UPDATE pages set status = "draft" where id = ' . $id);
            break;
        case 'delete':
            Database::raw('DELETE FROM pages where id = ' . $id);
            break;
        }

        if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['slug'])) {

            $id = EscapeString::from_Input($_POST['id']);
            $title = EscapeString::from_Input($_POST['title']);
            $content = EscapeString::from_Input($_POST['content']); 
            $slug = EscapeString::from_Input($_POST['slug']);

            $updateQuery = 'UPDATE pages set title = "%s", content = "%s", slug = "%s" where id = %d';

            Database::raw(
                sprintf($updateQuery, $title, $content, $slug, $id)
            );

            header('location: /admin/page/edit?id=' . $id);
        }
    }
}
