<?php
// Only process the form if $_POST isn't empty
if ( ! empty( $_POST ) ) {
  
  // Connect to MySQL
  $mysqli = new mysqli( 'mysql.dailylifefilms.com', 'gaminor', 'homecoming98930', 'dlf_itc240' );
  
  // Check our connection
  if ( $mysqli->connect_error ) {
    die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
  }
  
  // Insert our data
  $sql = "INSERT INTO shipping ( firstname, lastname, address, address2, apt, city, country, state_province, zip, phone, mail_list ) VALUES ( '{$mysqli->real_escape_string($_POST['firstname'])}', '{$mysqli->real_escape_string($_POST['lastname'])}', '{$mysqli->real_escape_string($_POST['address'])}', '{$mysqli->real_escape_string($_POST['address2'])}', '{$mysqli->real_escape_string($_POST['apt'])}', '{$mysqli->real_escape_string($_POST['city'])}', '{$mysqli->real_escape_string($_POST['country'])}', '{$mysqli->real_escape_string($_POST['state_province'])}', '{$mysqli->real_escape_string($_POST['zip'])}', '{$mysqli->real_escape_string($_POST['phone'])}', '{$mysqli->real_escape_string($_POST['mail_list'])}' )";
  $insert = $mysqli->query($sql);
  
  // Print response from MySQL
  if ( $insert ) {
    echo "Success! Row ID: {$mysqli->insert_id}";
  } else {
    die("Error: {$mysqli->errno} : {$mysqli->error}");
  }
  
  // Close our connection
  $mysqli->close();
}
?>
