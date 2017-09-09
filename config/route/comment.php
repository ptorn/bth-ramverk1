<?php
$app->router->get("deletecomment/{id:digit}", [$app->comController, "delComment"]);

$app->router->get("comments", [$app->comController, "getCommentsPage"]);

$app->router->post("comments", [$app->comController, "addComment"]);

$app->router->get("comments/delete/{id:digit}", [$app->comController, "delComment"]);

$app->router->get("comments/edit/{id:digit}", [$app->comController, "getComment"]);

$app->router->post("comments/edit/{id:digit}", [$app->comController, "editComment"]);
