<?php 
  if(isset($_POST['email']))
  {
    $email = $_POST['email'];
  }
  
  $db = mysql_connect("dbmy0012.whservidor.com", "comercialb43", "GrupoAnalisi01"); 
  mysql_select_db("comercialb43", $db);
  mysql_query("INSERT INTO address (email) VALUES ('$email')", $db);
?>