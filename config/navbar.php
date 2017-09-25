<?php
return [
    "navbar" => [
        "config" => [
            "navbar-class" => "navbar"
        ],
        "items" => [
            "me" => [
                "icon"  => "home",
                "title"  => "Start",
                "route" => "",
            ],
            "about" => [
                "icon"  => "book",
                "title"  => "Om",
                "route" => "about",
            ],
            "remserver" => [
                "icon"  => "server",
                "title"  => "REM Server",
                "route" => "remserver",
            ],
            "comments" => [
                "icon"  => "comment",
                "title"  => "Kommentarer",
                "route" => "comments",
            ],
            "book" => [
                "icon"  => "book",
                "title"  => "Böcker",
                "route" => "book",
            ],
            "report" => [
                "icon"  => "pencil",
                "title"  => "Redovisning",
                "route" => "report",
                "submenu" => [
                    "items" => [
                        "me" => [
                            "icon"  => "home",
                            "title"  => "Start",
                            "route" => "",
                        ]
                    ]
                ]
                    ],
            "login" => [
                "icon"  => "lock",
                "title"  => "Logga In",
                "route" => "user/login",
            ],
            "logout" => [
                "icon"  => "lock",
                "title"  => "Admin",
                "route" => "admin",
            ]
        ]
    ],
    "social" => [
        "config" => [
            "navbar-class" => "social-links"
        ],
        "items" => [
            "github" => [
                "icon"  => "github",
                "title"  => "Github",
                "route" => "https://github.com/ptorn",
            ],
            "email" => [
                "icon"  => "envelope",
                "title"  => "E-post",
                "route" => "mailto:peder.tornberg@gmail.com",
            ]
        ]
    ]
];
