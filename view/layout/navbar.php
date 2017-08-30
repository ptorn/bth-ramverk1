<?php
$routes = $app->navbar->routes();
?>
<div class="site-logo-text">
    Peder Tornberg
</div>

<nav class="navbar">
    <div class="rm-navbar-top rm-navbar rm-desktop">
        <ul>
            <?php foreach ($routes as $route) : ?>
            <li class="<?= $app->navbar->isActiveLink($route) ? "active" : "" ?> nav-item">
                <a
                    href="<?= $route['url'] ?>"
                    title="<?= $route['title'] ?>"
                    class="<?= $app->navbar->isActiveLink($route) ? "active" : "" ?> nav-link"
                >
                    <?= $route['title'] ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>

<div class="mobile-nav">

    <div id="mobile-nav-top">
        <i id="menu-open" class="fa fa-bars rm-button-face-1"></i>
        <i id="menu-close" class="hide fa fa-times rm-button-face-2"></i>
    </div>

    <div id="mobile-nav-container" class="hide">
        <ul>
            <?php foreach ($routes as $route) : ?>
            <li class="<?= $app->navbar->isActiveLink($route) ? "active" : "" ?>">
                <a
                    href="<?= $route['url'] ?>"
                    title="<?= $route['title'] ?>"
                    class="<?= $app->navbar->isActiveLink($route) ? "active" : "" ?>"
                >
                    <i class="fa fa-<?= $route['icon'] ?>"></i> <?= $route['title'] ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
