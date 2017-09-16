<?php
return [
    "routes" => [
        [
            "info" => "List all comments",
            "requestMethod" => "get",
            "path" => "comments",
            "callable" => ["comController", "getCommentsPage"],
        ],
        [
            "info" => "Add a comment.",
            "requestMethod" => "post",
            "path" => "comments",
            "callable" => ["comController", "addComment"],
        ],
        [
            "info" => "Delete comment",
            "requestMethod" => "get",
            "path" => "comments/delete/{id:digit}",
            "callable" => ["comController", "delComment"],
        ],
        [
            "info" => "Edit comment",
            "requestMethod" => "get",
            "path" => "comments/edit/{id:digit}",
            "callable" => ["comController", "getComment"],
        ],
        [
            "info" => "Edit comment post",
            "requestMethod" => "post",
            "path" => "comments/edit/{id:digit}",
            "callable" => ["comController", "editComment"],
        ]
    ]
];
