<?php
session_start();
require('../../dine/db.php');

$action = $_POST['action'];

if ($_SESSION['user'] == true) {
  try
  {   

    //Save the contents to database
    if($action == 'add')
    {
      $title = $_POST['title'];
      $content = SQLite3::escapeString(trim($_POST['content']));
      $position = $_POST['position'];
      
      $data = array(
          'title' => $title,
          'content' => $content,
          'position' => $position
      );
    
      $query = $DB->create('contents', $data);

    }
   
    //Code to save the data to database
    else if($action == 'update')
    {
      $id = $_POST['id'];
      $title = $_POST['title'];
      $content = SQLite3::escapeString(trim($_POST['content']));
      $position = $_POST['position'];
      
      $data = array(
          'title' => $title,
          'content' => $content,
          'position' => $position
      );
    
      $query = $DB->update('contents', $data, $id);

    } 
    
    /*
      Delete by ID
    */
    else if($action == 'delete')
    {
      $query = $DB->delete('contents', $_POST['id']);
    }
      
  	header('Location: ../index.php');
  }


  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
  
} else {
	header('Location: ../login.php');
}   