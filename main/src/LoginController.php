<?php

/**
 * De login controller behandeld de requests voor de route "/login".
 */
class LoginController extends Controller
{

    public function index()
    {
        $this->view('login.php');

        unset($_SESSION['login_invalid']); // sessie variabele verwijderen.
    }

    public function login()
    {
        $username = EscapeString::from_Input($_POST['username'] ?? '');
        $password = EscapeString::from_Input($_POST['password'] ?? '');

        $sql = "SELECT id, username 
                FROM users 
                WHERE username LIKE '$username' 
                AND password LIKE '$password'";


        $user = Database::raw($sql)->asObject(); // fluent interface techniek.

        if (!is_null($user)) {
            $_SESSION['user'] = $user;

            header('location: /admin/pages');
        } else {
            $_SESSION['login_invalid'] = true;

            header('location: /login');
        }
    }

    public function logout()
    {
        session_destroy();

        header('location: /');
    }
}