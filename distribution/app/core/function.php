<?php

function show($stuff)
{
    echo '<pre>';
    print_r($stuff);
    echo '</pre>';
}
function redirect($path)
{
  header("Location: " . ROOT . "/" . $path);
}

function get_var($key)
{
  if (isset($_POST[$key])) {
    return $_POST[$key];
  }
}

function get_select($key, $value)
{
  if (isset($_POST[$key])) {

    if ($_POST[$key] == $value) {

      return "selected";
    }
  }

  return "";
}
function search($name, $section)
{
    $query = "SELECT * FROM $this->table WHERE (LOWER(firstname) LIKE :name OR LOWER(lastname) LIKE :name) AND LOWER(yearsec) LIKE :section";
    $params = [
        'name' => '%' . strtolower($name) . '%',
        'section' => '%' . strtolower($section) . '%'
    ];
    
    // Debug: Remove or comment out these lines after verifying they are correct
    // echo $query;
    // print_r($params);
    
    return $this->query($query, $params);
}