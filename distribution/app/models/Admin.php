<?php

class Admin extends Model
{
    protected $table = 'admins';

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