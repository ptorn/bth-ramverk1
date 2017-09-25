<?php
return [
    "routes" => [
        [
            "info" => "Comments",
            "requestMethod" => "get|post",
            "path" => "comments",
            "callable" => ["comController", "getCommentsPage"],
        ],
        [
            "info" => "Delete comment",
            "requestMethod" => "get",
            "path" => "comments/delete/{id:digit}",
            "callable" => ["comController", "delComment"],
        ],
        [
            "info" => "Edit comment post",
            "requestMethod" => "get|post",
            "path" => "comments/edit/{id:digit}",
            "callable" => ["comController", "getPostEditComment"],
        ]
    ]
];
