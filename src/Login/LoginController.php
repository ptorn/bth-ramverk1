<?php

namespace Peto16\Login;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * Controller for Login
 */
class LoginController implements InjectionAwareInterface
{
    use InjectionAwareTrait;

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
        if ($this->di->get("user")->getCurrentUser()) {
            $this->di->get("response")->redirect("admin");
        }
        $this->di->get("view")->add("admin/login", [], "main");
        $this->di->get("pageRender")->renderPage(["title" => "Login"]);
    }



    /**
     * Logout user.
     *
     * @return void
     */
    public function logout()
    {
        $this->login->logout();
        $this->di->get("utils")->redirect("login");
    }



    /**
     * Login user and redirect to admin.
     *
     * @return void
     */
    public function login()
    {
        $username = $this->di->get("request")->getPost("username", null);
        $password = $this->di->get("request")->getPost("password", null);
        $this->login->login($username, $password);
        $this->di->get("utils")->redirect("admin");
    }
}
