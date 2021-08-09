<?php
declare(strict_types = 1);

namespace Core;

class Track
{
    public function __construct(
        private $controller, 
        private $action, 
        private $params
    ) {}
    
    public function __get($property)
    {
        return $this->$property;
    }
}