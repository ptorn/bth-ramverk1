<?php

$app->router->get("login", [$app->loginController, "isLoggedIn"]);

$app->router->post("login", [$app->loginController, "login"]);

$app->router->get("logout", [$app->loginController, "logout"]);

$app->router->get("admin", [$app->adminController, "dashboard"]);
