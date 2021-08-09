<?php
declare(strict_types = 1);

namespace Core;

class Controller
{
    protected function renderTemplate($view, $data = []) {
        return new Page($this->title, $view, $data);
    }

    protected function validate($params)
    {
        foreach ($params as $param) {
            if (!isset($param) || empty($param)) {
                return false;
            }
        }
        return true;
    }
}

