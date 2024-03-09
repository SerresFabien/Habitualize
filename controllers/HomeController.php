<?php

namespace Habitualize\controllers;

use Habitualize\lib\vendor\yasmf\yasmf\src\yasmf\HttpHelper;
use Habitualize\lib\vendor\yasmf\yasmf\src\yasmf\View;

/**
 * Default controller
 */
class HomeController {
    public function index(): View {
        return new View("views/home_page");
    }

    /**
     * Display erreur page
     * @return View the error page view
     */
    public function error(): View {
        $view = new View("views/error");
        $err_code = HttpHelper::getParam("code");
        $view->setVar("err_code", $err_code);
        return $view;
    }
}