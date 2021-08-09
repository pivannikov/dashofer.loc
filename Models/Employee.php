<?php
declare(strict_types = 1);

namespace Models;

use Core\Model;

class Employee extends Model
{
    public function getAll()
    {
        return $this->findMany("
            SELECT s.id, s.name, s.surname, s.titul, s.birthday, jt.title as job_title FROM staff s
            JOIN job_titles jt ON jt.id=s.job_title
        ");
    }

    public function createEmployee($params = [])
    {
        list($name, $surname, $titul, $job_title, $birthday) = $params;
        return $this->create("
            INSERT INTO staff(name, surname, titul, job_title, birthday) 
            VALUES ('$name', '$surname', '$titul', '$job_title', '$birthday')
        ");
    }

    public function updateEmployee($id, $params = [])
    {
        return $this->update("
            UPDATE staff SET name=?, surname=?, titul=?, job_title=?, birthday=?
            WHERE id=$id
        ", $params);
    }

    public function deleteEmployee($id)
    {
        return $this->delete("DELETE FROM staff WHERE id=$id");
    }

}