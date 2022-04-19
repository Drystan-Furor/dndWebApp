<?php

/**
 * De blogs controller behandeld de requests voor de route "/admin/blogs".
 */

     /*
CREATE TABLE `phpcursus`.`blogs` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `title` VARCHAR(255) NOT NULL , 
    `content` TEXT NULL , 
    `slug` VARCHAR(15) NOT NULL , 
    `status` ENUM('published','draft') NOT NULL DEFAULT 'draft' , 
    PRIMARY KEY (`id`), 
    UNIQUE `UQ_blogs` (`slug`)) 
    ENGINE = InnoDB; 
    */
   
class AdminBlogsController extends Controller
{
    public function index()
    {
        // login check, redirect terug naar login
        // wanneer de gebruiker niet is ingelogd.
        if (!isset($_SESSION['user'])) {
            header('location: /login');
        }

        $blogs = Database::raw('SELECT * from blogs')->asArray();

        $this->view('admin_blogs.php', $blogs);
    }



    public function editBlog()
    {
        $blog = Database::raw('SELECT * from blogs where id = ' . $_REQUEST['id'])->asObject();

        $this->view('admin_blog_edit.php', $blog);
    }



    public function showBlog() 
    {
        $blog = Database::raw('SELECT * FROM blogs where id = ' . $_REQUEST['id'])->asObject();

        $this->view('showblog.php', $blog);
    }



    public function createBlog()
    {
        $this->view('admin_blog_add.php');
    }

    public function storeBlog()
    {
        $title = EscapeString::from_Input($_POST['title']);
        $content = EscapeString::from_Input($_POST['content']);
        $slug = EscapeString::from_Input($_POST['slug']);

        Database::raw("INSERT INTO blogs (title, content, slug) VALUES ('$title', '$content', '$slug')");

        header('location: /admin/blogs');
    }


    public function updateBlog()
    {
        $action = $_REQUEST['action'] ?? '';
        $id = $_REQUEST['id'] ?? 0;

        switch ($action) {
        case 'publish':
            Database::raw('UPDATE blogs set status = "published" where id = ' . $id);
            break;
        case 'unpublish':
            Database::raw('UPDATE blogs set status = "draft" where id = ' . $id);
            break;
        case 'delete':
            Database::raw('DELETE FROM blogs where id = ' . $id);
            break;
        }

        if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['slug'])) {

            $id = EscapeString::from_Input($_POST['id']);
            $title = EscapeString::from_Input($_POST['title']);
            $content = EscapeString::from_Input($_POST['content']); 
            $slug = EscapeString::from_Input($_POST['slug']);

            $updateQuery = 'UPDATE blogs set title = "%s", content = "%s", slug = "%s" where id = %d';

            Database::raw(
                sprintf($updateQuery, $title, $content, $slug, $id)
            );

            header('location: /admin/blog/edit?id=' . $id);
        }
    }
}
