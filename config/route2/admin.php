<?php
return [
    "routes" => [
        [
            "info" => "Login user.",
            "requestMethod" => "get",
            "path" => "login",
            "callable" => ["loginController", "isLoggedIn"],
        ],
        [
            "info" => "Login user.",
            "requestMethod" => "post",
            "path" => "login",
            "callable" => ["loginController", "login"],
        ],
        [
            "info" => "Logout user.",
            "requestMethod" => "get",
            "path" => "logout",
            "callable" => ["loginController", "logout"],
        ],
        [
            "info" => "Dashboard.",
            "requestMethod" => "get",
            "path" => "admin",
            "callable" => ["adminController", "dashboard"],
        ]
    ]
];
