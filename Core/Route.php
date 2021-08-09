<?php
declare(strict_types = 1);

namespace Core;

class Route
{
    public function __construct(
        private $path, 
        private $controller, 
        private $action
    ) {}
    
    public function __get($property)
    {
        return $this->$property;
    }
}