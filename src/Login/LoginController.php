<?php

namespace Peto16\Login;

use \Anax\Common\AppInjectableInterface;
use \Anax\Common\AppInjectableTrait;

/**
 * Controller for Login
 */
class LoginController implements AppInjectableInterface
{
    use AppInjectableTrait;

    private $login;



    /**
     * Injector for Login object.
     *
     * @param Login         $login
     * @return void
     */
    public function inject(Login $login)
    {
        $this->login = $login;
    }



    /**
     * Check if user is logged in.
     *
     * @return boolean
     */
    public function isLoggedIn()
    {
        if ($this->login->isLoggedIn()) {
            $this->app->redirect("admin");
        }
        $this->app->view->add("admin/login", [], "main");
        $this->app->renderPage(["title" => "Login"]);
    }



    /**
     * Logout user.
     *
     * @return void
     */
    public function logout()
    {
        $this->login->logout();
        $this->app->redirect("login");
    }



    /**
     * Login user and redirect to admin.
     *
     * @return void
     */
    public function login()
    {
        $username = $this->app->request->getPost("username", null);
        $password = $this->app->request->getPost("password", null);
        $this->login->login($username, $password);
        $this->app->redirect("admin");
    }
}
