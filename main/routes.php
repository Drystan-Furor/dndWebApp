<?php

/**
 * Dit bestand is verantwoordelijk voor het afhandelen
 * van routes en de juiste controller aan te roepen.
 * Voeg maar eens een nieuwe route toe aan de switch case (bijvoorbeeld een /contact) en kijk
 * wat er gebeurd.
 */

$requestUri = explode('?', $_SERVER['REQUEST_URI'], 2);
$requestedRoute = $requestUri[0];

switch ($requestedRoute) {
case '/':
    $indexController = new IndexController;
    $indexController->index();
    break;

case '/login':
    $loginController = new LoginController;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $loginController->login();
    } else {
        $loginController->index();
    }
    break;

case '/logout':
    $loginController = new LoginController;
    $loginController->logout();
    break;


//---------------------------------------------------------- pages
case '/admin/pages':
    $adminPagesController = new AdminPagesController;

    if (isset($_GET['action']) && isset($_GET['id'])) {
        $adminPagesController->update();
    }

    $adminPagesController->index();
    break;

case '/admin/page/edit':
    $adminPagesController = new AdminPagesController;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $adminPagesController->update();
    } else {
        $adminPagesController->edit();
    }
    break;

case '/admin/page/add':
    $adminPagesController = new AdminPagesController;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $adminPagesController->store();
    } else {
        $adminPagesController->create();
    }
    break;

case '/newpage':
    $newPageController = new NewPageController;
    $newPageController->index();
    break;


//--------------------------------------------blogs AdminBlogsController 
case '/admin/blogs':
    $adminBlogsController = new AdminBlogsController;

    if (isset($_GET['action']) && isset($_GET['id'])) {
        $adminBlogsController->updateBlog();
    }

    $adminBlogsController->index();
    break;

case '/admin/blog/edit':
    $adminBlogsController = new AdminBlogsController;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $adminBlogsController->updateBlog();
    } else {
        $adminBlogsController->editBlog();
    }
    break;

case '/admin/blog/add':
    $adminBlogsController = new AdminBlogsController;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $adminBlogsController->storeBlog();
    } else {
        $adminBlogsController->createBlog();
    }
    break;

case '/showblog':
    $newPageController = new ShowBlogController;
    $newPageController->index();
    break;



default:
    $notFoundController = new NotFoundController;
    $notFoundController->index();
    break;
}
