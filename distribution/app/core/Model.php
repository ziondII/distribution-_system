<?php
class Model extends Database
{
    public function __construct()
  {
    if (!property_exists($this, 'table')) {

      $this->table = strtolower($this::class) . 's';
    }
  }

  public function findAll()
  {
    $query = "select * from  $this->table";

    $result = $this->query($query);


    if ($result) {
      return $result;
    }
    return false;
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

  public function first($data, $data_not = [])
  {
    $keys = array_keys($data);
    $keys_not = array_keys($data_not);

    $query = "select * from  $this->table where ";

    foreach ($keys as $key) {
      $query .= $key . " = :" . $key . " && ";
    }

    foreach ($keys_not as $key) {
      $query .= $key . " != :" . $key . " && ";
    }

    $query = trim($query, ' && ');

    $data = array_merge($data, $data_not);
    $result = $this->query($query, $data);

    if ($result) {
      return $result[0];
    }
    return false;
  }

  public function insert($data)
  {
    $columns = implode(', ', array_keys($data));
    $values = implode(', :', array_keys($data));
    $query = "insert into $this->table ($columns) values (:$values)";

    $this->query($query, $data);

    return false;
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
        return false;
    }

  public function delete($id, $column = 'id')
  {
    $data[$column] = $id;
    $query = "delete from $this->table where $column = :$column";

    $this->query($query, $data);

    return false;
  }
}