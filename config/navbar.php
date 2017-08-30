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
                "icon"  => "male",
                "title"  => "Om",
                "route" => "about",
            ],
            "report" => [
                "icon"  => "vcard",
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
