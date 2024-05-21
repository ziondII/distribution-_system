<?php

class Student extends Model
{
    protected $table = 'students';
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

    public function find($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = :id";
        return $this->query($query, [':id' => $id])[0] ?? null;
    }
    public function where($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);

        $query = "SELECT * FROM $this->table WHERE ";

        foreach ($keys as $key) {
            $query .= "$key = :$key AND ";
        }

        foreach ($keys_not as $key) {
            $query .= "$key != :$key AND ";
        }

        $query = rtrim($query, ' AND ');

        $data = array_merge($data, $data_not);
        $result = $this->query($query, $data);

        return $result ? $result : false;
    }

 
}