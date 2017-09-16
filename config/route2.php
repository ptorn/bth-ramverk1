<?php
/**
 * Configuration file for routes.
 */
return [
    // Load these routefiles in order specified and optionally mount them
    // onto a base route.
    "routeFiles" => [
        [
            // These are for internal error handling and exceptions
            "mount" => "",
            "file" => __DIR__ . "/route2/custom.php",
        ],
        [
            "mount" => "remserver/api",
            "file" => __DIR__ . "/route2/remserver.php"

        ],
        [
            "mount" => null,
            "file" => __DIR__ . "/route2/comment.php"

        ],
        [
            "mount" => null,
            "file" => __DIR__ . "/route2/admin.php"
        ],
        [
            // These are for internal error handling and exceptions
            "mount" => null,
            "file" => __DIR__ . "/route2/internal.php",
        ],
        [
            // For debugging and development details on Anax
            "mount" => "debug",
            "file" => __DIR__ . "/route2/debug.php",
        ],
        [
            // To read flat file content in Markdown from content/
            "mount" => null,
            "file" => __DIR__ . "/route2/flat-file-content.php",
        ],
        [
            // Keep this last since its a catch all
            "mount" => null,
            "file" => __DIR__ . "/route2/404.php",
        ],
    ],

];
