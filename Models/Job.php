<?php
declare(strict_types = 1);

namespace Models;

use Core\Model;

class Job extends Model
{

    public function getAll()
    {
        return $this->findMany("SELECT * FROM job_titles");
    }

    public function createJob($title)
    {
        return $this->create("
            INSERT INTO job_titles(title) 
            VALUES ('$title')
        ");
    }

    public function updateJob($id, $title)
    {
        return $this->update("
            UPDATE job_titles SET title='$title'
            WHERE id=$id
        ");
    }

    public function deleteJob($id)
    {
        return $this->delete("DELETE FROM job_titles WHERE id=$id");
    }

}