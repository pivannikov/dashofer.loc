<?php
declare(strict_types = 1);

namespace Controllers;

use Core\Controller;
use Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $this->title = "Job titles";
        $jobs = (new Job())->getAll();
        return $this->renderTemplate('jobs', ['jobs' => $jobs, 'title' => $this->title]);
    }

    public function create()
    {
        $this->title = "Create";
        $title = $_POST['title'];
        if (isset($title) && !empty($title)) {

            (new Job())->createJob($title);
        }
        header('Location: /jobs');
    }

    public function update($id)
    {
        $this->title = "Update";
        $title = $_POST['title'];
        if (isset($title) && !empty($title)) {
            (new Job())->updateJob($id['var'], $title);
        }
        header('Location: /jobs');
    }

    public function delete($id)
    {
        $this->title = "Delete";
        (new Job())->deleteJob($id['var']);
        header('Location: /jobs');
    }
}