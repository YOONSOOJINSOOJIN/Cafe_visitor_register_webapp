<?php
$conn = mysqli_connect(
  'localhost', // 주소
  'root',
  'password',
  'cafe_visitor_register');

 echo '<h1>Database</h1>';

$sql = "SELECT * FROM info";
$result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)) {
    echo $row['visitor_regidence'].' '.$row['visitor_phone'].' '.$row['visitor_temp'].'<br>';
    echo $row['visit_date'].'<br>'.'<br>';
}
