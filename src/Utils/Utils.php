<?php

namespace peto16\Utils;

use Anax\Page\PageRenderInterface;
use Anax\DI\InjectionAwareInterface;
use Anax\DI\InjectionAwareTrait;

class Utils implements PageRenderInterface, InjectionAwareInterface
{
    use InjectionAwareTrait;



    /**
     * Render a standard web page using a specific layout.
     *
     * @param array   $data   variables to expose to layout view.
     * @param integer $status code to use when delivering the result.
     *
     * @return void
     */
    public function renderPage($data, $status = 200)
    {
        $data["stylesheets"] = [
            "css/style.min.css",
            "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        ];

        // Get view object.
        $view = $this->di->get("view");

        // Add common header, navbar and footer views.
        $view->add("layout/navbar", [], "navbar");
        $view->add("layout/footer", [], "footer");

        $view->add("layout/layout", $data, "layout");
        $body = $view->renderBuffered("layout");
        $this->di->get("response")->setBody($body)->send($status);
    }



    /**
     * Redirect to the given path.
     * @param  string       $path The given path.
     * @return void
     */
    public function redirect($path)
    {
        $url = $this->di->get("url")->create($path);
        $this->di->get("response")->redirect($url);
    }



    /**
     * Sets frontpage banner and block.
     * @return void
     */
    public function frontpage()
    {
        $view = $this->di->get("view");

        // Add Banner region and block.
        $view->add("layout/header", [], "header");
        $view->add("block/header-me", [], "header-block");
    }
}