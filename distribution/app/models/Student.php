<?php

class Student extends Model
{
    public function findAll()
    {
        // SQL query to select all records from the students table
        $query = "SELECT * FROM students";

        // Execute the query and return the result
        return $this->query($query);
    }
    // working
    // public function search($lastname, $section)
    // {
    //     $query = "SELECT * FROM $this->table WHERE 1=1";
    //     $data = [];

    //     if (!empty($lastname)) {
    //         $query .= " AND lastname LIKE :lastname";
    //         $data[':lastname'] = '%' . $lastname . '%';
    //     }

    //     if (!empty($section)) {
    //         $query .= " AND yearsec LIKE :section";
    //         $data[':section'] = '%' . $section . '%';
    //     }

    //     return $this->query($query, $data);
    // }
    public function search($lastname, $section)
    {
        $query = "SELECT * FROM $this->table WHERE 1=1";
        $data = [];

        if (!empty($lastname)) {
            $query .= " AND LOWER(lastname) LIKE LOWER(:lastname)";
            $data[':lastname'] = '%' . $lastname . '%';
        }

        if (!empty($section)) {
            $query .= " AND LOWER(yearsec) LIKE LOWER(:section)";
            $data[':section'] = '%' . $section . '%';
        }

        return $this->query($query, $data);
    }
}