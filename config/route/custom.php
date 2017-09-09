<?php
$app->router->add("", function () use ($app) {
    // Add views to a specific region
    $app->view->add("layout/header", [], "header");
    $app->view->add("block/header-me", [], "header-block");
});
