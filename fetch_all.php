<?php
header('Content-Type: application/json');
header('Acess-Control-Allow-Origin" *');

require_once('db.php');
$sql = "SELECT `id`, `name`, `email` FROM `table`";
$result = mysqli_query($conn,$sql) or die ("SQL  Query Faild");

if (mysqli_num_rows($result) > 0) {
  $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
  echo json_encode($output);
  
} else {
  echo json_encode(array('message:' => 'No Recode Found', 'Status' => 'False'));
}
?>
