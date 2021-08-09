<?php
use \Core\Route;

return [
    new Route('', 'Employee', 'index'),
    new Route('/employee/create', 'Employee', 'create'),
    new Route('/employee/update/:var', 'Employee', 'update'),
    new Route('/employee/delete/:var', 'Employee', 'delete'),
    new Route('/jobs', 'Job', 'index'),
    new Route('/job/create', 'Job', 'create'),
    new Route('/job/update/:var', 'Job', 'update'),
    new Route('/job/delete/:var', 'Job', 'delete'),
];
	
