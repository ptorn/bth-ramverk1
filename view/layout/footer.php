<div class="footer-author">Peder Tornberg - Ramverk1</div>
<?php if ($this->regionHasContent("footer")) : ?>
<div class="navbar-wrap">
    <?php
    $routes = $app->navbar->routes("social");
    ?>
    <div class="contact-nav">
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
<?php endif; ?>
