<?php
declare(strict_types = 1);

namespace Controllers;

use Core\Controller;
use Models\Employee;
use Models\Job;

class EmployeeController extends Controller
{
    public function index()
    {
        $this->title = "All employees";
        $employees = (new Employee())->getAll();
        $jobs = (new Job())->getAll();
        return $this->renderTemplate('employees', ['employees' => $employees, 'jobs' => $jobs, 'title' => $this->title]);
    }

    public function create()
    {
        $this->title = "Create";

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $titul = $_POST['titul'];
        $job_title = $_POST['job_title'];
        $birthday = $_POST['birthday'];
        $params = [$name, $surname, $titul, $job_title, $birthday];

        if ($this->validate($params)) {

            (new Employee())->createEmployee($params);
        }
        header('Location: /');

    }

    public function update($id)
    {
        $this->title = "Update";

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $titul = $_POST['titul'];
        $job_title = $_POST['job_title'];
        $birthday = $_POST['birthday'];
        $params = [$name, $surname, $titul, $job_title, $birthday];

        if ($this->validate($params)) {

            (new Employee())->updateEmployee($id['var'], $params);
        }
        header('Location: /');
    }

    public function delete($id)
    {
        $this->title = "Delete";
        (new Employee())->deleteEmployee($id['var']);
        header('Location: /');
    }
}