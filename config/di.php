<?php
/**
 * Configuration file for DI container.
 */

return [

    // Services to add to the container.
    "services" => [
        "request" => [
            "shared" => true,
            "callback" => function () {
                $request = new \Anax\Request\Request();
                $request->init();
                return $request;
            }
        ],
        "response" => [
            "shared" => true,
            "callback" => "\Anax\Response\Response",
        ],
        "url" => [
            "shared" => true,
            "callback" => function () {
                $url = new \Anax\Url\Url();
                $request = $this->get("request");
                $url->setSiteUrl($request->getSiteUrl());
                $url->setBaseUrl($request->getBaseUrl());
                $url->setStaticSiteUrl($request->getSiteUrl());
                $url->setStaticBaseUrl($request->getBaseUrl());
                $url->setScriptName($request->getScriptName());
                $url->configure("url.php");
                $url->setDefaultsFromConfiguration();
                return $url;
            }
        ],
        "router" => [
            "shared" => true,
            "callback" => function () {
                $router = new \Anax\Route\Router();
                $router->setDI($this);
                $router->configure("route2.php");
                return $router;
            }
        ],
        "view" => [
            "shared" => true,
            "callback" => function () {
                $view = new \Anax\View\ViewCollection();
                $view->setDI($this);
                $view->configure("view.php");
                return $view;
            }
        ],
        "viewRenderFile" => [
            "shared" => true,
            "callback" => function () {
                $viewRender = new \Anax\View\ViewRenderFile2();
                $viewRender->setDI($this);
                return $viewRender;
            }
        ],
        "session" => [
            "shared" => true,
            "callback" => function () {
                $session = new \Anax\Session\SessionConfigurable();
                $session->configure("session.php");
                $session->start();
                return $session;
            }
        ],
        "textfilter" => [
            "shared" => true,
            "callback" => "\Anax\TextFilter\TextFilter",
        ],
        "errorController" => [
            "shared" => true,
            "callback" => function () {
                $obj = new \Anax\Page\ErrorController();
                $obj->setDI($this);
                return $obj;
            }
        ],
        "debugController" => [
            "shared" => true,
            "callback" => function () {
                $obj = new \Anax\Page\DebugController();
                $obj->setDI($this);
                return $obj;
            }
        ],
        "flatFileContentController" => [
            "shared" => true,
            "callback" => function () {
                $obj = new \Anax\Page\FlatFileContentController();
                $obj->setDI($this);
                return $obj;
            }
        ],
        "pageRender" => [
            "shared" => true,
            "callback" => function () {
                $obj = new \Peto16\Utils\Utils();
                $obj->setDI($this);
                return $obj;
            }
        ],
        "navbar" => [
            "shared" => true,
            "callback" => function () {
                $navbar = new \Peto16\Navbar\Navbar();
                $navbar->configure("navbar.php");
                $navbar->setDI($this);
                return $navbar;
            }
        ],
        "login" => [
            "shared" => true,
            "callback" => function () {
                $login = new \Peto16\Login\Login();
                $login->inject($this->get("session"), $this->get("db"));
                return $login;
            }
        ],
        "loginController" => [
            "shared" => true,
            "callback" => function () {
                $loginController = new \Peto16\Login\LoginController();
                $loginController->setDI($this);
                $loginController->inject($this->get("login"));
                return $loginController;
            }
        ],
        "adminController" => [
            "shared" => true,
            "callback" => function () {
                $adminController = new \Peto16\Admin\AdminController();
                $adminController->setDI($this);
                return $adminController;
            }
        ],
        "db" => [
            "shared" => true,
            "callback" => function () {
                $db = new \Peto16\Database\Database();
                $db->configure("database.php");
                return $db;
            }
        ],
        "rem" => [
            "shared" => true,
            "callback" => function () {
                $rem = new \Anax\RemServer\RemServer();
                $rem->configure("remserver.php");
                $rem->injectSession($this->get("session"));
                return $rem;
            }
        ],
        "remController" => [
            "shared" => true,
            "callback" => function () {
                $remController = new \Anax\RemServer\RemServerController();
                $remController->setDI($this);
                return $remController;
            }
        ],
        "comController" => [
            "shared" => true,
            "callback" => function () {
                $comController = new \Peto16\Comment\CommentController();
                $comController->setDI($this);
                $comController->init();
                return $comController;
            }
        ],
        "comment" => [
            "shared" => true,
            "callback" => function () {
                $comStorage = $this->get("commentStorage");
                $comment = new \Peto16\Comment\Comment($this->get("user"), $this->get("commentStorage"));
                return $comment;
            }
        ],
        "commentStorage" => [
            "shared" => true,
            "callback" => function () {
                $commentStorage = new \Peto16\Comment\CommentStorage();
                $commentStorage->inject($this->get("db"));
                return $commentStorage;
            }
        ],
        "utils" => [
            "shared" => true,
            "callback" => function () {
                $utils = new Peto16\Utils\Utils();
                $utils->setDI($this);
                return $utils;
            }
        ],
        "user" => [
            "shared" => true,
            "callback" => function () {
                $utils = new Peto16\User\User();
                $utils->inject($this->get("session"));
                return $utils;
            }
        ]

    ],
];
