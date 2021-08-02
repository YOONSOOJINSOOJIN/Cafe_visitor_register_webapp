<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  'password',
  'cafe_visitor_register');
  # title, description 이라는 사용자가 입력한 정보를 그대로 php에 입력하는 행위는 보안에 취약, 따라서 관리 필요

  $filtered = array(
    'visitor_regidence'=>mysqli_real_escape_string($conn, $_POST['visitor_regidence']),
    'visitor_phone'=>mysqli_real_escape_string($conn, $_POST['visitor_phone']),
    'visitor_temp'=>mysqli_real_escape_string($conn, $_POST['visitor_temp'])
  );

$sql = "
  INSERT INTO info
    (visitor_regidence, visitor_phone, visitor_temp, visit_date)
    VALUES(
      '{$filtered['visitor_regidence']}',
      '{$filtered['visitor_phone']}',
      '{$filtered['visitor_temp']}',
        NOW()
    )
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} else {
  echo '성공했습니다. ';
}
?>
