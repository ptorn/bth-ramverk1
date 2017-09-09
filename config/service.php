<?php
/**
 * Add and configure services and return the $app object.
 */

// Add all resources to $app
$app = new \Anax\App\App();
$app->request           = new \Anax\Request\Request();
$app->response          = new \Anax\Response\Response();
$app->url               = new \Anax\Url\Url();
$app->router            = new \Anax\Route\RouterInjectable();
$app->view              = new \Anax\View\ViewContainer();
$app->textfilter        = new \Anax\TextFilter\TextFilter();
$app->session           = new \Anax\Session\SessionConfigurable();
$app->navbar            = new \Peto16\Navbar\Navbar();
$app->db                = new \Peto16\Database\Database();
$app->rem               = new \Anax\RemServer\RemServer();
$app->remController     = new \Anax\RemServer\RemServerController();
$app->comController     = new \Peto16\Comment\CommentController();
$app->commentStorage    = new \Peto16\Comment\CommentStorage();
$app->loginController   = new \Peto16\Login\LoginController(new \Peto16\Login\Login($app->session, $app->db)); 
$app->adminController   = new \Peto16\Admin\AdminController();

// Configure request
$app->request->init();

// Configure router
$app->router->setApp($app);

// Configure session
$app->session->configure("session.php");

// Configure url
$app->url->setSiteUrl($app->request->getSiteUrl());
$app->url->setBaseUrl($app->request->getBaseUrl());
$app->url->setStaticSiteUrl($app->request->getSiteUrl());
$app->url->setStaticBaseUrl($app->request->getBaseUrl());
$app->url->setScriptName($app->request->getScriptName());
$app->url->configure("url.php");
$app->url->setDefaultsFromConfiguration();

// Configure view
$app->view->setApp($app);
$app->view->configure("view.php");

// Configure database
$app->db->configure("database.php");


// Configure navbar
$app->navbar->setApp($app);
$app->navbar->configure("navbar.php");

// Configure REM Server
$app->rem->configure("remserver.php");
$app->rem->inject(["session" => $app->session]);
$app->remController->setApp($app);

// Configure comment
$app->comController->setApp($app);
$app->comController->inject(new \Peto16\Comment\Comment($app->session, $app->commentStorage));
$app->commentStorage->inject($app);

// Configure login
$app->loginController->setApp($app);

// Configure admin
$app->adminController->setApp($app);
$app->adminController->init();

// Start the session
$app->session->start();

// Return the populated $app
return $app;
