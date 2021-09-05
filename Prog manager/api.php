<?php
header("Content-type: application/json; charset=utf-8");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omarmazin";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "errr";
} 
$sql = "SELECT * FROM programmanagment";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $programname = $row["progn"] ;
    $color = $row['color'];
    $arr = array("Name" => $programname, "Color" => $color );

    echo json_encode($arr);
  }
} else {
  echo "0 results";
}

?>