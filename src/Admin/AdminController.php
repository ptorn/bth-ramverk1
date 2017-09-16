<?php

namespace Peto16\Admin;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

class AdminController implements InjectionAwareInterface
{
    use InjectionAwareTrait;


    public function dashboard()
    {
        $user = $this->di->get("user")->getCurrentUser();
        if ($user) {
            $this->di->get("view")->add("admin/dashboard", [
                "user" => $user
            ], "main");
            $this->di->get("pageRender")->renderPage(["title" => "Admin Dashboard"]);
        }
        $this->di->get("utils")->redirect("login");
    }
}
