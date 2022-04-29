<?php
$mysqli = new mysqli("localhost", "root", "", "phpweb");

// CREATE TABLE
function create_table($table, $atributes,$mysqli){
  $sql = "CREATE TABLE $table (
    $atributes
  )";
  if ($mysqli->query($sql) !== true){
    return $mysqli->error;
  }
}

// INSERT DATA
function insert_data($table, $columns, $values, $mysqli){
  $sql = "INSERT INTO $table $columns VALUES $values ;";
  if($mysqli->query($sql) !== true){
    return $mysqli->error;
  }
  
}

// select table by query
function select_query($query, $mysqli){
  $sql = "$query";
  $qr = mysqli_query($mysqli, $sql);
  $html = [];
  while ($rows = mysqli_fetch_array($qr)) {
    $html[] = $rows;
  }
  return $html;
}


// DELETE TABLE WITH CONDITION
function delete_condition($condition, $table, $mysqli)
{
  $sql = "DELETE FROM $table WHERE $condition";
  if($mysqli->query($sql) !== true){
    return $mysqli->error;
  }
}

function delete_parent_condition($condition, $table, $mysqli)
{
  $sql = "DELETE FROM $table WHERE $condition;";
  if($mysqli->query($sql) !== true){

    return $mysqli->error;
  }
}

// EDIT TABLE WITH CONDITION - ONLY 1 COLUMN
function edit_condition($condition, $table, $column, $value, $mysqli)
{
  $sql = "UPDATE $table
  SET $column = $value
  WHERE $condition ;";
  if($mysqli->query($sql) !== true){
    return $mysqli->error;
  }
}

// EDIT TABLEs WITH CONDITION 
function edits_condition($condition, $table,$setValue , $mysqli)
{
  $sql = "UPDATE $table
  SET $setValue
  WHERE $condition;";
  if($mysqli->query($sql) !== true){
    return $mysqli->error;
  }
}

//SELECT TABLE 
function select_table($column, $table, $mysqli)
{
  $sql = "SELECT $column FROM $table;";
  $qr = mysqli_query($mysqli, $sql);
  $html = [];
  while ($rows = mysqli_fetch_array($qr)) {
    $html[] = $rows;
  }
  return $html;
}

//GENERATE TO ID VIDEO
function generate($url){
  $pos = strpos($url, "?v=");
  return substr($url,$pos+3,11);
}

//GENERATE TO IFRAME
function generate_iframe($url){
  $string = '<iframe class="embedVideo"  src="https://www.youtube.com/embed/'.generate($url).'" 
    title="YouTube video player" frameborder="0" allow=" autoplay; clipboard-write; 
    encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>';
  return $string;
}