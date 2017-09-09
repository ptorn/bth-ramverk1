<?php

namespace Peto16\Admin;

use \Anax\Common\AppInjectableInterface;
use \Anax\Common\AppInjectableTrait;

class AdminController implements AppInjectableInterface
{
    use AppInjectableTrait;


    public function __construct()
    {
        $this->admin = new \Peto16\Admin\Admin();
    }



    public function init()
    {
        $this->admin->inject([
            "session" => $this->app->session,
            "db" => $this->app->db
        ]);
    }



    public function dashboard()
    {
        if ($this->admin->isLoggedIn() != null) {
            $user = $this->admin->getUserLoggedIn();
            $this->app->view->add("admin/dashboard", [
                "user" => $user
            ], "main");
            $this->app->renderPage(["title" => "Admin Dashboard"]);
        }
        $this->app->redirect("login");
    }
}
