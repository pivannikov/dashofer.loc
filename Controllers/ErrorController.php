<?php
namespace Controllers;

use Core\Controller;

class ErrorController extends Controller
{
    public function notFound() {
        $this->title = 'Page not found';

        return $this->renderTemplate('404', ['title' => $this->title]);
    }
}
