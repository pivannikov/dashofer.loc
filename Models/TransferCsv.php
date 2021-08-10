<?php
declare(strict_types = 1);

namespace Models;

require_once $_SERVER['DOCUMENT_ROOT'] . './Core/Model.php';
require_once $_SERVER['DOCUMENT_ROOT'] . './conf/connection.php';

use Core\Model;

class TransferCsv extends Model
{
    private function getAll()
    {
        return $this->findMany("
            SELECT s.id, s.name, s.surname, s.titul, s.birthday, jt.title as job_title FROM staff s
            JOIN job_titles jt ON jt.id=s.job_title
        ");
    }

    public function burn($name = 'file')
    {
        $fp = fopen("{$name}.csv", 'w');

        foreach ($this->getAll() as $fields) {
            fputcsv($fp, $fields, ';');
        }

        fclose($fp);
    }

}

