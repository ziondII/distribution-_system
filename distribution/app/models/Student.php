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

    protected $table = 'students';

    public function find($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = :id";
        return $this->query($query, [':id' => $id])[0] ?? null;
    }
    public function update($id, $data)
    {
        $keys = array_keys($data);
        $query = "UPDATE $this->table SET ";

        foreach ($keys as $key) {
            $query .= "$key = :$key, ";
        }

        $query = rtrim($query, ', ');
        $query .= " WHERE id = :id";
        $data['id'] = $id;

        $this->query($query, $data);
    }
 
}