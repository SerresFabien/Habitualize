<?php

namespace Habitualize\controllers;

use Habitualize\lib\vendor\yasmf\yasmf\src\yasmf\View;

/**
 * Default controller
 */
class HomeController {
    public function index(): View {
        return new View("views/home_page");
    }
}