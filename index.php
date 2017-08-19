
<?php
  $host="mysql153.secureserver.net";
  $uname="HNGdb";
  $pass="android";
  
  // Create Connection
  
  $connection= 
  mysql_connect ($host, $uname, $pass);
  
  if (!$connection) {
     die ("A connection to the server could not be established!"); 
  }
  
  $result=mysql_select_db ("HNGdb");
  
  if (! $result) {
     die ("database could not be selected");
  }
     
  echo "Database HNGdb is ready for use.";
  
  // Insert Database
  
  $id = "2";
      $name = "Intern_data";

      $query = "INSERT INTO Intern SET id='$id', name='$name'";
      $result = mysql_query($query);

      // Display an appropriate message
      if ($result) 
         echo "<p>Product successfully inserted!</p>";
      else 
         echo "<p>There was a problem inserting the Intern!</p>";

      mysql_close();
?>

