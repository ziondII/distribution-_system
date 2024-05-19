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
}